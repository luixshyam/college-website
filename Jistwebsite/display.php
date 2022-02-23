<?php

session_start();
include './include/connection.php';
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student_records</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!--start table-->

<div class="row mx-5 my-2 py-2">
    <div class="col-md-10">
      <img src="./images/logo.jpg" class="img-fluid">
    </div>
    <div class="col-md-2 py-4">
                <a href="index.php" class="btn btn-outline-secondary">Logout</a>
      </div>
    </div>
<div class="container">
   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Course</th>
      <th scope="col">Gender</th>
      <th scope="col">Mobile</th>
      <th scope="col">Department</th>
      <th scope="col">Address</th>
      <th scope="col">parent</th>
    </tr>
  </thead>
  <tbody>
   
   <?php
   $userEmail = $_SESSION['user_email'];
   $userPassword = $_SESSION['user_password'];

   $disp = "SELECT id, username, email, course, gender, mobile, department, address, parent FROM users WHERE email='$userEmail' AND password ='$userPassword' ";
   $data = mysqli_query($con,$disp);
   while($result = mysqli_fetch_assoc($data))
   {
   ?>
    <tr>
    
    <td> <?php echo $result[id]?></td>
    <td> <?php echo $result[username]?></td>
    <td> <?php echo $result[email]?></td>
    <td> <?php echo $result[course]?></td>
    <td> <?php echo $result[gender]?></td>
    <td> <?php echo $result[mobile]?></td>
    <td> <?php echo $result[department]?></td>
    <td> <?php echo $result[address]?></td>
    <td> <?php echo $result[parent]?></td>
    
    <?php
   }
    ?>
    
    </tr>

  </tbody>
</table>
</div>
   
<!--end table-->

</body>

</html>