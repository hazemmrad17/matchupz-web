import tensorflow as tf
import tensorflow_hub as hub
import numpy as np
from PIL import Image
import os

def test_environment():
    print("Testing environment setup...")
    
    # Test TensorFlow
    print("\nTensorFlow version:", tf.__version__)
    print("TensorFlow is using GPU:", tf.config.list_physical_devices('GPU'))
    
    # Test TensorFlow Hub
    print("\nTensorFlow Hub version:", hub.__version__)
    
    # Test NumPy
    print("\nNumPy version:", np.__version__)
    
    # Test PIL
    print("\nPIL version:", Image.__version__)
    
    # Test basic TensorFlow operations
    print("\nTesting basic TensorFlow operations...")
    a = tf.constant([[1.0, 2.0], [3.0, 4.0]])
    b = tf.constant([[5.0, 6.0], [7.0, 8.0]])
    c = tf.matmul(a, b)
    print("Matrix multiplication result:", c.numpy())
    
    print("\nAll tests completed successfully!")

if __name__ == "__main__":
    test_environment() 