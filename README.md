# 🩺 Healthify – Smart Disease Prediction & Health Suggestion System 💡

> _“An early diagnosis is the first step toward a healthy tomorrow.”_  
> — 👨‍⚕️ Healthify Team

---

## 📚 Project Overview

**Healthify** is a hybrid web-based and AI-powered application that:
- Predicts diseases from user-input symptoms using Machine Learning 🤖
- Suggests relevant precautions using a MySQL-backed PHP frontend 💊
- Provides a clean, interactive frontend hosted on **XAMPP** (PHP-HTML-CSS) 🧑‍💻

---

## 🚀 Features

✅ Predict disease from text symptom description  
✅ Suggest precautions for each disease  
✅ Responsive PHP-based frontend  
✅ Secure login system (bcrypt password hashing)  
✅ Modular structure with dataset included  
✅ Easily extendable for medicine suggestions in the future  

---

## 🗂️ Project Structure

```
project-root/
├── backend/
│   ├── testfile.py                  # Flask API to predict disease
│   ├── requirements.txt             # Python dependencies
│   └── Dataset/                     # CSV/Excel datasets for training
│
├── frontend/
│   └── miniproject/                 # Place in XAMPP's htdocs/
│       ├── index.php
│       ├── login.php
│       ├── logout.php
│       ├── predictdisease.php
│       ├── includes/               # DB, navbar, footer, CSS/JS
│       └── images/                 # UI images used in frontend
│
├── database/
│   ├── healthify.sql                # phpMyAdmin-ready SQL dump
│   └── DatasetExcel/                # Raw Excel sheets for training/DB
│
├── README.md                        # 📄 This file
└── .gitignore                       # 🚫 Ignore unnecessary files
```

---

## ⚙️ Setup Instructions

### 💻 Backend (Flask + ML)

1. 📦 Install dependencies
   ```bash
   pip install -r requirements.txt
   ```

2. 🧠 Place your dataset in the correct location
   > current code uses a file path like:
   ```python
   data = pd.read_csv("D:/Coding/python/Mini Project Model/Dataset/Symptom2Disease.csv")
   ```
   ✅ Replace this with a **relative path** like:
   ```python
   data = pd.read_csv("Dataset/Symptom2Disease.csv")
   ```

3. 🚀 Run the Flask server:
   ```bash
   python testfile.py
   ```

---

### 🌐 Frontend (PHP + MySQL)

1. 🛠️ Install [XAMPP](https://www.apachefriends.org/index.html) if not already installed
2. 📂 Place `miniproject` folder into:
   ```
   C:/xampp/htdocs/
   ```
3. 🗃️ Import MySQL Database:
   - Open [phpMyAdmin](http://localhost/phpmyadmin)
   - Create a database named: `healthify`
   - Import `healthify.sql` into it

4. 🔐 Update `includes/dbconnect.php` if your DB credentials differ

5. 🌍 Access the site at:
   ```
   http://localhost/miniproject/
   ```

---

## 🤖 API Endpoint (Flask)

- **POST** `/predict_disease`  
  Example:
  ```json
  {
    "text": "I feel feverish with body ache and cold"
  }
  ```

- **Response**:
  ```json
  {
    "predicted_disease": "Common Cold"
  }
  ```

---

## 💡 What more features you can Add?

1. ✅ **Add user registration + forgot password** to PHP frontend  
2. ✅ Add **loading spinner** while backend is processing  
3. ✅ **Connect frontend to Flask API** directly (via JavaScript or PHP CURL)  
4. ✅ Include **medicine suggestions** from your Excel sources  
5. 📊 Add **charts or visualizations** using Chart.js  
6. 📄 Add Medicine Suggestion And Prescription Generator

---

## 🤝 Credits

- 👨‍💻 Developed by: **Vedant Karande**
- 🧠 ML Model: Logistic Regression (sklearn)
- 📊 Data Source: Provided Excel files
- 💻 Frontend: PHP, HTML, CSS, JS
- ⚙️ Backend: Flask + scikit-learn

---

## ✨ Final Thoughts

> _“You don’t have to be great to start, but you have to start to be great.”_  
> – Zig Ziglar

Let Healthify be your first step toward a healthy coding life! ❤️

---

### 📬 Want to contribute or extend?

Fork it, improve it, and feel free to connect!
