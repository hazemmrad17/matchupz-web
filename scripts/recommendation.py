import json
import sys
import numpy as np
from sklearn.preprocessing import StandardScaler

def haversine_distance(lat1, lon1, lat2, lon2):
    """Calculate the Haversine distance between two points in kilometers."""
    R = 6371.0  # Earth's radius in km
    lat1, lon1, lat2, lon2 = map(np.radians, [lat1, lon1, lat2, lon2])
    dlat = lat2 - lat1
    dlon = lon2 - lon1
    a = np.sin(dlat/2)**2 + np.cos(lat1) * np.cos(lat2) * np.sin(dlon/2)**2
    c = 2 * np.arctan2(np.sqrt(a), np.sqrt(1-a))
    return R * c

def recommend_facilities(user_lat, user_lon, preferred_category, facilities):
    """Recommend facilities based on user location and preferences."""
    if not facilities:
        return [], []

    # Prepare feature matrix
    features = []
    facility_ids = []
    for facility in facilities:
        if facility['lat'] == 0 and facility['lon'] == 0:
            continue  # Skip facilities with invalid coordinates
        distance = haversine_distance(user_lat, user_lon, facility['lat'], facility['lon'])
        category_match = 1.0 if facility['category'].lower() == preferred_category.lower() else 0.8
        capacity = facility['capacity'] if facility['capacity'] is not None else 0
        reservation_count = facility['reservation_count'] if facility['reservation_count'] is not None else 0
        temp = facility['temp'] if facility['temp'] is not None else 20
        humidity = facility['humidity'] if facility['humidity'] is not None else 50

        # Features: distance, category match, capacity, reservation count, temp, humidity
        features.append([distance, category_match, capacity, reservation_count, temp, humidity])
        facility_ids.append(facility['id'])

    if not features:
        return [], []

    # Normalize features
    scaler = StandardScaler()
    features = scaler.fit_transform(features)

    # Simple weighted scoring (can be replaced with a pre-trained ML model)
    weights = [-1.0, 1.0, 0.5, -0.3, -0.2, -0.1]  # Negative weights for distance, reservation count, temp, humidity
    scores = np.dot(features, weights)

    # Sort facilities by score
    sorted_indices = np.argsort(scores)[::-1]  # Descending order
    top_indices = sorted_indices[:3]  # Top 3 facilities

    ranked_ids = [facility_ids[i] for i in top_indices]
    ranked_scores = [float(scores[i]) for i in top_indices]

    # Normalize scores to 0-1 range for display
    if ranked_scores:
        score_min, score_max = min(ranked_scores), max(ranked_scores)
        if score_max != score_min:
            ranked_scores = [(score - score_min) / (score_max - score_min) for score in ranked_scores]
        else:
            ranked_scores = [1.0] * len(ranked_scores)

    return ranked_ids, ranked_scores

if __name__ == "__main__":
    # Read input from Symfony (passed as JSON via stdin)
    input_data = json.load(sys.stdin)

    user_lat = input_data['user_lat']
    user_lon = input_data['user_lon']
    preferred_category = input_data['preferred_category']
    facilities = input_data['facilities']

    # Get recommendations
    ranked_ids, scores = recommend_facilities(user_lat, user_lon, preferred_category, facilities)

    # Output result as JSON
    result = {
        'ids': ranked_ids,
        'scores': scores
    }
    print(json.dumps(result))