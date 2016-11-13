<?php
/**
 * Web programming hand-in 2, exercise 1.
 * User: Boris Lykke Nielsen, 20125327
 * Date: 17-10-2016
 * Time: 23:49
 */

/**
 * Wraps a flavor in html.
 * @param $flavor string Input.
 * @return string Html formatted string.
 */
function html_generate_message($flavor) {
    return '<b>You like <em>'.$flavor.'</em></b>';
}


/**
 * Wraps each input in <p> tags and formats the text.
 * @param $flavors array Array of input strings.
 * @return string Html formatted input strings.
 */
function html_generate_messages($flavors) {
    $html = '';
    foreach ($flavors as $flavor) {
        $html .= '<p>';
        $html .= html_generate_message($flavor);
        $html .= '</p>';
    }
    return $html;
}

$input = isset($_POST['flavors']) ? $_POST['flavors'] : ['nothing apparently'];  // Provide default value to input
$messages = html_generate_messages($input);

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
