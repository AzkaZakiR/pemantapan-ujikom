<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    header('Location: ../views/home.php');
    // exit();
} else {
    $error_message = "Invalid username or password!";
    echo "<center><h1>Username atau Password Salah</h1></center>";
    header('Location: login.php?error=' . $error_message);
    exit();
}

$conn->close();
?>