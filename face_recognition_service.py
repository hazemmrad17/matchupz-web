from flask import Flask, request, jsonify
import face_recognition
import numpy as np
from PIL import Image
import io
import base64

app = Flask(__name__)

@app.route('/compare_faces', methods=['POST'])
def compare_faces():
    data = request.get_json()
    captured_image = data['captured_image']
    reference_image_path = data['reference_image_path']

    captured_image = base64.b64decode(captured_image.split(',')[1])
    captured_image = Image.open(io.BytesIO(captured_image))
    captured_image = np.array(captured_image)

    reference_image = face_recognition.load_image_file(reference_image_path)
    captured_encodings = face_recognition.face_encodings(captured_image)
    reference_encodings = face_recognition.face_encodings(reference_image)

    if not captured_encodings or not reference_encodings:
        return jsonify({'success': False, 'message': 'No faces detected'})

    results = face_recognition.compare_faces([reference_encodings[0]], captured_encodings[0])
    return jsonify({'success': results[0], 'message': 'Face match' if results[0] else 'Face does not match'})

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000)