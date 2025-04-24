<?php
require_once 'db.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

if (empty($login) || empty($password)) {
    die("All fields are required.");
}

$sql = "SELECT * FROM test_users WHERE login = '$login' AND pass = '$password'";

$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
    echo "Welcome, $login!";
} else {
    echo "Invalid login or password.";
}

