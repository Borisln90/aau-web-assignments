<?php
/**
 * Web programming hand-in 2, exercise 2A.
 * User: Boris Lykke Nielsen, 20125327
 * Date: 17-10-2016
 * Time: 20:53
 */

/**
 * Calculates BMI.
 * @param $weight string The weight in kilograms.
 * @param $height string The height in meters.
 * @return float|int the calculated BMI value.
 */
function get_bmi($height, $weight) {
    return $weight / pow($height/100, 2);
}

/**
 * Generates a matrix of bmi values based on a set of height and weight values.
 * @param $heights array[int] Array of height values to use for BMI calculation.
 * @param $weights array[int] Array of weight values to use for BMI calculation.
 * @return array[array[float/int]] Generated data-set.
 */
function generate_data_set($heights, $weights) {
    $output = [[]];
    for ($x=0; $x<=count($heights)-1; $x++) {
        for ($y=0; $y<=count($weights)-1; $y++) {
            $output[$y][$x] = get_bmi($heights[$x], $weights[$y]);
        }
    }
    return $output;
}

/**
 * Takes an array of BMI values and wraps in html for inserting in a table.
 * Values are rounded to 1 decimal.
 * @param $row array[float/int] BMI values.
 * @param $prepend string/int/null Value to put in first cell of the row.
 * @param bool $heading True if value should be wrapped in <th> tags, otherwise <td>.
 * @return string Html formatted row of BMI values for a <table>
 */
function html_generate_row($row, $prepend, $heading=false) {
    $html = '<tr>';
    if ($prepend !== null) {
        $html .= '<th>'.$prepend.'</th>';
    }
    for ($i=0; $i <= count($row)-1; $i++) {
        if (!$heading) {
            $html .= '<td>'.round($row[$i], 1).'</td>';
        } else {
            $html .= '<th>'.round($row[$i], 1).'</th>';
        }
    }
    $html .= '</tr>';
    return $html;
}

/**
 * Generates a html table populated with values from a matrix. Generates a heading row with height values.
 * @param $heights array[int] Height values.
 * @param $weights array[int] Weight values.
 * @param $rows array[array[float/int]] data set of calculated BMI values.
 * @return string Html formatted table.
 */
function html_generate_table($heights, $weights, $rows) {
    $html = '<table>';
    $html .= html_generate_row($heights, ' ', true);
    foreach ($rows as $key => $row) {
        $html .= html_generate_row($row, $weights[$key]);
    }
    $html .= '</table>';
    return $html;
}

$height_set = range(160, 210, 5);  // Create an array of int values from 160 to 210 in steps of 5.
$weight_set = range(45, 140, 5);
$data_set = generate_data_set($height_set, $weight_set);
$table = html_generate_table($height_set, $weight_set, $data_set);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 7 Exercise 2A</title>
    <style>
        th, td { width: 4em; border: 1px solid black; }
        th { text-align: left; }
    </style>
</head>
<body>
<?= $table ?>
</body>
</html>
