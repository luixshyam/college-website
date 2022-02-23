<?php

	session_start();

   include './include/connection.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!--start form-->
    <a href="index.php" class="btn btn-primary"><i class="fa fa-home"></i>HOME</a>
    
<section class="container">
    <div class="row py-4 my-3">

        <div class="col-md-4"></div>

        <div class="col-md-4 py-4">

    <div class="card bg-dark" style="width: 30rem; text-align: center">
            <form  action="" method="POST" class="px-4 py-3 bg-dark text-light" autocomplete="off">
                <div class="form-group">
                     <h6 class="text-center">LOGIN</h6>
                    <hr color="silver" width="100%">

                   <div class="text-left"><label for="email">Email</label></div>
                   <span class="input-group-text">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    </span>
                </div>
                <div class="form-group">
                   <div class="text-left"><label for="password">Password</label></div>
                    <span class="input-group-text">
                        <i class="fa fa-key" aria-hidden="true"></i>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    </span>
                </div>
                <button type="submit" name="submit" value="Sign in" class="btn btn-secondary bg-secondary" href="display.php" >Login</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-light" href="registration.php">New user? Register</a>
        </div>

     </div>
  </div>
        
        <div class="col-md-4"></div>
        
</section>
    <!--end form-->

    <?php
    
    if(isset($_POST['submit']))
    {
          $name = $_POST['email'];
          $pwd = $_POST['password'];
          $_SESSION['user_email'] = $name;
          $_SESSION['user_password'] = $pwd;

            if($name == "" || $pwd == "")
                {
                 }
            else{
                     $query = "SELECT * FROM users WHERE email= '$name' AND password = '$pwd'";
                     $data = mysqli_query($con,$query);
                     $res = mysqli_num_rows($data);
                       if($res)
                         {
        	                header('location:display.php');
                         }
                        else 
                        {
              	           
                  }
            }
    }
    ?>

</body>

</html>