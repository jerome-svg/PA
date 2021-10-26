<?php 


	session_start();

    // If the session is exist you can't access this code bacause the header location will redirect you to the Homepage

	if(isset($_SESSION['Email'])){
        header("location: http://localhost/PHP_PA/PHP_file/Homepage.php");
	}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jerome PA</title>
    <?php
        include('layout/config.boostrap1.php');
    ?>
</head>
<body>


    <div class="container">
        <h1 class="header_title">Welcome to Create, Update, Delete PA</h1><br>
        <a href="Register.php" class="btn btn-primary btn-lg mb-5">Click Here to Register</a>
        <div class="container_loginPage_login">
            <div class="login_child"> 
                 <br>
                 <div class="row">
                    <form method="post" action="../Function/Login.php">
                        <h1>Login Now</h1>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" required name="password">
                        </div>
                        <button type="submit" class="btn btn-primary" name="login">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
        include('layout/config.boostrap2.php');
    ?>
</body>
</html>


