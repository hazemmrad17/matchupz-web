#!/usr/bin/env python3
import sys
import json
from roboflow import Roboflow
import cv2
import numpy as np

def main():
    if len(sys.argv) != 2:
        print(json.dumps({
            'error': 'Please provide an image path'
        }))
        sys.exit(1)

    image_path = sys.argv[1]

    try:
        # Initialize Roboflow
        rf = Roboflow(api_key="YOUR_API_KEY")  # Replace with your Roboflow API key
        project = rf.workspace().project("YOUR_PROJECT")  # Replace with your project name
        model = project.version(1).model  # Replace 1 with your model version

        # Load and preprocess image
        image = cv2.imread(image_path)
        if image is None:
            raise ValueError("Could not load image")

        # Make prediction
        predictions = model.predict(image_path, confidence=40, overlap=30)
        
        # Format results
        results = []
        for prediction in predictions:
            results.append({
                'class': prediction['class'],
                'confidence': prediction['confidence'],
                'x': prediction['x'],
                'y': prediction['y'],
                'width': prediction['width'],
                'height': prediction['height']
            })

        # Return results as JSON
        print(json.dumps({
            'success': True,
            'predictions': results
        }))

    except Exception as e:
        print(json.dumps({
            'error': str(e)
        }))
        sys.exit(1)

if __name__ == "__main__":
    main() 