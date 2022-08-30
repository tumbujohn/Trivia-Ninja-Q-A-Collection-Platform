<?php
# Initialize session
session_start();

# Include connection
require_once "./lib/helpers/connection.db.php";

# Processing form data when form is submitted
if (isset($_POST['login'])) {

$username=$_POST['username'];
 $password=$_POST['password'];

$sql = "SELECT  `username`,`password` FROM users WHERE `username` = '$username' AND `password`='$password'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $_SESSION['user_id'] = $username;
        header('location:layouts/dashboard.php'); 
  
} else {
  echo "<script>alert('error wrong password');</script>";
}

}
?>
