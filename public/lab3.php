<?php
/**
 * Created by PhpStorm.
 * User: Boris
 * Date: 02-10-2016
 * Time: 18:59
 */

# Exercise 1
$ex1_fahrenheit_input = isset($_POST['fahrenheit']) ? $_POST['fahrenheit'] : '0';
$ex1_celsius_output = 0;
if (isset($_POST['fahrenheit'])) {
    $ex1_celsius_output = ($ex1_fahrenheit_input - 32) * (5/9);
}

# Exercise 2
$ex2_one_input = isset($_POST['ex2-one']) ? $_POST['ex2-one'] : '0';
$ex2_two_input = isset($_POST['ex2-two']) ? $_POST['ex2-two'] : '0';
$ex2_result = $ex2_one_input + $ex2_two_input;

# Exercise 3
$ex3_height_input = isset($_POST['ex3-height']) ? $_POST['ex3-height'] : '0';
$ex3_weight_input = isset($_POST['ex3-weight']) ? $_POST['ex3-weight'] : '0';
$ex3_result = 0;
if ($ex3_height_input != 0 || $ex3_weight_input != '0') {
    $ex3_result = $ex3_weight_input / pow($ex3_height_input/100, 2);
}

# Exercise 4
$ex4_name_input = isset($_POST['ex4-name']) ? $_POST['ex4-name'] : '';
$ex4_age_input = isset($_POST['ex4-age']) ? $_POST['ex4-age'] : '';
$ex4_gender_input = isset($_POST['ex4-gender']) ? $_POST['ex4-gender'] : '';
$ex4_language_input = isset($_POST['ex4-language']) ? $_POST['ex4-language'] : '';
$ex4_hobbies_input = isset($_POST['ex4-hobbies']) ? $_POST['ex4-hobbies'] : '';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./static/css/bootstrap.min.css">
    <title>lab 3</title>
</head>
<body>
    <div class="container">
        <h1>Lab 3</h1>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Exercise 1 <br><small>Fahrenheit to celsius calculator</small></div>
                    <div class="panel-body">
                        <p></p>
                        <form action="" method="post" class="form-inline">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">*F</div>
                                    <input type="text" name="fahrenheit" class="form-control">
                                </div>
                            </div>

                            <input type="hidden" name="exercise" value="1">
                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="panel-footer">
                        Result:
                        <?= round($ex1_celsius_output, 1) ?>
                    </div>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Exercise 2 <br><small>Number addition</small></div>
                    <div class="panel-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="numberinput1">First number</label>
                                <input id="numberinput1" type="text" name="ex2-one" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="numberinput2">Second number</label>
                                <input id="numberinput2" type="text" name="ex2-two" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="panel-footer">
                        Result: <?= $ex2_result ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Exercise 3 <br><small>BMI calculator</small></div>
                    <div class="panel-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="numberinput1">Your height</label>
                                <div class="input-group">
                                    <input id="numberinput1" type="text" name="ex3-height" class="form-control">
                                    <div class="input-group-addon">cm</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="numberinput2">Your weight</label>
                                <div class="input-group">
                                    <input id="numberinput2" type="text" name="ex3-weight" class="form-control">
                                    <div class="input-group-addon">kg</div>
                                </div>

                            </div>
                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="panel-footer">
                        Result: <?= round($ex3_result, 1) ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Exercise 4 <br><small>Table input</small></div>
                    <div class="panel-body">
                        <div class="col-sm-4">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="numberinput1">Name</label>
                                    <input type="text" name="ex4-name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="numberinput1">Age</label>
                                    <input type="text" name="ex4-age" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="numberinput1">Gender</label>
                                    <select name="gender" id="ex4-gender" class="form-control">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">other</option>
                                    </select>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ex4-language" value="da">
                                        Danish language
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ex4-language" value="ot">
                                        Other language
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Hobbies</label>
                                    <textarea name="ex4-hobbies" id="ex4-hobbies" cols="10" rows="3" class="form-control"></textarea>
                                </div>
                                <input type="submit" class="btn btn-primary">
                            </form>
                        </div>
                        <div class="col-sm-8">
                            <table class="table">
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Language</th>
                                    <th>Hobbies</th>
                                </tr>
                                <tr>
                                    <td> <?= $ex4_name_input ?></td>
                                    <td> <?= $ex4_age_input ?></td>
                                    <td> <?= $ex4_gender_input ?></td>
                                    <td> <?= $ex4_language_input ?></td>
                                    <td> <?= $ex4_hobbies_input ?></td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
<script src="./static/js/bootstrap.min.js"></script>
</body>
</html>
