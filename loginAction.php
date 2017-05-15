

<?php
/**
 * Created by PhpStorm.
 * User: Bharatwaaj
 * Date: 04-07-2016
 * Time: 21:20
 */
include 'databaseConnectivity.php';
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == '' || $password == '') {
    setcookie("LoginState", "false", time() + 30);
    header("Location: index.php");
} else {
    $query = "SELECT password FROM users WHERE username = '$username'";
    $result = select_QuizAppstudio($database_connection, $query);
    $placeholder_result = verify_login($result, $password);
    if ($placeholder_result == 'Login Success') {
        setcookie("LoginState", "true", time() + 60 * 60 * 24);
        setcookie("userNameLoggedIn", $username, time() + 60 * 60 * 24);
        header("Location: home.php");
    } else if($placeholder_result != 'Login Success') {
        setcookie("LoginState","false", time() + 30);
        setcookie("userNameLoggedIn", null, time() + 30);
        header("Location: index.php");
    }
}

function verify_login($result, $password)
{
    if ($row = $result->fetch_assoc()) {
        if ($row['password'] != $password){
            return '';
        } else {
            return 'Login Success';
        }
    }
    return '';
}