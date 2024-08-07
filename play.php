<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play</title>
    <link rel="stylesheet" href="play.css"> <!-- Link to the new CSS file -->
</head>
<body>
    <div class="message">
        <h1>Not Out Yet!</h1>
        <p><a href="index.php">Back to Home</a></p> <!-- Updated link to index.php -->
    </div>
    <audio id="background-music" src="/assets/1.mp3" loop autoplay></audio>
    <script>
        // Optional JavaScript to ensure audio starts playing
        window.addEventListener('load', function() {
            var audio = document.getElementById('background-music');
            if (audio) {
                audio.play();
            }
        });
    </script>
</body>
</html>
