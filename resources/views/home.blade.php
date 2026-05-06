<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy Lifestyle - Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>
        <h1>Healthy Lifestyle</h1>
    </header>

    <nav>
        <a href="/">Home</a>
        <a href="/nutrition">Nutrition</a>
        <a href="/activity">Activity</a>
        <a href="/contact">Contact</a>
        <a href="/login">Login</a>
    </nav>

    <!-- 🔥 ВОТ СЮДА МЫ ДОБАВИЛИ ПЕРЕВОД -->
    <div id="google_translate_element" style="margin: 15px;"></div>

    <div class="container">
        <h2>About Our Project</h2>
        <p>This website is designed for teenagers and adults interested in a healthy lifestyle. Our mission is to promote good habits and provide safe, reliable information about health.</p>

        <h3>News Feed</h3>
        <div class="news-card">
            <h4>🥑 Healthy Recipe of the Day</h4>
            <p>Try our new Green Avocado Salad. Rich in healthy fats and perfect for a quick lunch!</p>
        </div>

        <div class="news-card">
            <h4>🏃‍♂️ Morning Routine</h4>
            <p>Start your day with a 15-minute stretching routine to boost your energy levels.</p>
        </div>

        <h3>Upload File</h3>
        <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">
            <button type="submit">Upload</button>
        </form>

        @if(session('success'))
            <p style="color:green;">{{ session('success') }}</p>
        @endif

        <h3>Send Email</h3>

        <form action="/send-email" method="POST">
            @csrf

            <input type="email" name="email" placeholder="Enter email" required>
            <br><br>

            <textarea name="message" placeholder="Enter your message" required></textarea>
            <br><br>

            <button type="submit">Send Email</button>
        </form>

    </div>

    <!-- 🔥 СКРИПТ GOOGLE TRANSLATE -->
    <script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,ru,kk',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
    </script>

    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>