<?php session_start();
if (isset($_SESSION['login'])) {
    header("Location: ../pages/home.php");
    exit;
}

$login = true;
if (isset($_GET['mode']) && $_GET['mode'] === 'register') {
    $login = false;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

<?php
    if ($login) {
        include './blocks/login.php';
        echo '<div><a href="?mode=register">If you don\'t have a page, you can register.</a></div>';
    } else {
        include './blocks/register.php';
        echo '<p><a href="?mode=login">If you have a page, you can log in.</a></p>';
    }
?>

</body>
</html>

