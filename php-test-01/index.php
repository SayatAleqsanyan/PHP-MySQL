<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>авторизации</title>
</head>
<body>

    <form action="register.php" method="post">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="repeat_password" placeholder="Repeat Password">
        <input type="email" name="email" placeholder="Email">

        <button type="submit">регистрация</button>
    </form>

    <form action="login.php" method="post">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Password">

        <button type="submit">войти</button>
    </form>

</body>
</html>
