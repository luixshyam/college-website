<?php

include 'include/connection.php';

$id = $_GET['id'];

$q = " DELETE FROM `users` WHERE id = $id ";

mysqli_query($con, $q);

header('location:dsply.php');

?>