<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $storedUsername = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
    $storedPassword = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';

    if ($username === $storedUsername && password_verify($password, $storedPassword)) {
        $_SESSION['username'] = $username;
        echo "Welcome, " . htmlspecialchars($username) . "! <a href='userdashboard.php'>Go to Dashboard</a>";
    } else {
        echo "Invalid username or password. <a href='userlogin.php'>Try again</a>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>