<?php
    // This is the database connection you can put your database here
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "PA_crud";
    $connect_db = mysqli_connect($host,  $username, $password, $dbname);

    if(!$connect_db){
        echo "You are not connected from database!";
    }
?>