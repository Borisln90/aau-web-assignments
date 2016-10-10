<?php
/**
 * Created by PhpStorm.
 * User: boris
 * Date: 04-10-2016
 * Time: 16:04
 */

if (isset($_GET['height']) AND $_GET['height'] <= 1) {
    print_r("Height error");
    return;
}
if (isset($_GET['weight']) AND $_GET['weight'] <= 1) {
    print_r("Weight error");
    return;
}

$height = $_GET['height'];
$weight = $_GET['weight'];
$result = $weight / pow($height/100, 2);
print_r($result);
