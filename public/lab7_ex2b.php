<?php
/**
 * Web programming hand-in 2, exercise 2B.
 * User: Boris Lykke Nielsen, 20125327
 * Date: 17-10-2016
 * Time: 22:29
 */

/**
 * Splits the string in the input array and at a specified key into an array.
 * The split is done with newline as divider. Empty lines are removed.
 * @param $input array POST data
 * @param $key string Key of the string to process.
 * @return array Split string
 */
function sanitize_input($input, $key) {
    $split = preg_split('/\n/' ,$input[$key]);  // For some reason explode() can't do this.
    return array_filter($split);  // Remove empty rows.
}

/**
 * Takes an array of strings and wraps in html for inserting in a table.
 * @param $row string movie.
 * @param $prepend string/int/null Value to put in first cell of the row.
 * @param bool $heading True if value should be wrapped in <th> tags, otherwise <td>.
 * @return string Html formatted row for <table>.
 */
function html_generate_row($row, $prepend, $heading=false) {
    $html = '<tr>';
    if ($prepend !== null) {
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

/**
 * Generates a html table populated with values from an array. Generates a heading row.
 * @param $rows array[string] Array of favorite movies.
 * @return string Html formatted table.
 */
function html_generate_table($rows) {
    $html = '<table>';
    $html .= html_generate_row('Show', ' ', true);
    foreach ($rows as $index => $row) {
        $html .= html_generate_row($row, $index+1);
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
        th, td { min-width: 3em; border: 1px solid black; }
        th { text-align: left; }
    </style>
</head>
<body>
<?= $table ?>
</body>
</html>
