<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
    exit;
}
echo "Welcome " . $_SESSION['login'];

?>

<a href="../action/action_logout.php">Դուրս գալ</a>