<?php
/**
 * Web programming hand-in 3, login page.
 * User: Boris Lykke Nielsen, 20125327
 * Date: 07-11-2016
 * Time: 14:09
 *
 * Shows a login form redirecting to lab9_menu.php.
 */

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
            <input type="text" id="lab9_login_username" name="username" value="<?= $_GET['u'] ?>">
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
