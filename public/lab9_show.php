<?php
/**
 * Web programming hand-in 3, show page.
 * User: Boris Lykke Nielsen, 20125327
 * Date: 07-11-2016
 * Time: 14:20
 */

/**
 * Retrieves all movies from the database. Returns an array with all movies.
 * @param string $db_host database hostname
 * @param string $db_user database user
 * @param string $db_password database password
 * @param string $db_name database name
 * @return array All movies in database.
 */
function get_movies($db_host='localhost', $db_user='vagrant', $db_password='password', $db_name='assignments') {
    $output = [];
    $db = new mysqli($db_host, $db_user, $db_password, $db_name);
    if($db->connect_errno > 0) {
        die("Unable to connect to database [" . $db->connect_error . "]");
    }
    $db->set_charset("utf8");  // There are funny characters in the database
    $result = $db->query("SELECT * FROM movies ORDER BY year ASC;");
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $output[] = $row;
        }
        $result->close();
    }
    $db->close();
    return $output;
}

session_start();

// Ensure user is logged in.
if (isset($_SESSION['user']['username'])) {
    $movies = get_movies();
}

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
        a.button { -webkit-appearance: button; -moz-appearance: button; text-decoration: none; padding: 5px; margin-left: 40px; }
        div.container { padding-top: 10px;}
        ul { list-style: none; }
        div.movie { min-width: 400px; width: 40%; height: 300px; padding-top: 10px}
        div.movie > img.image { display:inline-block; height: 75%; }
        div.details { width: 75%; height: 100%; display: inline-block; vertical-align: top; }
        p.plot { height: 50%; width: 100%; overflow: hidden; }
    </style>
</head>
<body>
<?php if (isset($_SESSION['user']['username'])): ?>
    <a href="lab9_menu.php" class="button">Go back to menu</a>
<?php else: ?>
    <p>login required. Click <a href="lab9_login.php">here</a> to login.</p>
<?php endif; ?>
<div class="container">
    <ul>
        <?php foreach ($movies as $key => $movie):?>
        <li>
            <div class="movie">
                <img src="<?= $movie['image_url'] ?>" alt="<?= $movie['title'] ?>" class="image">
                <div class="details">
                    <p><b><?= $movie['title'] ?></b> (<?= $movie['year'] ?>)</p>
                    <p>Language: <b><?= $movie['language'] ?></b></p>
                    <p class="plot"><?= $movie['plot'] ?></p>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</div>

</body>
</html>
