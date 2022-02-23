<?php

session_start();
include './include/connection.php';
// error_reporting(0);


    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All_records</title>
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
                <a href="admin-login.php" class="btn btn-outline-secondary"><i class="fa fa-sign-out"></i>Logout</a>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-info bg-secondary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <button type="button" class="btn btn-secondary" style="font-size:16px;cursor:pointer">STUDENT's RECORD<span class="sr-only">(current)</span></button>
                </li>
            </ul>
        </div>
    </nav>
<div class="body-container">
   <table class="table table-bordered my-0">
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
      <th scope="col">Parents</th>
      <th scope="col">Action</th>
       <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
   
   <?php
   $disp = "SELECT id, username,email, course, gender, mobile, department, address, parent FROM users";
   $data = mysqli_query($con,$disp);
   while($result = mysqli_fetch_assoc($data))
   {
   ?>
    <tr>
    
    <td> <?php echo $result['id']?></td>
    <td> <?php echo $result['username']?></td>
    <td> <?php echo $result['email']?></td>
    <td> <?php echo $result['course']?></td>
    <td> <?php echo $result['gender']?></td>
    <td> <?php echo $result['mobile']?></td>
    <td> <?php echo $result['department']?></td>
    <td> <?php echo $result['address']?></td>
    <td> <?php echo $result['parent']?></td>
    <td> <button class="btn btn-info"> <a class="text-white" href="update.php?id=<?php echo $result['id'];?>">EDIT</a></button></td>

     <td> <button class="btn btn-danger"> <a class="text-white" href="delete.php?id=<?php echo $result['id'];?>">DELETE</a></button></td>



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