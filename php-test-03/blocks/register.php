<?php
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
}
?>

<form action="../action/action_register.php" method="post" style="display: flex; flex-direction: column; align-items: start">
    <input type="text" name="login" placeholder="Login">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="repeat_password" placeholder="Repeat Password">
    <input type="email" name="email" placeholder="Email">
    <input type="submit">
</form>
