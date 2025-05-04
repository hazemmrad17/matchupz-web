import sys
import json
import pandas as pd
import joblib

# Load model and label encoder
model = joblib.load('models/rf_model.joblib')
label_encoder = joblib.load('models/label_encoder.joblib')

# Read input data
input_file = sys.argv[1]
output_file = sys.argv[2]

with open(input_file, 'r') as f:
    data = json.load(f)

# Convert to DataFrame
df = pd.DataFrame(data)

# Encode facility_category
df['facility_category'] = label_encoder.transform(df['facility_category'])

# Predict suitability scores
predictions = model.predict(df)

# Save predictions
with open(output_file, 'w') as f:
    json.dump(predictions.tolist(), f)