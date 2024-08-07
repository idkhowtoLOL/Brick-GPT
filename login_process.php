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

// Fetch the user from the database
$sql = "SELECT password_hash FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($password_hash);
$stmt->fetch();

// Verify password
if (password_verify($pass, $password_hash)) {
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['login_time'] = time();
    header('Location: dashboard.php');
    exit();
} else {
    echo "Invalid credentials!";
}

$stmt->close();
$conn->close();
?>
