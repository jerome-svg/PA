<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UDPATE</title>
    <?php include('layout/config.boostrap1.php');?>
</head>
<body>
   <div class="container">
       <div class="row">
        <?php 
                
                $ID = $_GET['Update'];

                 include('../Database/DB_connection.php');
                 $select_emp = "SELECT * FROM employee WHERE emp_id = '$ID'";
                
                 $result = mysqli_query($connect_db, $select_emp);

                 $data = mysqli_fetch_assoc($result);


        ?>
       <form method="post" action="Update.php" class="btn-info">
                <h1>UPDATE Employee</h1>
                <div class="row g-3">
                    <input type="hidden" name="Id" value="<?php echo $data['emp_id'];?>">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="first_name" required value="<?php echo $data['emp_firstname'];?>"> 
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="last_name" required value="<?php echo $data['emp_lastname'];?>">
                    </div>
                    </div>
                    <div class="mb-3">
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Juan@Ggmail.com" name="email" required value="<?php echo $data['emp_email'];?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="update">UDPATE</button>
        </form>
       </div>
   </div>
  

<?php include('layout/config.boostrap2.php'); ?>
</body>
</html>
<?php

    if(isset($_POST['update'])){

        $id = $_POST['Id'];
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $email = $_POST['email'];


        $sql = "UPDATE employee
               SET emp_firstname = '$firstname',
                   emp_lastname = ' $lastname',
                   emp_email = '$email'
                   WHERE emp_id = '$id'";


        $result = mysqli_query($connect_db, $sql);

        if(!$result){
            echo "Not Update" . mysqli_error();
        }
        else{
            header('location:Homepage.php?Successfully Update');
        }

    }


?>