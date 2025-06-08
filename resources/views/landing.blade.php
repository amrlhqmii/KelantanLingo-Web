<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KelantanLingo App</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
</head>

<body>
    <header class="hero">
        <div class="container">
            <h1>KelantanLingo</h1>
            <p class="tagline">Your gateway to understanding the Kelantanese dialect</p>
            <a href="#" class="download-btn">Download Now</a>
        </div>
    </header>

    <section class="snapshot">
        <div class="container">
            <h2>App Preview</h2>
            <div class="feature-row">
                <div class="feature-item">
                    <img src="{{ asset('images/translation.png') }}" alt="Translation Feature" class="app-image" />
                    <h3>Dialect Translation</h3>
                    <p>Translate standard Malay sentences into authentic Kelantanese dialect quickly and accurately.</p>
                </div>
                <div class="feature-item">
                    <img src="{{ asset('images/favorite.png') }}" alt="Favorites Feature" class="app-image" />
                    <h3>Save to Favorites</h3>
                    <p>Bookmark your favorite translations for easy access later.</p>
                </div>
                <div class="feature-item">
                    <img src="{{ asset('images/word_glossary.png') }}" alt="Word Glossary Feature" class="app-image" />
                    <h3>Word Glossary</h3>
                    <p>Browse a curated list of common Kelantanese words with meanings and usage examples.</p>
                </div>
                <div class="feature-item">
                    <img src="{{ asset('images/activity.png') }}" alt="Interactive Activity" class="app-image" />
                    <h3>Interactive Activity</h3>
                    <p>Test your fluency through fun activities that reinforce your knowledge of the Kelantan dialect.</p>
                </div>
            </div>
        </div>
    </section>



    <section class="features">
        <div class="container">
            <h2>Why KelantanLingo?</h2>
            <ul>
                <li>🗣️ Translate standard Malay into authentic Kelantan dialect</li>
                <li>📚 Includes a word glossary for Kelantanese terms</li>
                <li>🧠 Test your fluency with interactive activities</li>
                <li>⭐ Add translated words to your favorites for quick reference</li>
                <li>📱 User-friendly and intuitive interface</li>
                <li>⚡ Fast and accurate translation engine</li>
                <li>📍 Perfect for locals, students, and culture enthusiasts</li>
            </ul>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 KelantanLingo. All rights reserved.</p>
            <p>Have questions? <a href="mailto:support@kelantanlingo.com">Contact Us</a></p>
        </div>
    </footer>
</body>

</html>