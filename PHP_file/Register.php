<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include('layout/config.boostrap1.php');
    ?>
    <link rel="stylesheet" href="../Css_file/style.css">
</head>
<body>
    <div class="container">
        <h1 class="header_title">Welcome to Create, Update, Delete PA</h1>
        <a href="index.php" class="btn btn-warning btn-lg mb-5">Go to Login</a>
        <div class="container_loginPage_Register">
            <div class="login_child"> 
                 <br>
                 <div class="row">
                    <form method="post" action="../Function/Register_User.php">
                        <h1>Register Now</h1>
                        <div class="row g-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="first_name" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="last_name" required>
                            </div>
                            </div>
                        <div class="mb-3">
                            <br>
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Juan@Ggmail.com" name="email" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="register">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        include('layout/config.boostrap2.php');
    ?>

    <?php
            if(isset($_GET['Message'])){
                echo "<script>
                        alert('You are Successfully Register');
                    </script>
                    ";
            }
            if(isset($_GET['error'])){
                echo "<script>
                        alert('The email is already taken');
                    </script>
                    ";
            }
            
    
    
    ?>
</body>
</html>
