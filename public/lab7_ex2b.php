<?php
/**
 * Created by PhpStorm.
 * User: Boris
 * Date: 17-10-2016
 * Time: 22:29
 */


function sanitize_input($input, $key) {
    $split = preg_split('/\n/' ,$input[$key]);  // For some reason explode() can't do this.
    return array_filter($split);  // Remove empty rows.
}


function html_generate_row($row, $prepend, $heading=false) {
    $html = '<tr>';
    if ($prepend != null) {
        $html .= '<th>'.$prepend.'</th>';
    }
    if (!$heading) {
        $html .= '<td>'.$row.'</td>';
    } else {
        $html .= '<th>'.$row.'</th>';
    }
    $html .= '</tr>';
    return $html;
}

function html_generate_table($rows) {
    $html = '<table>';
    $html .= html_generate_row('Show', ' ', true);
    $row_index = 0;
    foreach ($rows as $row) {
        $html .= html_generate_row($row, $row_index+1);
        $row_index += 1;
    }
    $html .= '</table>';
    return $html;
}

$shows = sanitize_input($_POST, 'shows');
$table = html_generate_table($shows);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 7 Exercise 2B</title>
    <style>
        th, td { width: 4em; border: 1px solid black; }
        th { text-align: left; }
    </style>
</head>
<body>
<?= $table ?>
</body>
</html>
