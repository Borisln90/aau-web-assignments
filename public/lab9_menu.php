<?php
/**
 * Web programming hand-in 3, menu page.
 * User: Boris Lykke Nielsen, 20125327
 * Date: 07-11-2016
 * Time: 14:12
 */

/**
 * Checks that username and password are both present in the post request.
 * @return bool Valid post request
 */
function validate_input() {
    return !empty($_POST['password']) AND !empty($_POST['username']);
}


/**
 * Checks for post request.
 * @return bool True if post request.
 */
function is_submitted() {
    return $_SERVER["REQUEST_METHOD"] === 'POST' AND !empty($_POST);
}


/**
 * Returns an array containing the form data.
 * @return array Form data.
 */
function get_form_data() {
    $output = [];
    $output["username"] = $_POST["username"];
    $output["password"] = $_POST["password"];
    return $output;
}


/**
 * Retrieves a user from the database. returns an array containing user id and username.
 * This function uses the mysqli library.
 * @param array $data Form data
 * @param string $db_host database hostname
 * @param string $db_user database user
 * @param string $db_password database password
 * @param string $db_name database name
 * @return array user data
 */
function get_user($data, $db_host='localhost', $db_user='vagrant', $db_password='password', $db_name='assignments') {
    $output = [];
    // The mysql_ functions are deprecated, so we use the recommended mysqli instead.
    // https://secure.php.net/manual/en/migration55.deprecated.php
    $db = new mysqli($db_host, $db_user, $db_password, $db_name);
    if($db->connect_errno > 0) {
        die("Unable to connect to database [" . $db->connect_error . "]");
    }
    // Prepared statements are protected against SQL injection, as far as i know.
    // The database design does not ensure a unique username .. but let's assume that it does. For simplicity.
    // The database does not contain encrypted passwords(!) so we can just include the clear-text password in the query.
    $query = $db->prepare("SELECT user_id,username FROM users WHERE username=? AND password=? LIMIT 1;");
    $query->bind_param('ss', $data['username'], $data['password']);
    $query->execute();
    $query->bind_result($user_id, $user_username);
    $query->store_result();
    if ($query->num_rows == 1) {
        if ($query->fetch()) {
            $output['user_id'] = $user_id;
            $output['username'] = $user_username;
        }
    }
    $query->close();
    $db->close();
    return $output;
}


/**
 * Attaches the user to the session.
 * @param array $user User data
 */
function login_user($user) {
    $_SESSION['user'] = $user;
}

session_start();

$result = "";
if (is_submitted()) {
    // We have a post...
    if (validate_input()) {
        // And it is valid! Lets log them in.
        $data = get_form_data();
        $user = get_user($data);
        if ($user) {
            login_user($user);
            $result = "login_success";
        } else {
            $result = "login_failure";
        }
    } else {
        // The form was not valid.
        $result = "form_invalid";
    }
} elseif (isset($_SESSION["user"])) {
    // Returning user
    $result = "login_success";
} else {
    $result = "get_request";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AMDB menu</title>
    <style>
        a.button {
            -webkit-appearance: button;
            -moz-appearance: button;
            text-decoration: none;
            padding: 5px;
        }
    </style>
</head>
<body>

<?php switch ($result): ?>
<?php case "login_success": ?>
    <p>Hello <?= $_SESSION['user']['username'] ?>, Welcome to Awesome Movie Database</p>
    <p><a href="lab9_show.php" class="button">Go to list</a></p>
<?php break ?>

<?php case "login_failure": ?>
    <p>User <?= $data["username"] ?> was not found.</p>
    <p>Please click <a href="lab9_login.php?u=<?= $data["username"] ?>">here</a> to go back and try again.</p>
<?php break ?>

<?php case "form_invalid": ?>
    <p>I'm sorry, it appears that username or password is missing.</p>
    <p>Please click <a href="lab9_login.php">here</a> to go back and try again.</p>
<?php break ?>

<?php case "get_request": ?>
    <p>You are in the wrong neighborhood, my friend.</p>
    <p>Please click <a href="lab9_login.php">here</a> to log in.</p>
<?php break ?>
<?php endswitch ?>

</body>
</html>
