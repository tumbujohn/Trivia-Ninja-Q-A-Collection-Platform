<?php
# Initialize session
session_start();

# Include connection
require "lib/helpers/connection.db.php";

# Define variables and initialize with empty values


if(isset($_POST['signup'])){

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $username = $_POST['username'];
  $tel = $_POST['tel'];
  $email = $_POST['email'];
  $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];

  
  if ($password !== $cpassword){
    echo "Password do not match";
  }
  else{
   
    $pass=md5($password);

  $sql = "INSERT INTO users (fname, lname, username, email,tel, password) VALUES ('$fname', '$lname','$username','$email','$tel','$pass')";
  $send=mysqli_query($db, $sql);
  
  if($send){
    
  $query = mysqli_query($db, "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$pass'") or die(mysqli_error());
  $fetch = mysqli_fetch_assoc($query);
  $row = mysqli_num_rows($query);

  if($row > 0){
    $_SESSION['username']=$fetch['username'];
    $_SESSION['user_id']=$fetch['user_id'];
  
    echo "<script>alert('Welcome to Trivia-Ninja-Q-A-Collection-Platform');</script>";
    echo "<script>window.location.href='layouts/dashboard.php';</script>";
  }
}
  else{
    echo "Error:" .$sql . "<br>" . mysql_error($db);
  }
}
}
  
   
   ?>
