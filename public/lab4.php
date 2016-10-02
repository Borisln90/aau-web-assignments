<?php
/**
 * Created by PhpStorm.
 * User: boris
 * Date: 29-09-2016
 * Time: 16:51
 */
$a = 2; $b = 4; $c = 6;

$arr = [
    ["\$a == 4 OR \$b > 2", $a == 4 OR $b > 2],
    ["6 <= \$c AND \$a > 3", 6 <= $c AND $a > 3],
    ["!(\$a > 2)", !($a > 2)],
    ["1 != \$b AND \$c != 3", 1 != $b AND $c != 3],
    ["\$a >= -1 OR \$a <= \$b", $a >= -1 OR $a <= $b],
    ["\$a != 2 XOR \$b != 4", $a != 2 XOR $b != 4],
    ["!(\$c == 6 AND \$a >= \$b)", !($c == 6 AND $a >= $b)]
];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @keyframes spin { 100% { transform:rotate(360deg); } }
        @keyframes move {
            0% {left: 5%; top: 5%; border-color: green;}
            25% {left: 80%; top: 70%; border-color: deeppink;}
            50% {left: 5%; top: 70%;border-color: green;}
            75% {left: 80%; top 5%;border-color: blue;}
            100% {left: 5%; top: 5%;border-color: green;}
        }
        table {
            position: absolute;
        }
        th, td {
        }
        table, th, td {
            border: 1px solid deeppink;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Expression</th>
        <th>Result</th>
    </tr>
<?php
    foreach ($arr as $result) {
        echo "<tr>";
        echo "<td>$result[0]</td>";

        if ($result[1] != null) {
            echo "<td style=\"color:green;\"><b>True</b></td>";
        } else {
            echo "<td style=\"color:red;\"><b>False</b></td>";
        }

        echo "</tr>";
    }
?>
</table>
</body>
</html>


