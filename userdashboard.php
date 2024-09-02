<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: userlogin.php");
    exit();
}

echo "Welcome to your dashboard, " . htmlspecialchars($_SESSION['username']) . "!";
?>

<a href="userlogout.php">Logout</a>