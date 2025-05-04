import pandas as pd
import numpy as np
from sklearn.ensemble import RandomForestRegressor
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import LabelEncoder
import joblib

# Simulated historical data (replace with actual data from your database)
data = {
    'temperature': [20, 28, 8, 15, 25, 18, 30, 12, 22, 27],  # °C
    'humidity': [60, 75, 90, 65, 55, 70, 80, 85, 62, 58],  # %
    'cloud_coverage': [30, 60, 80, 40, 20, 50, 70, 75, 35, 25],  # %
    'wind_speed': [5, 10, 15, 7, 3, 8, 12, 9, 6, 4],  # km/h
    'precipitation_prob': [10, 40, 70, 20, 5, 30, 50, 60, 15, 8],  # %
    'facility_category': ['terrain foot', 'terrain basket', 'salle gym', 'terrain foot', 'football', 
                         'terrain basket', 'salle gym', 'terrain foot', 'football', 'terrain basket'],
    'capacity': [100, 50, 30, 80, 120, 60, 40, 90, 110, 55],  # persons
    'reservation_count': [20, 15, 10, 25, 30, 18, 12, 22, 28, 16],  # past reservations
    'avg_user_rating': [4.5, 3.8, 3.2, 4.0, 4.8, 3.9, 3.5, 4.2, 4.7, 4.1],  # 1-5 stars
    'suitability_score': [0.9, 0.6, 0.3, 0.8, 0.95, 0.7, 0.5, 0.75, 0.85, 0.8]  # Target (0-1)
}

df = pd.DataFrame(data)

# Encode categorical variable (facility_category)
label_encoder = LabelEncoder()
df['facility_category'] = label_encoder.fit_transform(df['facility_category'])

# Save the label encoder
joblib.dump(label_encoder, 'models/label_encoder.joblib')

# Features and target
X = df[['temperature', 'humidity', 'cloud_coverage', 'wind_speed', 'precipitation_prob', 
        'facility_category', 'capacity', 'reservation_count', 'avg_user_rating']]
y = df['suitability_score']

# Split data
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Train Random Forest Regressor
model = RandomForestRegressor(n_estimators=100, random_state=42)
model.fit(X_train, y_train)

# Evaluate model
print("Training score:", model.score(X_train, y_train))
print("Test score:", model.score(X_test, y_test))

# Save the model
joblib.dump(model, 'models/rf_model.joblib')