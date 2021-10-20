<?php

    
    include('../Database/DB_connection.php');


    if(isset($_POST['login'])){
        
        $email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM user WHERE email = '$email'";

        $result = mysqli_query($connect_db, $sql);

        $row = mysqli_num_rows($result);

        if($row == 1){

            $password_hush = mysqli_fetch_array($result);


            $data =  $password_hush[4];

            $password_new = password_verify($password,  $data);

            if( $password_new == 1){


                $email = $password_hush['email'];
                $name = $password_hush['firstname'];

                $_SESSION['Email'] = $email;
                $_SESSION['username'] = $name;
                
                header('location: http://localhost/PHP_PA/PHP_file/Homepage.php');


            }
            else{
                echo "Invalid Password";
            }


        }
        else{
            echo "Invalid email";
        }
        
    }



?>