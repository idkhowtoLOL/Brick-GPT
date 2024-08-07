<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="register-container">
        <div class="register-header">Register</div>
        <form action="register_process.php" method="post">
            <div class="register-input">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="register-input">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="register-input">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" class="register-button">Register</button>
        </form>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="#terms">TERMS OF SERVICE</a>
                <a href="#rules">RULES OF CONDUCT</a>
                <a href="#privacy">PRIVACY POLICY</a>
                <a href="#staff">STAFF</a>
                <a href="#merch">MERCH STORE
