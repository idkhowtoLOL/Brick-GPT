<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <div class="login-header">Login</div>
        <form action="login_process.php" method="post">
            <div class="login-input">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="login-input">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="#terms">TERMS OF SERVICE</a>
                <a href="#rules">RULES OF CONDUCT</a>
                <a href="#privacy">PRIVACY POLICY</a>
                <a href="#staff">STAFF</a>
                <a href="#merch">MERCH STORE</a>
            </div>
            <div class="footer-bottom">
                <p>2024 Infinity Productions. Brick-GPT is a Branch of Infinity Productions.</p>
            </div>
        </div>
    </footer>
</body>
</html>
