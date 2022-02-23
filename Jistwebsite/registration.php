<?php

include './include/connection.php';


?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
   
</head>
<?php
   include './include/header.php';
  ?>

 <div class="col-lg-6 m-auto">
 
 <form method="POST" autocomplete="off">
 
 <br><br>

 <div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">Student Register </h1>
 </div><br>

 <label> Username: </label>
 <input type="text" name="username" class="form-control" placeholder="Example:Shyam Pathak"> <br>

 <label> Password: </label>
 <input type="password" name="password" class="form-control" placeholder="Create a Password"> <br>
<label>Email: </label>
 <input type="email" name="email" class="form-control" placeholder="enter your email"><br>
 <!--<label>Course</label>
  <input type="text" name="course" class="form-control"> <br>-->
  <label>Course<i></label>
      <select class="form-control"name="course">
        <option disabled="">Select Course</option>
        <option value="PHYSICS">PHYSICS</option>
        <option value="CHEMISTRY">CHEMISTRY</option>
        <option value="MATHS">MATHS</option>
        <option value="BSCIT">BSCIT</option>
        <option value="PEI">PEI</option>
        <option value="MECHANICAL">MECHANICAL</option>
        <option value="CIVIL">CIVIL</option>
        <option value="ETC">ETC</option>
        <option value="MSC">MSC</option>
      </select><br>
  <!--<label>Gender</label>
  <input type="text" name="gender"class="form-control"><br>-->
  <label>Gender</label>
      <select class="form-control"name="gender">
        <option disabled="">Select your gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option> 
      </select><br>
  <label> Mobile </label>
 <input type="number" name="mobile" class="form-control" placeholder="Enter your Mobile number"> <br>
 <label>Department</label>
      <select class="form-control" name="department">
        <option disabled="">Select Dept</option>
        <option value="PHYSICS">BSC</option>
        <option value="CHEMISTRY">IT</option>
        <option value="PEI">ENGINEERING</option>
      </select><br>
     <label> Address </label>
 <input type="text" name="address" class="form-control" placeholder="Enter your Address"> <br>
  <label> Parent Name </label>
 <input type="text" name="parent" class="form-control" placeholder="Enter your Parent Name"> <br>
 
 <center> <button class="btn btn-success" type="submit" name="done"> Submit </button> <br></center>
</div>
 </form>
 </div>
 <?php
  if(isset($_POST['done'])){

 $username = $_POST['username'];
 $password = $_POST['password'];
 $email = $_POST['email'];
 $course = $_POST['course'];
 $gender = $_POST['gender'];
 $mobile = $_POST['mobile'];
 $department = $_POST['department'];
 $address = $_POST['address'];
 $parent = $_POST['parent'];
 $q = "INSERT INTO `users`( `username`, `password`, `email`, `course`, `gender`, `mobile`, `department`,`address`, `parent`) VALUES ('$username','$password','$email','$course','$gender','$mobile', '$department','$address','$parent')";

 $query = mysqli_query($con,$q);
 if($query)
 {
  echo "success";
 }
 else{
  echo "fails";
 }
}
 ?>

</body>
</html>