<?php
    // This is the database connection you can put your database here
    $host = "localhost";
    $username = "root";
    $password = "";

    // PA_crud is the name of database when you run the Createdatabase.php
    $dbname = "PA_crud";


    $connect_db = mysqli_connect($host,  $username, $password);
    // You need to put the $dbname variable after you run the Createdatabase.php

    if(!$connect_db){
        echo "You are not connected from database!";
    }
?>