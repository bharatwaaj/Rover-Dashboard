<?php
/**
 * Created by PhpStorm.
 * User: Bharatwaaj
 * Date: 31-01-2017
 * Time: 20:29
 */

// BREADCRUMB SET NAME
$cookie_breadcrumb_set_name = "COOKIE_BREADCRUMB_SET_NAME";
$cookie_breadcrumb_set_value = "";
setcookie($cookie_breadcrumb_set_name, $cookie_breadcrumb_set_value, time() + (86400 * 30), "/");

// BREADCRUMB QUESTION NAME
$cookie_breadcrumb_question_name = "COOKIE_BREADCRUMB_QUESTION_NAME";
$cookie_breadcrumb_question_value = "";
setcookie($cookie_breadcrumb_question_name, $cookie_breadcrumb_question_value, time() + (86400 * 30), "/");

?>