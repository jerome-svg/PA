<?php

       // This is the code for creating a table User

    include('DB_connection.php');
    

    $sql = "CREATE TABLE user(

            user_id INT(3) NOT NULL AUTO_INCREMENT,
            firstname VARCHAR(50), 
            lastname VARCHAR(50), 
            email VARCHAR(50),
            password  VARCHAR(100),
            PRIMARY KEY (user_id)
    )";

    $table_created = mysqli_query($connect_db, $sql);


    if(!$table_created){
        echo "Error" . mysqli_error();
    }
    else{
        echo "The table is created Successfully";
    }



?>