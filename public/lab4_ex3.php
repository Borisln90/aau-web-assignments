<?php
/**
 * Web programming hand-in 1, exercise 3
 * User: Boris Lykke Nielsen, 20125327
 * Date: 04-10-2016
 * Time: 17:12
 *
 * Presents user information in a FORM request in a table.
 * The input should contain: Name, age, gender, language, and hobbies.
 * The script will return errors if any input is missing and/or the age is invalid.
 */

// Strings to contain any errors or notices.
$error = "";
$notice = "";

// Check for empty age and value between 0 and 150.
if ( !empty($_POST['age']) AND ( $_POST['age'] <= 0 OR $_POST['age'] > 150 ) ) {
    $error .= "Age invalid<br>";
}

// Check for name length above 20.
if ( !empty($_POST['name']) AND strlen($_POST['name']) > 20 ) {
    $notice .= "Your name is quite long.<br>";
}

// Check for empty values.
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

// Print any found errors and notices.
print_r("<b>Errors:</b><br>");
print_r($error);
print_r("<br>");
print_r("<b>Notices:</b><br>");
print_r($notice);
print_r("<br>");

// If no errors were found, print a table containing the input.
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
