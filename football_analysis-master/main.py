import sys
import argparse
import os
import logging
import subprocess
import cv2 # type: ignore
import glob
import queue
import threading
import tempfile
import time
import signal
import traceback
import json
from typing import List, Tuple, Optional
import numpy as np # type: ignore
from tracking import ObjectTracker, KeypointsTracker
from club_assignment import ClubAssigner, Club
from ball_to_player_assignment import BallToPlayerAssigner
from annotation import FootballVideoProcessor, AbstractVideoProcessor

logging.basicConfig(level=logging.DEBUG, filename='football_analysis.log', filemode='w',
                    format='%(asctime)s - %(levelname)s - %(message)s')

def _convert_frames_to_video(frame_dir: str, output_video: str, fps: float, frame_size: Tuple[int, int]) -> None:
    fourcc = cv2.VideoWriter_fourcc('m', 'p', '4', 'v')
    out = cv2.VideoWriter(output_video, fourcc, fps, frame_size)
    
    frame_files = sorted(glob.glob(os.path.join(frame_dir, "*.jpg")))
    frame_count = len(frame_files)

    if frame_count <= 0:
        out.release()
        logging.error("There are no frames to save")
        print("There are no frames to save")
        return
    
    for filename in frame_files:
        img = cv2.imread(filename)
        out.write(img)
    
    out.release()
    logging.debug(f"Video saved as {output_video}")
    print(f"Video saved as {output_video}")

def save_team_data(processor: FootballVideoProcessor, output_video: str) -> None:
    """Save team data to a JSON file."""
    output_dir = os.path.dirname(output_video)
    logging.debug(f"Output directory for team data: {output_dir}")
    if not os.path.exists(output_dir):
        logging.error(f"Output directory does not exist: {output_dir}")
        print(f"Output directory does not exist: {output_dir}")
        return
    
    # Test write permissions
    test_file_path = os.path.join(output_dir, "test_write.txt")
    try:
        with open(test_file_path, 'w') as f:
            f.write("Test write permission")
        logging.debug(f"Test file successfully written to {test_file_path}")
        os.remove(test_file_path)
        logging.debug(f"Test file removed: {test_file_path}")
    except Exception as e:
        logging.error(f"Failed to write test file to {test_file_path}: {str(e)}")
        print(f"Failed to write test file to {test_file_path}: {str(e)}")
        return

    team_data = processor.finalize_team_data()
    team_data_path = os.path.splitext(output_video)[0] + '_team_data.json'
    logging.debug(f"Attempting to save team data to: {team_data_path}")
    try:
        with open(team_data_path, 'w') as f:
            json.dump(team_data, f, indent=4)
        logging.debug(f"Team data successfully saved to {team_data_path}")
        print(f"Team data saved to {team_data_path}")
    except Exception as e:
        logging.error(f"Failed to save team data to {team_data_path}: {str(e)}")
        print(f"Failed to save team data to {team_data_path}: {str(e)}")

