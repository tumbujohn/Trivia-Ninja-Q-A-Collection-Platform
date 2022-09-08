<?php
# Initialize session
session_start();

# Include connection
require_once "../lib/helpers/connection.db.php";

# Processing form data when form is submitted
 

if(isset($_POST['add'])){

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $username = $_POST['username'];
  $tel = $_POST['tel'];
  $email = $_POST['email'];
  $password = $_POST['password'];
//    $cpassword = $_POST['cpassword'];
    $pass=md5($password);

  $sql = "INSERT INTO users (fname, lname, username, email,tel, password) VALUES ('$fname', '$lname','$username','$email','$tel','$pass')";
  $send=mysqli_query($db, $sql);
  
  if($send){
   
    echo "<script>alert('Welcome to Trivia-Ninja-Q-A-Collection-Platform');</script>";
    echo "<script>window.location.href='layouts/dashboard.php';</script>";
  }
  else{
    echo "Error:" .$sql . "<br>" . mysql_error($db);
  }
}


   ?>