
<?php

    // This is the code for creating the database

    


    include('DB_connection.php');
    
    $sql = "CREATE DATABASE PA_crud";

    $created = mysqli_query($connect_db, $sql);


    if(!$created){
        echo "Error the database not created" . mysqli_error();
    }
    else{
        echo "The database is created success fully";
    }

?>



