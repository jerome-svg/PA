<?php



    // This is the code for creating a table Employee
    include('DB_connection.php');
    

    $sql = "CREATE TABLE Employee(

            emp_id INT(3) NOT NULL AUTO_INCREMENT,
            emp_firstname VARCHAR(50), 
            emp_lastname VARCHAR(50), 
            emp_email VARCHAR(50),
            emp_password  VARCHAR(100),
            PRIMARY KEY (emp_id)
    )";

    $table_created = mysqli_query($connect_db, $sql);


    if(!$table_created){
        echo "Error" . mysqli_error();
    }
    else{
        echo "The table is created Successfully";
    }
?>