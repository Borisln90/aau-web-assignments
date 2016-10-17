<?php
/**
 * Created by PhpStorm.
 * User: boris
 * Date: 11-10-2016
 * Time: 11:08
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Exercise 1: BMI calculator</h3>
<form action="lab5_ex1.php" method="get">
    <label for="ex1-height">Your height in cm:</label>
    <p><input type="text" id="ex1-height" name="height"></p>
    <label for="ex1-weight">Your weight in kg:</label>
    <p><input type="text" id="ex1-weight" name="weight"></p>
    <input type="submit">
</form>

<br>
<h3>Exercise 2: Profile information</h3>
<form action="lab5_ex2.php" method="post">
    <label for="ex2-name">Your name:</label>
    <p><input type="text" id="ex2-name" name="name"></p>
    <label for="ex2-age">Your age:</label>
    <p><input type="text" id="ex2-age" name="age"></p>
    <label for="ex2-gender">Your gender:</label>
    <p>
        <select name="gender" id="ex2-gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
    </p>
    <p>
        <input type="radio" name="language" id="ex2-language-danish" value="danish">
        <label for="ex2-language-danish">Danish language</label>
    </p>
    <p>
        <input type="radio" name="language" id="ex2-language-other" value="other">
        <label for="ex2-language-other">Other language</label>
    </p>
    <label for="ex2-hobbies">Your hobbies:</label>
    <p>
        <textarea name="hobbies" id="ex2-hobbies" cols="21" rows="4"></textarea>
    </p>
    <input type="submit">
</form>
</body>
</html>
