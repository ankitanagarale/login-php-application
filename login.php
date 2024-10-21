<?php
session_start();
$conn = new mysqli('localhost', 'test', 'test@123', 'test');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
        exit();
    } else {
        echo 'Invalid credentials.';
    }
}

$conn->close();
?>