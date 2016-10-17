<?php
/**
 * Web programming hand-in 1, exercise 2a
 * User: Boris Lykke Nielsen, 20125327
 * Date: 04-10-2016
 * Time: 16:04
 *
 * Returns a BMI value based on input provided in a GET request.
 * The values will not have a maximum. We are not here to discriminate
 * but we do want them to abide by the laws of physics.
 *
 * Prints an error if validation fails.
 */

# Check if height and weight are reasonable.
if (isset($_GET['height']) AND $_GET['height'] <= 1) {  // Check that the variable exists and has a positive number.
    print_r("Height error");
    return;
}
if (isset($_GET['weight']) AND $_GET['weight'] <= 1) {
    print_r("Weight error");
    return;
}

$height = $_GET['height'];
$weight = $_GET['weight'];
$result = $weight / pow($height/100, 2); // Calculate BMI
print_r($result);
