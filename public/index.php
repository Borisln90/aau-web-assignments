<?php
$database = "assignments";
$user = "vagrant";
$password = "password";
$host = "localhost";
$connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
$query = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
$tables = $query->fetchAll(PDO::FETCH_COLUMN);

$html = "<p>";
if (empty($tables)) {
    $html .= "There are no tables in database \"{$database}\".";
} else {
    $html .= "Database \"{$database}\" has the following tables:";
}
$html .= "</p>";
$html .= "<ul>";
foreach ($tables as $row) {
    $html .= "<li>{$row}</li>";
}
$html .= "</ul>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Hej... fuckface</h1>
    <?= $html ?>
</body>
</html>