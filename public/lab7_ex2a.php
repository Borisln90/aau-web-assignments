<?php
/**
 * Created by PhpStorm.
 * User: Boris
 * Date: 17-10-2016
 * Time: 20:53
 */

/**
 * Calculates BMI.
 * @param $weight string The weight of the user.
 * @param $height string The height of the user.
 * @return float|int the calculated BMI value.
 */
function get_bmi($height, $weight) {
    return $weight / pow($height/100, 2);
}


function generate_data_set($heights, $weights) {
    $output = [[]];
    for ($x=0; $x<=count($heights)-1; $x++) {
        for ($y=0; $y<=count($weights)-1; $y++) {
            $output[$y][$x] = get_bmi($heights[$x], $weights[$y]);
        }
    }
    return $output;
}


function html_generate_row($row, $prepend, $heading=false) {
    $html = '<tr>';
    if ($prepend != null) {
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


function html_generate_table($heights, $weights, $rows) {
    $html = '<table>';
    $html .= html_generate_row($heights, 'kg/cm', true);

    $weight_index = 0;
    foreach ($rows as &$row) {
        $html .= html_generate_row($row, $weights[$weight_index]);
        $weight_index += 1;
    }

    $html .= '</table>';
    return $html;
}

$height_set = range(160, 210, 5);
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
