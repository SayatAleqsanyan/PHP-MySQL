<?php

    $servername = "MySQL-8.0";
    $username = "root";
    $password = "";
    $dbname = "date";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

