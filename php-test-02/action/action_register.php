<?php
session_start();

require_once '../server/db.php';

$login = $_POST['login'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];
$email = $_POST['email'];

if (empty($login) || empty($password) || empty($repeat_password) || empty($email)) {
    die("All fields are required.");
}

if ($password !== $repeat_password) {
    die("Passwords do not match.");
}

$sql_user = "SELECT * FROM test_users WHERE login = '$login' OR email = '$email'";

$result = $conn -> query($sql_user);

if ($conn -> query("SELECT * FROM test_users WHERE login = '$login'") -> num_rows > 0) {
    die("A user with that name already exists.");
}

if ($conn -> query("SELECT * FROM test_users WHERE email = '$email'") -> num_rows > 0) {
    die("User already exists.");
}

if ($result -> num_rows > 0) {
    die("User already exists.");
}

$sql = "INSERT INTO test_users (login, pass, email) VALUES ('$login', '$password', '$email')";

$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
    echo "Welcome, $login!";
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;

    header("Location: ../pages/home.php");
}else{
    $_SESSION['error'] = "Login or Password is invalid";
    header("Location: ../index.php");
}