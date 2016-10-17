<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 4 exercises</title>
</head>
<body>

<!-- START: Exercise 1 -->
<h3>Exercise 1: Conditions</h3>
<p><a href="lab4_ex1.php">Find exercise 1 here</a></p>
<br>
<!-- END: Exercise 1 -->

<!-- START: Exercise 2a -->
<h3>Exercise 2a: BMI calculator</h3>
<form action="lab4_ex2a.php" method="get">
    <label for="ex2a-height">Your height in cm:</label>
    <p><input type="text" id="ex2a-height" name="height"></p>
    <label for="ex2a-weight">Your weight in kg:</label>
    <p><input type="text" id="ex2a-weight" name="weight"></p>
    <input type="submit">
</form>
<br>
<!-- END: Exercise 2a -->

<!-- START: Exercise 2b -->
<h3>Exercise 2b: Welcome message</h3>
<form action="lab4_ex2b.php" method="get">
    <label for="ex2b-name">Your name:</label>
    <p><input type="text" id="ex2b-name" name="name"></p>
    <label for="ex2b-language">Your language:</label>
    <p>
        <select name="language" id="ex2b-language">
            <option value="da">Danish</option>
            <option value="en">English</option>
            <option value="se">Swedish</option>
        </select>
    </p>
    <input type="submit">
</form>
<br>
<!-- END: Exercise 2b -->

<!-- START: Exercise 3 -->
<h3>Exercise 3: Profile information</h3>
<form action="lab4_ex3.php" method="post">
    <label for="ex3-name">Your name:</label>
    <p><input type="text" id="ex3-name" name="name"></p>
    <label for="ex3-age">Your age:</label>
    <p><input type="text" id="ex3-age" name="age"></p>
    <label for="ex3-gender">Your gender:</label>
    <p>
        <select name="gender" id="ex3-gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
    </p>
    <p>
        <input type="radio" name="language" id="ex3-language-danish" value="danish">
        <label for="ex3-language-danish">Danish language</label>
    </p>
    <p>
        <input type="radio" name="language" id="ex3-language-other" value="other">
        <label for="ex3-language-other">Other language</label>
    </p>
    <label for="ex3-hobbies">Your hobbies:</label>
    <p>
        <textarea name="hobbies" id="ex3-hobbies" cols="21" rows="4"></textarea>
    </p>
    <input type="submit">
</form>
<!-- END: Exercise 3 -->

</body>
</html>