def process_video(processor=None, video_source: str = 0, output_video: Optional[str] = "output.mp4", 
                  batch_size: int = 30, skip_seconds: int = 0) -> None:
    if processor is not None and not isinstance(processor, AbstractVideoProcessor):
        raise ValueError("The processor must be an instance of AbstractVideoProcessor.")
    
    cap = cv2.VideoCapture(video_source)
    
    if not cap.isOpened():
        print("Error: Could not open video source.")
        logging.error("Could not open video source.")
        return

    fps = int(cap.get(cv2.CAP_PROP_FPS))
    frames_to_skip = int(skip_seconds * fps)

    for _ in range(frames_to_skip):
        cap.read()

    frame_queue = queue.Queue(maxsize=100)
    processed_queue = queue.Queue(maxsize=100)
    stop_event = threading.Event()
    
    def signal_handler(signum, frame):
        print("Interrupt received, initiating shutdown...")
        logging.info("Interrupt received, initiating shutdown.")
        stop_event.set()

    signal.signal(signal.SIGINT, signal_handler)
    
    def frame_capture_thread() -> None:
        print("Starting frame capture")
        logging.debug("Starting frame capture")
        frame_count = frames_to_skip
        try:
            while cap.isOpened() and not stop_event.is_set():
                ret, frame = cap.read()
                if not ret:
                    print("No more frames to capture or end of video")
                    logging.debug("No more frames to capture or end of video")
                    break
                resized_frame = cv2.resize(frame, (1920, 1080))
                frame_queue.put((frame_count, resized_frame))
                frame_count += 1
        except Exception as e:
            print(f"Error in frame capture: {e}")
            logging.error(f"Error in frame capture: {e}")
        finally:
            cap.release()
            frame_queue.put(None)
        print("Frame capture complete")
        logging.debug("Frame capture complete")

    def frame_processing_thread() -> None:
        print("Starting frame processing")
        logging.debug("Starting frame processing")
        frame_batch = []
        while not stop_event.is_set():
            try:
                item = frame_queue.get(timeout=1)
                if item is None:
                    print("No more frames to process")
                    logging.debug("No more frames to process")
                    if frame_batch:
                        process_batch(frame_batch)
                    break
                frame_count, frame = item
                frame_batch.append((frame_count, frame))

                if len(frame_batch) == batch_size:
                    process_batch(frame_batch)
                    frame_batch = []
            except queue.Empty:
                continue
            except Exception as e:
                print(f"Error in frame processing: {e}")
                logging.error(f"Error in frame processing: {e}")

        processed_queue.put(None)
        print("Frame processing complete")
        logging.debug("Frame processing complete")

    def process_batch(batch: List[Tuple[int, np.ndarray]]) -> None:
        frames = [frame for _, frame in batch]
        logging.debug(f"Processing batch of {len(frames)} frames")
        try:
            processed_batch = processor.process(frames, fps)
            logging.debug(f"Processed {len(processed_batch)} frames")
            for (frame_count, _), processed_frame in zip(batch, processed_batch):
                processed_queue.put((frame_count, processed_frame))
        except Exception as e:
            print(f"Error processing batch: {e}")
            logging.error(f"Error processing batch: {e}")
            traceback.print_exc()

    def frame_display_thread(temp_dir: str) -> None:
        print("Starting frame display")
        logging.debug("Starting frame display")
        while not stop_event.is_set():
            try:
                item = processed_queue.get(timeout=1)
                if item is None:
                    print("No more frames to display")
                    logging.debug("No more frames to display")
                    break
                frame_count, processed_frame = item

                frame_filename = os.path.join(temp_dir, f"frame_{frame_count:06d}.jpg")
                cv2.imwrite(frame_filename, processed_frame)
                
                cv2.imshow('Football Analysis', processed_frame)

                if cv2.waitKey(1) & 0xFF == ord('q'):
                    print("'q' pressed, initiating shutdown")
                    logging.info("'q' pressed, initiating shutdown")
                    stop_event.set()
                    break
            except queue.Empty:
                continue
            except Exception as e:
                print(f"Error displaying frame: {e}")
                logging.error(f"Error displaying frame: {e}")

        cv2.destroyAllWindows()
        print("Frame display complete")
        logging.debug("Frame display complete")

    width = 1920
    height = 1080

    with tempfile.TemporaryDirectory() as temp_dir:
        try:
            threads = [
                threading.Thread(target=frame_capture_thread, name="Capture"),
                threading.Thread(target=frame_processing_thread, name="Processing"),
                threading.Thread(target=frame_display_thread, args=(temp_dir,), name="Display")
            ]

            for thread in threads:
                thread.start()

            while any(thread.is_alive() for thread in threads):
                if stop_event.is_set():
                    print("Stopping threads...")
                    logging.info("Stopping threads...")
                    break
                time.sleep(0.1)

            stop_event.set()

            for thread in threads:
                thread.join(timeout=5)
                if thread.is_alive():
                    print(f"Thread {thread.name} did not terminate gracefully")
                    logging.warning(f"Thread {thread.name} did not terminate gracefully")

            while not frame_queue.empty():
                frame_queue.get()
            while not processed_queue.empty():
                processed_queue.get()

            print("All threads have completed.")
            logging.debug("All threads have completed.")

            # Save tracking data and team data immediately after threads stop
            if processor and output_video:
                processor.save_tracks(output_video)  # Save tracking data
                save_team_data(processor, output_video)  # Save team data

            if output_video is not None:
                print("Converting frames to video...")
                logging.debug("Converting frames to video...")
                _convert_frames_to_video(temp_dir, output_video, fps, (width, height))

                # Proceed with FFmpeg re-encoding
                temp_output = output_video + '.temp.mp4'
                os.rename(output_video, temp_output)
                try:
                    logging.debug(f"Re-encoding video with ffmpeg: {temp_output} -> {output_video}")
                    subprocess.run([
                        'ffmpeg', '-i', temp_output, '-c:v', 'libx264', '-c:a', 'aac', '-strict', '-2', '-movflags', '+faststart', output_video
                    ], check=True, capture_output=True, text=True)
                    logging.debug("Re-encoding completed successfully")
                    os.remove(temp_output)
                except subprocess.CalledProcessError as e:
                    logging.error(f"ffmpeg re-encoding failed: {e.stderr}")
                    print(f"ffmpeg re-encoding failed: {e.stderr}")
                    os.rename(temp_output, output_video)

        except Exception as e:
            print(f"An error occurred: {e}")
            logging.error(f"An error occurred: {e}")
            traceback.print_exc()

        finally:
            cap.release()
            cv2.destroyAllWindows()

    print("Video processing completed. Program will now exit.")
    logging.debug("Video processing completed.")
    os._exit(0)

