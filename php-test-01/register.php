<?php
require_once 'db.php';

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

    $sql = "INSERT INTO test_users (login, pass, email) VALUES ('$login', '$password', '$email')";

    $conn -> query($sql);

