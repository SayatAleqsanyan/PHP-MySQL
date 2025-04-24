<?php
session_start();

require_once '../server/db.php';

$login = $_POST['login'];
$password = $_POST['password'];

if (empty($login) || empty($password)) {
    die("All fields are required.");
}

$sql = "SELECT * FROM test_users WHERE login = '$login' AND pass = '$password'";

$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
    echo "Welcome, $login!";
    $_SESSION['login'] = $login;
    $_SESSION['error'] = null;

    header("Location: ../pages/home.php");
} else {
    $_SESSION['error'] = "Login or Password is invalid";
    header("Location: ../index.php");
}