def main():
    parser = argparse.ArgumentParser(description='Football Video Analysis')
    parser.add_argument('--input_video', required=True, help='Path to input video')
    parser.add_argument('--output_video', required=True, help='Path to output video')
    args = parser.parse_args()

    output_dir = os.path.dirname(args.output_video)
    if not os.path.exists(output_dir):
        os.makedirs(output_dir, exist_ok=True)
        logging.debug(f"Created output directory: {output_dir}")

    logging.debug(f"Input video: {args.input_video}")
    logging.debug(f"Output video: {args.output_video}")
    logging.debug(f"Output directory: {output_dir}")

    base_path = os.path.dirname(os.path.abspath(__file__))

    obj_model_path = os.path.join(base_path, 'models', 'weights', 'object-detection.pt')
    kp_model_path = os.path.join(base_path, 'models', 'weights', 'keypoints-detection.pt')
    field_img_path = os.path.join(base_path, 'input_videos', 'field_2d_v2.png')

    if not os.path.exists(obj_model_path):
        logging.error(f"Object detection model not found at: {obj_model_path}")
        sys.exit(1)
    if not os.path.exists(kp_model_path):
        logging.error(f"Keypoints detection model not found at: {kp_model_path}")
        sys.exit(1)
    if not os.path.exists(field_img_path):
        logging.error(f"Field image not found at: {field_img_path}")
        sys.exit(1)
    if not os.path.exists(args.input_video):
        logging.error(f"Input video not found at: {args.input_video}")
        sys.exit(1)

    obj_tracker = ObjectTracker(
        model_path=obj_model_path,
        conf=.5,
        ball_conf=.05
    )

    kp_tracker = KeypointsTracker(
        model_path=kp_model_path,
        conf=.3,
        kp_conf=.7
    )

    club1 = Club('Club1', (232, 247, 248), (6, 25, 21))
    club2 = Club('Club2', (172, 251, 145), (239, 156, 132))
    club_assigner = ClubAssigner(club1, club2)
    ball_player_assigner = BallToPlayerAssigner(club1, club2)

    top_down_keypoints = np.array([
        [0, 0], [0, 57], [0, 122], [0, 229], [0, 293], [0, 351],
        [32, 122], [32, 229], [64, 176], [96, 57], [96, 122], [96, 229], [96, 293],
        [263, 0], [263, 122], [263, 229], [263, 351],
        [431, 57], [431, 122], [431, 229], [431, 293], [463, 176],
        [495, 122], [495, 229],
        [527, 0], [527, 57], [527, 122], [527, 229], [527, 293], [527, 351],
        [210, 176], [317, 176]
    ])

    processor = FootballVideoProcessor(
        obj_tracker,
        kp_tracker,
        club_assigner,
        ball_player_assigner,
        top_down_keypoints,
        field_img_path=field_img_path,
        save_tracks_dir=output_dir,
        draw_frame_num=True
    )

    logging.debug("Starting video processing")
    process_video(
        processor,
        video_source=args.input_video,
        output_video=args.output_video,
        batch_size=5
    )
    logging.debug("Video processing completed")

if __name__ == '__main__':
    main()