import pandas as pd
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.linear_model import LogisticRegression
from flask import Flask, request, jsonify
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score

app = Flask(__name__)
# Load the dataset
data = pd.read_csv("D:\Coding\python\Mini Project Model\Dataset\Symptom2Disease.csv")  # Replace with your data file path

# Separate features (text descriptions) and target labels (disease names)
X = data["text"]
y = data["label"]


vectorizer = TfidfVectorizer(max_features=5000)  # Adjust max_features as needed
X_features = vectorizer.fit_transform(X)
# Split the data into training and testing sets
  # Adjust test_size as needed
X_train, X_test, y_train, y_test = train_test_split(X_features, y, test_size=0.2, random_state=42)
model = LogisticRegression(multi_class="ovr")


# Train the model (same as before)
model.fit(X_train, y_train)

# Make predictions on the testing set
y_pred = model.predict(X_test)


# Evaluate model performance (accuracy)
accuracy = accuracy_score(y_test, y_pred)
print(f"Model Accuracy: {accuracy:.4f}")


# Function to predict disease based on text description
def predict_disease(text):
  # Preprocess the text (same as before)
  text_features = vectorizer.transform([text])
  predicted_disease = model.predict(text_features)[0]
  # return Predict the disease
  return predicted_disease


#______________________________________________________-API STARTS HERE-___________________________________________________________________


@app.route("/predict_disease", methods=["POST"])
def process_text():
  data = request.get_json()
  if data is None:
    return jsonify({"error": "Invalid request format. Please send JSON data."}), 400
  # return data
  # User input for text description
  text = data.get("text", "")
  if text == "":
    return jsonify({"error": "Empty text input."}), 400

  predicted_disease = predict_disease(text)

  return jsonify({"predicted_disease": predicted_disease})

if __name__ == "__main__":
  app.run(debug=True)
