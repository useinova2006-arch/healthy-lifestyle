<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Healthy Lifestyle</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Contact & Support</h1>
    </header>

    <nav>
        <a href="/">Home</a>
        <a href="/nutrition">Nutrition</a>
        <a href="/activity">Activity</a>
        <a href="/contact">Contact</a>
    </nav>

    <div class="container">
        <h2>Have a Question?</h2>
        <p>You can see basic questions here or ask your own. Our experts (Nutritionists and Trainers) are here to help you.</p>
        
        <div class="news-card">
            <h4>FAQ:</h4>
            <p><strong>Q: How much water should I drink?</strong><br>A: Generally, about 8 glasses a day, but it depends on your activity level.</p>
        </div>

        <h3>Send us a message</h3>
        <form style="display: flex; flex-direction: column; gap: 10px; margin-top: 20px;">
            <input type="text" placeholder="Your Name" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            <textarea placeholder="Your Question" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; height: 100px;"></textarea>
            <button type="button" style="background: #2d6a4f; color: white; padding: 10px; border: none; border-radius: 4px; cursor: pointer;">
                Send Message
            </button>
        </form>

        <a href="/" class="btn-back">← Back to Main Page</a>
    </div>
</body>
</html>