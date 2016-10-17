<?php
/**
 * Created by PhpStorm.
 * User: Boris
 * Date: 17-10-2016
 * Time: 23:49
 */

function generate_message($flavor) {
    return '<b>You like <em>'.$flavor.'</em></b>';
}

function generate_messages($flavors) {
    $html = '';
    foreach ($flavors as $flavor) {
        $html .= '<p>';
        $html .= generate_message($flavor);
        $html .= '</p>';
    }
    return $html;
}

$input = isset($_POST['flavors']) ? $_POST['flavors'] : ['nothing apparently'];
$messages = generate_messages($input);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 7 Exercise 1</title>
</head>
<body>
<h3>Flavors you like:</h3>
<?= $messages ?>
</body>
</html>
