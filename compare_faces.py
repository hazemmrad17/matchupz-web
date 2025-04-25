import sys
import face_recognition
import numpy as np

def compare_faces(stored_image_path, captured_image_path):
    try:
        # Load images
        stored_image = face_recognition.load_image_file(stored_image_path)
        captured_image = face_recognition.load_image_file(captured_image_path)

        # Detect faces
        stored_face_encodings = face_recognition.face_encodings(stored_image)
        captured_face_encodings = face_recognition.face_encodings(captured_image)

        if not stored_face_encodings:
            print("No face detected in stored image", file=sys.stderr)
            return False, None
        if not captured_face_encodings:
            print("No face detected in captured image", file=sys.stderr)
            return False, None

        # Compare faces
        stored_encoding = stored_face_encodings[0]
        captured_encoding = captured_face_encodings[0]
        results = face_recognition.compare_faces([stored_encoding], captured_encoding, tolerance=0.6)
        distance = face_recognition.face_distance([stored_encoding], captured_encoding)[0]
        similarity_score = (1 - distance) * 100  # Convert distance to similarity percentage

        print(f"Similarity score: {similarity_score:.2f}", file=sys.stderr)
        return results[0], similarity_score
    except Exception as e:
        print(f"Error in face comparison: {str(e)}", file=sys.stderr)
        return False, None

if __name__ == "__main__":
    if len(sys.argv) != 3:
        print("Usage: python compare_faces.py <stored_image_path> <captured_image_path>", file=sys.stderr)
        sys.exit(1)

    stored_image_path = sys.argv[1]
    captured_image_path = sys.argv[2]

    match, score = compare_faces(stored_image_path, captured_image_path)
    print("true" if match else "false")