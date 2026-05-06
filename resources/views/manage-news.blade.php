<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>News Management</title>
</head>
<body>
    <header><h1>Editor Workspace</h1></header>
    <nav><a href="/">Back to Home</a></nav>
    <div class="container">
        <h2>Add Healthy Content</h2>
        <form style="background: #f9f9f9; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
            <label>Title:</label><br>
            <input type="text" placeholder="e.g. New Broccoli Salad Recipe" style="width: 100%; margin-bottom: 10px;"><br>
            <label>Category:</label><br>
            <select style="width: 100%; margin-bottom: 10px;">
                <option>Nutrition</option>
                <option>Activity</option>
            </select><br>
            <label>Description:</label><br>
            <textarea style="width: 100%; height: 80px;"></textarea><br>
            <button type="button" onclick="alert('Post published on the main page!')" style="background: #4CAF50; color: white; border: none; padding: 10px 20px; cursor: pointer;">Publish News</button>
        </form>

        <h3 style="margin-top: 30px;">Recent Publications</h3>
        <ul style="list-style: none; padding: 0;">
            <li style="padding: 10px; border-bottom: 1px solid #eee;">✅ Morning Yoga Routine (Published)</li>
            <li style="padding: 10px; border-bottom: 1px solid #eee;">✅ 10 Benefits of Avocado (Published)</li>
        </ul>
    </div>
</body>
</html>