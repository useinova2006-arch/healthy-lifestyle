<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Expert Portal</title>
</head>
<body>
    <header><h1>Health Expert Portal</h1></header>
    <nav><a href="/">Back to Home</a></nav>
    <div class="container">
        <h2>Create Professional Advice</h2>
        <form style="background: #e3f2fd; padding: 20px; border-radius: 8px; border: 1px solid #bbdefb;">
            <label>Topic (e.g., Cardiology, Dietology):</label><br>
            <input type="text" style="width: 100%; margin-bottom: 10px;"><br>
            <label>Your Expert Tip:</label><br>
            <textarea style="width: 100%; height: 100px; margin-bottom: 10px;"></textarea><br>
            <button type="button" onclick="alert('Tip sent for review!')" style="background: #2196F3; color: white; border: none; padding: 10px 20px; cursor: pointer;">Submit Tip</button>
        </form>

        <h3 style="margin-top: 30px;">Your Previous Tips</h3>
        <div style="background: white; padding: 10px; border: 1px dashed #2196F3; margin-bottom: 10px;">
            <strong>🍎 Nutrition:</strong> Drink at least 2 liters of water daily.
        </div>
        <div style="background: white; padding: 10px; border: 1px dashed #2196F3;">
            <strong>🏃 Activity:</strong> 10,000 steps is a good start for a healthy heart.
        </div>
    </div>
</body>
</html>