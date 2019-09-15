<?php
$con = mysqli_connect("localhost", "root", "", "estore")or die($mysqli_error($con));
session_start();

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['e-mail'];
  $email = mysqli_real_escape_string($con, $email);

  $message = $_POST['message'];
  $password = mysqli_real_escape_string($con, $message);
 

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  


    
    $query = "INSERT INTO contactus(name, email, message)VALUES('" . $name . "','" . $email . "','" . $message . "')";
    $registration_query = mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: index.php');
  
?>




