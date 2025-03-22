<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News Site</title>
    <style>
        .article { display: inline-block; margin: 20px; text-align: center; }
        img { width: 200px; height: 150px; }
        button { margin-top: 10px; padding: 10px; background-color: #007BFF; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>WE LIKE TO READ</h1>
    <div class="article">
        <img src="https://via.placeholder.com/200x150?text=Article+1" alt="Article 1">
        <p>Article 1</p>
        <button onclick="window.location.href='article1.php'">View details</button>
    </div>
    <div class="article">
        <img src="https://via.placeholder.com/200x150?text=Article+2" alt="Article 2">
        <p>Article 2</p>
        <button onclick="window.location.href='article2.php'">View details</button>
    </div>
    <div class="article">
        <img src="https://via.placeholder.com/200x150?text=Article+3" alt="Article 3">
        <p>Article 3</p>
        <button onclick="window.location.href='article3.php'">View details</button>
    </div>
    <div class="article">
        <img src="https://via.placeholder.com/200x150?text=Article+1" alt="Article Secure">
        <p>Article Secure</p>
        <button onclick="window.location.href='articleSecure.php'">View details</button>
    </div>
</body>
</html>
