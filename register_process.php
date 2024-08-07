<?php
// Database connection
$servername = "mysql3.serv00.com";
$username = "m5499_brickdata";
$password = "9i/WEetDo8MUsH-g6364a4^4BZl5P[";
$dbname = "m5499_SupaBlox";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize user inputs
$user = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars($_POST['password']);
$confirm_pass = htmlspecialchars($_POST['confirm_password']);

// Validate input
if ($pass !== $confirm_pass) {
    die("Passwords do not match.");
}
if (strlen($user) <= 2 || strlen($user) > 20 || preg_match('/[~`!@#\$%\^&\*\(\)_\+=\[\]\{\}\|;:"<>\,\.\/\?]/', $user)) {
    die("Invalid characters in username.");
}

// Hash the password
$password_hash = password_hash($pass, PASSWORD_DEFAULT);

// Generate a unique string for the user's IP address
$unique_string = uniqid('', true);

// Insert the new user into the database
$sql = "INSERT INTO users (username, password_hash, unique_string) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $user, $password_hash, $unique_string);

if ($stmt->execute()) {
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['login_time'] = time();
    header('Location: dashboard.php');
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
