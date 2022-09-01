<?php
# Include connection
require "lib/helpers/connection.db.php";

# Define variables and initialize with empty values


if(isset($_POST['submit'])){

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $username = $_POST['username'];
  // $tel = $_POST['tel'];
  $email = $_POST['email'];
  $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];

  
  if ($password !== $cpassword){
    echo "Password do not match";
  }
  else{
   

  }

  $sql = "INSERT INTO users (fname, lname, username, email, password) Values('$fname', '$lname','$username','$email','$password')";
  $send=mysqli_query($db, $sql);
  
  if($send){
    echo "<script>alert('Welcome to Trivia-Ninja-Q-A-Collection-Platform');<script>";
  }
  else{
    echo "Error:" .$sql . "<br>" . mysql_error($db);
  }
}

  
   
   ?>
