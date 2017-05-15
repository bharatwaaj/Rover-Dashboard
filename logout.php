<?php
/**
 * Created by PhpStorm.
 * User: Bharatwaaj
 * Date: 05-07-2016
 * Time: 18:28
 */
	setcookie("userNameLoggedIn",null,time()+60*24*24);
	setcookie("LoginState",null,time()+60*24*24);
    header("Location: index.php");
?>