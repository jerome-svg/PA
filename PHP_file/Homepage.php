
<?php 

    session_start();

    if(isset($_SESSION['Email'])){

        // If the session is not exit you can't access this page because the header location will dedirect you from index.php
    }
    else{
        header("location: http://localhost/PHP_PA/PHP_file/index.php");
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page of Jerome PA</title>
    <?php include('layout/config.boostrap1.php');?>
</head>
<body>
<header class="container-fluid bg-header pt-2 pb-2">
   <div class="container">
        <a href="#"><img src="../Image_design/logo.jpg" alt="../Image/logo.jpg"></a>
        <a href="../Function/destroySession.php" class="btn btn-danger">Logout</a>
   </div>
</header>
<section>
    <div class="container pt-5">
        <h1>Employee Record</h1>
        <table class="table">
            <thead class="table-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">email</th>
                <th scope="col">Update</th>
                <th scope="col">delete</th>
                </tr>
            </thead>
            <tbody class="thead-light">
                <tr>
                    <?php

                        include('../Database/DB_connection.php');
                         $select_emp = "SELECT * FROM employee";
                        
                        
                         $result_emp = mysqli_query($connect_db, $select_emp);
 
                         while ($row = mysqli_fetch_assoc($result_emp)) {
                             echo "<tr>";
                                 echo "<td scope='row'>" . $row['emp_id'] . "</td>";
                                 echo "<td scope='row'>" . $row['emp_firstname'] . "</td>";
                                 echo "<td scope='row'>" . $row['emp_lastname'] . "</td>";
                                 echo "<td scope='row'>" . $row['emp_email'] . "</td>";
                                 echo "<td><a href='Update.php?Update=". $row['emp_id'] ." ' class='btn btn-primary'>UPDATE</a></td>";
                                 echo "<td><a href='Homepage.php?Delete=" . $row['emp_id'] ." '  class='btn btn-danger'>DELETE</a></td>";
                             echo "</tr>";
                         }
                     
                    ?>
            </tbody>
        </table>
    </div>
    <br>
    <div class="container bg-dark">
        <div class="row">
            <div class="col">
                <form method="post" action="Homepage.php" class="new-form">
                        <h1>Register Your Employee</h1>
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
                        </div>
                        <button type="submit" class="btn btn-primary" name="register">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php

  
  if(isset($_POST['register'])){
      
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];

    $sql = "SELECT * FROM employee where emp_firstname = '$firstname' OR emp_lastname = '$lastname'";
    $select = mysqli_query($connect_db, $sql);


 

    $row = mysqli_num_rows($select);



    if($row > 0){
        echo "<script>
                alert('The name is Exist');
        </script>";
    }
    else{

          $data = mysqli_fetch_assoc($select);

          $sql = "INSERT INTO employee(
                              emp_firstname,  
                              emp_lastname,   
                              emp_email)
                  VALUES(
                      '$firstname',
                      '$lastname', 
                      '$email'
                      )
              ";

          $inserted = mysqli_query($connect_db, $sql);


          if(!$inserted){
            echo "<script>
                alert('Not Register');
                        </script>" . mysqli_error($connect_db);
          }
          else{
                echo "<script>
                            alert('The employee is successfully Register');
                    </script>";
             
          }


       }
   }
   if(isset($_GET['Delete'])){

        $empDelete = $_GET['Delete'];
        $delete = "DELETE FROM employee WHERE emp_id = '$empDelete'";

        if(mysqli_query($connect_db, $delete)){
            echo "<script>
                    alert('Deleted Successfully');
                </script>";
        }
        else{
            echo "Error" . mysqli_error();
        }
   }
    





?>
<footer class="container-fluid">
</footer>
<?php include('layout/config.boostrap2.php'); ?>
</body>
</html>
