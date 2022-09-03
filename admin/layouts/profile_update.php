<?php
 
 session_start();
 require_once '../lib/helpers/connection.db.php';
    
 if(isset($_POST['update']))
 {
    $cur_admin=$_SESSION['username'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $select= "SELECT * FROM `admin` WHERE `username`='$cur_admin'";
    $sql = mysqli_query($db,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['admin_id'];

       $update = "UPDATE admin SET username='$username', password='$password', email='$email' WHERE admin_id=$res";
        $sql2=mysqli_query($db,$update);
if($sql2)
       { 
        
           $_SESSION['username']=$username;
          header('location: dashboard.php');
      
     }
   }
?>