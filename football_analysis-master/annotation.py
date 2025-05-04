import cv2 # type: ignore
import numpy as np # type: ignore
import logging
from typing import List, Optional, Tuple, Dict, Any
from tracking import ObjectTracker, KeypointsTracker
from club_assignment import ClubAssigner, Club
from ball_to_player_assignment import BallToPlayerAssigner

logging.basicConfig(level=logging.DEBUG, filename='football_analysis.log', filemode='w',
                    format='%(asctime)s - %(levelname)s - %(message)s')

class AbstractVideoProcessor:
    def process(self, frames: List[np.ndarray], fps: int) -> List[np.ndarray]:
        raise NotImplementedError

class FootballVideoProcessor(AbstractVideoProcessor):
    def __init__(self, object_tracker: ObjectTracker, keypoints_tracker: KeypointsTracker,
                 club_assigner: ClubAssigner, ball_to_player_assigner: BallToPlayerAssigner,
                 top_down_keypoints: np.ndarray, field_img_path: str,
                 save_tracks_dir: Optional[str] = None, draw_frame_num: bool = False):
        self.object_tracker = object_tracker
        self.keypoints_tracker = keypoints_tracker
        self.club_assigner = club_assigner
        self.ball_to_player_assigner = ball_to_player_assigner
        self.top_down_keypoints = top_down_keypoints
        self.field_img = cv2.imread(field_img_path)
        self.save_tracks_dir = save_tracks_dir
        self.draw_frame_num = draw_frame_num
        
        # Initialize team data collection
        self.team_data = {
            "possession_frames": {"club1": 0, "club2": 0, "neutral": 0},
            "player_speeds": {},  # {player_id: [speed1, speed2, ...]}
            "last_positions": {},  # {player_id: (x, y, frame_num)} for speed calculation
        }
        self.fps = None  # Will be set during processing
        self.frame_count = 0
        
        if self.field_img is None:
            raise ValueError(f"Could not load field image from {field_img_path}")
        
        self.field_img = cv2.resize(self.field_img, (528, 352))
        self.homography_matrix = None
        
    def _compute_homography(self, keypoints: List[Dict[str, float]]) -> Optional[np.ndarray]:
        if len(keypoints) < 4:
            logging.debug(f"Not enough keypoints to compute homography: {len(keypoints)} keypoints")
            return None
        
        src_pts = []
        dst_pts = []
        
        for kp in keypoints:
            if 'x' not in kp or 'y' not in kp or 'id' not in kp:
                logging.debug(f"Invalid keypoint format: {kp}")
                continue
            x, y = kp['x'], kp['y']
            idx = int(kp['id'])
            if idx >= len(self.top_down_keypoints):
                logging.debug(f"Keypoint ID {idx} out of range for top_down_keypoints (length {len(self.top_down_keypoints)})")
                continue
            src_pts.append([x, y])
            dst_pts.append(self.top_down_keypoints[idx])
        
        if len(src_pts) < 4:
            logging.debug(f"Not enough valid keypoints after filtering: {len(src_pts)}")
            return None
        
        src_pts = np.float32(src_pts).reshape(-1, 1, 2)
        dst_pts = np.float32(dst_pts).reshape(-1, 1, 2)
        
        matrix, _ = cv2.findHomography(src_pts, dst_pts, cv2.RANSAC, 5.0)
        if matrix is None:
            logging.debug("Homography computation failed: matrix is None")
        return matrix
    
    def _draw_field(self, tracks: List[Dict[str, Any]], frame: np.ndarray) -> np.ndarray:
        field_img = self.field_img.copy()
        height, width = frame.shape[:2]
        
        for track in tracks:
            if 'club' not in track:
                continue
            club = track['club']
            if 'center' not in track:
                logging.debug(f"Track missing center: {track}")
                continue
            x, y = track['center']
            
            if self.homography_matrix is not None:
                try:
                    pt = np.float32([[[x, y]]])
                    transformed = cv2.perspectiveTransform(pt, self.homography_matrix)
                    if transformed.shape != (1, 1, 2):
                        logging.debug(f"Invalid transformed shape: {transformed.shape}")
                        continue
                    tx, ty = transformed[0][0]
                    if not (0 <= tx < field_img.shape[1] and 0 <= ty < field_img.shape[0]):
                        logging.debug(f"Transformed coordinates out of bounds: ({tx}, {ty})")
                        continue
                    
                    color = club.primary_color if club else (255, 255, 255)
                    cv2.circle(field_img, (int(tx), int(ty)), 5, color, -1)
                except Exception as e:
                    logging.error(f"Error in drawing field for track {track}: {str(e)}")
                    continue
        
        field_img = cv2.resize(field_img, (width // 4, height // 4))
        frame[0:field_img.shape[0], 0:field_img.shape[1]] = field_img
        return frame
    
    def _calculate_speed(self, player_id: int, current_pos: Tuple[float, float], current_frame: int) -> Optional[float]:
        if player_id not in self.last_positions:
            self.last_positions[player_id] = (current_pos[0], current_pos[1], current_frame)
            return None
        
        last_x, last_y, last_frame = self.last_positions[player_id]
        time_diff = (current_frame - last_frame) / self.fps  # Time in seconds
        if time_diff <= 0:
            return None
        
        # Calculate distance in pixels (simplified, assuming homography-transformed coordinates)
        distance = np.sqrt((current_pos[0] - last_x)**2 + (current_pos[1] - last_y)**2)
        
        # Convert distance to meters (assuming 1 pixel = 0.1 meters, adjust based on your field scale)
        distance_meters = distance * 0.1
        speed_mps = distance_meters / time_diff  # Speed in meters per second
        speed_kmph = speed_mps * 3.6  # Convert to km/h
        
        self.last_positions[player_id] = (current_pos[0], current_pos[1], current_frame)
        
        # Store speed
        if player_id not in self.player_speeds:
            self.player_speeds[player_id] = []
        self.player_speeds[player_id].append(speed_kmph)
        
        return speed_kmph

    def process(self, frames: List[np.ndarray], fps: int) -> List[np.ndarray]:
        self.fps = fps
        processed_frames = []
        
        for frame in frames:
            self.frame_count += 1
            logging.debug(f"Processing frame {self.frame_count}")
            
            # Detect objects and keypoints
            try:
                objects = self.object_tracker.track(frame)
                logging.debug(f"Detected {len(objects)} objects")
            except Exception as e:
                logging.error(f"Error in object tracking for frame {self.frame_count}: {str(e)}")
                objects = []
            
            try:
                keypoints = self.keypoints_tracker.track(frame)
                logging.debug(f"Detected {len(keypoints)} keypoints")
            except Exception as e:
                logging.error(f"Error in keypoint tracking for frame {self.frame_count}: {str(e)}")
                keypoints = []
            
            # Compute homography
            if self.homography_matrix is None or self.frame_count % 30 == 0:
                self.homography_matrix = self._compute_homography(keypoints)
            
            # Assign clubs to players
            players = [obj for obj in objects if obj.get('class') == 'player']
            logging.debug(f"Found {len(players)} players")
            for player in players:
                try:
                    player['club'] = self.club_assigner.assign_club(player, frame)
                except Exception as e:
                    logging.error(f"Error assigning club to player {player.get('id', 'unknown')}: {str(e)}")
                    player['club'] = None
            
            # Assign ball to player and track possession
            ball = next((obj for obj in objects if obj.get('class') == 'ball'), None)
            if ball:
                try:
                    closest_player = self.ball_to_player_assigner.assign_ball_to_player(ball, players)
                    if closest_player and 'club' in closest_player and closest_player['club']:
                        club_name = closest_player['club'].name.lower()
                        self.team_data["possession_frames"][club_name] += 1
                    else:
                        self.team_data["possession_frames"]["neutral"] += 1
                except Exception as e:
                    logging.error(f"Error assigning ball to player in frame {self.frame_count}: {str(e)}")
                    self.team_data["possession_frames"]["neutral"] += 1
            
            # Calculate player speeds using homography-transformed positions
            if self.homography_matrix is not None:
                for player in players:
                    if 'center' not in player:
                        logging.debug(f"Player {player.get('id', 'unknown')} missing center")
                        continue
                    x, y = player['center']
                    try:
                        pt = np.float32([[[x, y]]])
                        transformed = cv2.perspectiveTransform(pt, self.homography_matrix)
                        if transformed.shape != (1, 1, 2):
                            logging.debug(f"Invalid transformed shape for player {player['id']}: {transformed.shape}")
                            continue
                        tx, ty = transformed[0][0]
                        player_id = player['id']
                        self._calculate_speed(player_id, (tx, ty), self.frame_count)
                    except Exception as e:
                        logging.error(f"Error calculating speed for player {player.get('id', 'unknown')}: {str(e)}")
                        continue
            
            # Draw annotations on the frame
            for obj in objects:
                if 'bbox' not in obj:
                    logging.debug(f"Object missing bbox: {obj}")
                    continue
                x1, y1, x2, y2 = map(int, obj['bbox'])
                label = obj.get('class', 'unknown')
                if label == 'player' and 'club' in obj and obj['club']:
                    label = f"{obj['club'].name} {obj['id']}"
                    color = obj['club'].primary_color
                else:
                    color = (255, 255, 255)
                cv2.rectangle(frame, (x1, y1), (x2, y2), color, 2)
                cv2.putText(frame, label, (x1, y1 - 10), cv2.FONT_HERSHEY_SIMPLEX, 0.9, color, 2)
            
            # Draw keypoints
            for kp in keypoints:
                if 'x' not in kp or 'y' not in kp:
                    logging.debug(f"Invalid keypoint: {kp}")
                    continue
                x, y = int(kp['x']), int(kp['y'])
                cv2.circle(frame, (x, y), 5, (0, 255, 0), -1)
            
            # Draw the field with player positions
            frame = self._draw_field(objects, frame)
            
            # Draw frame number if enabled
            if self.draw_frame_num:
                cv2.putText(frame, f"Frame: {self.frame_count}", (50, 50), cv2.FONT_HERSHEY_SIMPLEX, 1, (255, 255, 255), 2)
            
            processed_frames.append(frame)
        
        return processed_frames
    
    def finalize_team_data(self) -> Dict[str, Any]:
        """Finalize and format team data for saving."""
        total_frames = sum(self.team_data["possession_frames"].values())
        possession = {
            "club1": self.team_data["possession_frames"]["club1"] / total_frames if total_frames > 0 else 0,
            "club2": self.team_data["possession_frames"]["club2"] / total_frames if total_frames > 0 else 0
        }
        
        speeds = {}
        for player_id, speed_list in self.player_speeds.items():
            if speed_list:
                avg_speed = sum(speed_list) / len(speed_list)
                speeds[f"player_{player_id}"] = avg_speed
        
        team_data = {
            "possession": [possession],
            "speeds": [speeds],
            "club1_avg_possession": possession["club1"],
            "club2_avg_possession": possession["club2"],
            "average_speed": sum(speeds.values()) / len(speeds) if speeds else 0
        }
        
        logging.debug(f"Finalized team data: {team_data}")
        return team_data