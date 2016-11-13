<?php
/**
 * Created by PhpStorm.
 * User: boris
 * Date: 07-11-2016
 * Time: 14:09
 */
session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AMDB Login</title>
</head>
<body>
<form action="lab9_menu.php" method="post">
    <p>Please enter your username and password to log in to the Awesome Movie Database</p>
    <p>
        <label for="lab9_login_username">Username
            <input type="text" id="lab9_login_username" name="username">
        </label>
    </p>
    <p>
        <label for="lab9_login_password">Password
            <input type="password" id="lab9_login_password" name="password">
        </label>
    </p>
    <input type="submit">
</form>
</body>
</html>
