<?php
/**
 * Created by PhpStorm.
 * User: boris
 * Date: 11-10-2016
 * Time: 11:09
 */

/**
 * Calculates BMI.
 * @param $weight string The weight of the user.
 * @param $height string The height of the user.
 * @return float|int the calculated BMI value.
 */
function bmi($weight, $height) {
    return $weight / pow($height/100, 2);
}

/**
 * @param $value
 * @return bool
 */
function validate_height($value) {
    return !empty($value) AND ($value >= 1 AND $value < 300);
}

/**
 * @param $value
 * @return bool
 */
function validate_weight($value) {
    return !empty($value) AND ($value >= 1 AND $value < 300);
}

// Validate the input.
if (!validate_height($_GET['height']) OR !validate_weight($_GET['weight'])) {
    print_r("Validation error");
    return;
}
print_r(bmi($_GET['weight'], $_GET['height']));
