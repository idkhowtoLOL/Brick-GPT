<?php
// session_check.php
session_start();

if (isset($_SESSION['username'])) {
    if (time() - $_SESSION['last_activity'] > $_SESSION['expire_time']) {
        // Session expired
        session_unset();
        session_destroy();
        header("Location: login.php");
        exit();
    } else {
        // Update last activity time
        $_SESSION['last_activity'] = time();
    }
} else {
    header("Location: login.php");
    exit();
}
?>
