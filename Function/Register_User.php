<?php

// This is the code fro registering the data of Register Page

include('../Database/DB_connection.php');



 if(isset($_POST['register'])){
    
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);


    $sql = "SELECT * FROM user where email = '$email'";
    $select = mysqli_query($connect_db, $sql);

    $row = mysqli_num_rows($select);


    if($row > 0){
        header('location: http://localhost/PHP_PA/PHP_file/Register.php?error="you are Successfully Register"');
    }
    else{

          $data = mysqli_fetch_assoc($select);

          $sql = "INSERT INTO user(
                              firstname,  
                              lastname,   
                              email, 
                              password)
                  VALUES(
                      '$firstname',
                      '$lastname', 
                      '$email',
                      '$password_hash'
                      )
              ";

          $inserted = mysqli_query($connect_db, $sql);


          if(!$inserted){
              echo "Not Register" . mysqli_error();
          }
          else{

              header('location: http://localhost/PHP_PA/PHP_file/Register.php?Message="you are Successfully Register"');
          }


       }
   }



?>