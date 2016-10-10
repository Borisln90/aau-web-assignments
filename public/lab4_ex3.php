<?php
/**
 * Created by PhpStorm.
 * User: boris
 * Date: 04-10-2016
 * Time: 17:12
 */

$error = "";
$notice = "";

if ( !empty($_POST['age']) AND ( $_POST['age'] <= 0 OR $_POST['age'] > 150 ) ) {
    $error .= "Age invalid<br>";
}

if ( !empty($_POST['name']) AND strlen($_POST['name']) > 20 ) {
    $notice .= "Your name is quite long.<br>";
}

if (empty($_POST['name'])) {
    $error .= "Name is missing<br>";
}
if (empty($_POST['age'])) {
    $error .= "Age is missing<br>";
}
if (empty($_POST['gender'])) {
    $error .= "Gender is missing<br>";
}
if (empty($_POST['language'])) {
    $error .= "Language is missing<br>";
}
if (empty($_POST['hobbies'])) {
    $error .= "Hobbies are missing<br>";
}



print_r("<b>Errors:</b><br>");
print_r($error);
print_r("<br>");

print_r("<b>Notices:</b><br>");
print_r($notice);
print_r("<br>");

if (!$error) {
    $table = "<table>";
    $table .= "<tr><th>Name</th><th>Age</th><th>Gender</th><th>Language</th><th>Hobbies</th></tr>";
    $table .= "<tr>";
    $table .= "<td>".$_POST['name']."</td>";
    $table .= "<td>".$_POST['age']."</td>";
    $table .= "<td>".$_POST['gender']."</td>";
    $table .= "<td>".$_POST['language']."</td>";
    $table .= "<td>".$_POST['hobbies']."</td>";
    $table .= "</tr>";
    $table .= "</table>";

    print_r($table);
}
