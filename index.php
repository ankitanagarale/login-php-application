<?php
session_start();
if (isset($_SESSION['username'])) {
  header('Location: welcome.php');
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="insight-app-sec-validation" content="a78f87d5-8a9a-4b87-9e5f-b423a6a5c6fd">
</head>
<body>
    <h2>Login Form</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>