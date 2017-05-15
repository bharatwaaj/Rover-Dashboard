<?php
/**
 * Created by PhpStorm.
 * User: Bharatwaaj
 * Date: 03-07-2016
 * Time: 14:24
 */

// Establishing connection to NewsApp Databases

//Establishing Connection remotely
//if(!($database_connection = new mysqli("localhost","root","84305cd5c81e0a2*@9","newsapp"))){
//    die("Sorry , for the inconvinience . This page is under construction ! 1</body></html>");
//}

//Establishing Connection locally
if(!($database_connection = new mysqli("localhost","bharat","admin","rover_db"))){
    die("Sorry , for the inconvinience . This page is under construction ! 1</body></html>");
}

//$database_connection = new mysqli("localhost","root","","newsapp");
// Opening NewsApp Database
//if(!(mysqli_select_db($database_connection,"AtomsQuiz"))){
//    die("Sorry , for the inconvinience . This page is under construction ! 2</body></html>");
//}

// Function that inserts into the given table in the NewsApp Database
function insert_QuizAppstudio ($database_connection,$query){
    if(!(mysqli_query($database_connection,$query))){
        die("Sorry , for the inconvinience . This page is under construction ! 3</body></html>");
    }
    mysqli_close($database_connection);
}

// Function that queries the given table in the NewsApp Database
function select_QuizAppstudio ($database_connection,$query){
    if(!($result = $database_connection->query($query))){
        die("Sorry , for the inconvinience . This page is under construction ! 4</body></html>");
    }
    return $result;
}

?>