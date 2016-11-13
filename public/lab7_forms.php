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

<!-- START: Exercise 1 -->
<h3>Exercise 1</h3>
<form action="lab7_ex1.php" method="post">
    <p>Select your favorite flavors</p>
    <p>
        <label for="ex1_flavors_vanilla">
            <input type="checkbox" name="flavors[]" id="ex1_flavors_vanilla" value="vanilla"> Vanilla
        </label>
    </p>
    <p>
        <label for="ex1_flavors_pistachio">
            <input type="checkbox" name="flavors[]" id="ex1_flavors_pistachio" value="pistachio"> Pistachio
        </label>
    </p>
    <p>
        <label for="ex1_flavors_chocolate">
            <input type="checkbox" name="flavors[]" id="ex1_flavors_chocolate" value="chocolate"> Chocolate
        </label>
    </p>
    <p>
        <label for="ex1_flavors_rum_raisin">
            <input type="checkbox" name="flavors[]" id="ex1_flavors_rum_raisin" value="rum raisin"> Rum Raisin
        </label>
    </p>
    <p>
        <label for="ex1_flavors_licorice">
            <input type="checkbox" name="flavors[]" id="ex1_flavors_licorice" value="licorice"> Licorice
        </label>
    </p>
    <input type="submit">
</form>
<br>
<!-- END: Exercise 1 -->

<!-- START: Exercise 2A -->
<h3>Exercise 2A</h3>
<p><a href="lab7_ex2a.php">Click here to see exercise 2A</a></p>
<br>
<!-- END: Exercise 2A -->

<!-- START: Exercise 2B -->
<h3>Exercise 2B</h3>
<form action="lab7_ex2b.php" method="post">
    <label for="ex2b_shows"> List your favorite TV Shows</label>
    <p><small>One line per show.</small></p>
    <p><textarea name="shows" id="ex2b_shows" cols="30" rows="10"></textarea></p>
    <p><input type="submit"></p>
</form>
<!-- END: Exercise 2B -->

</body>
</html>