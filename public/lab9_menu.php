<?php
/**
 * Created by PhpStorm.
 * User: boris
 * Date: 07-11-2016
 * Time: 14:12
 */
function validate_input() {
    return !empty($_POST['password']) AND !empty($_POST['username']);
}

function is_submitted() {
    return $_SERVER["REQUEST_METHOD"] === 'POST' AND !empty($_POST);
}

function validate_on_submit() {
    return is_submitted() AND validate_input();
}

function get_form_data($data) {
    $data["username"] = $_POST["username"];
    $data["password"] = $_POST["password"];
    return $data;
}

function get_user($data) {
    $db = new mysqli('localhost', 'vagrant', 'password', 'assignments');
    if($db->connect_errno > 0) {
        die("Unable to connect to database [" . $db->connect_error . "]");
    }

    $query = $db->prepare("SELECT ID,username,password FROM users WHERE username=?");
    $query->bind_param('s', $data['username']);
    $query->execute();
    $query->bind_result($user_id, $user_username, $user_password);

    $db->close();
}


function login_user($user) {
    $_SESSION["username"] = $user;
}

session_start();


$output = "";
$data = [];
$user = null;
if (is_submitted()) {
    // We have a form...
    if (validate_input()) {
        // And it is valid!
        // Lets log them in
        $data = get_form_data($data);
        $user = get_user($data);
        if ($user) {
            // The user was found.
            login_user($user);
            $output = "login_success";
        } else {
            // User not found.
            $output = "login_failure";
        }
    } else {
        // It was not valid.
        $output = "form_invalid";
    }
} else {
    // GET request, or no form.
    if (isset($_SESSION["username"])) {
        $output = "login_success";
    } else {
        $output = "get_request";
    }
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
</head>
<body>

<?php if($output === "login_success"): ?>
<p>Hello <?= $_SESSION["username"] ?>, Welcome to Awesome Movie Database</p>
<form action="lab9_show.php" method="get">
    <p><input type="submit" value="To list"></p>
</form>
<?php endif; ?>

<?php if($output === "login_failure"): ?>
    <p>User <?= $data["username"] ?> was not found.</p>
    <p>Please click <a href="lab9_login.php">here</a> to go back and try again.</p>
<?php endif; ?>


<?php if($output === "form_invalid"): ?>
    <p>I'm sorry, it appears that username or password is missing.</p>
    <p>Please click <a href="lab9_login.php">here</a> to go back and try again.</p>
<?php endif; ?>

<?php if($output === "get_request"): ?>
    <p>You are in the wrong neighborhood, my friend.</p>
    <p>Please click <a href="lab9_login.php">here</a> to log in.</p>
<?php endif; ?>

</body>
</html>
