<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 7 Forms</title>
</head>
<body>
<h3>Exercise 1</h3>
<form action="lab7_ex1.php" method="post">
    <label for="ex1_flavors">Select your favorite flavors</label>
    <p><input type="checkbox" name="flavors[]" value="vanilla"> Vanilla</p>
    <p><input type="checkbox" name="flavors[]" value="pistachio"> Pistachio</p>
    <p><input type="checkbox" name="flavors[]" value="chocolate"> Chocolate</p>
    <p><input type="checkbox" name="flavors[]" value="rum raisin"> Rum Raisin</p>
    <p><input type="checkbox" name="flavors[]" value="licorice"> Licorice</p>
    <input type="submit">
</form>
<br>

<h3>Exercise 2A</h3>
<p><a href="lab7_ex2a.php">Click here to see exercise 2A</a></p>
<br>

<h3>Exercise 2B</h3>
<form action="lab7_ex2b.php" method="post">
    <label for="ex2b_shows"> List your favorite TV Shows</label>
    <p><small>One line per show.</small></p>
    <p><textarea name="shows" id="ex2b_shows" cols="30" rows="10"></textarea></p>
    <p><input type="submit"></p>
</form>

</body>
</html>