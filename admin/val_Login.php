<?php
# Initialize session
session_start();

# Include connection
require_once "./lib/helpers/connection.db.php";

# Processing form data when form is submitted
 
 if(ISSET($_POST['login'])){
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $query = mysqli_query($db, "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'") or die(mysqli_error());
  $fetch = mysqli_fetch_assoc($query);
  $row = mysqli_num_rows($query);

  if($row > 0){
    $_SESSION['username']=$fetch['username'];
    $_SESSION['admin_id']=$fetch['admin_id'];
  // output data of each row
        header('location:layouts/dashboard.php'); 
  
} else {
  echo "<script>alert('error wrong password');</script>";
}
 }
?>
