<?php
 
 session_start();
 require_once '../lib/helpers/connection.db.php';
    
 if(isset($_POST['Update']))
 {
    $id=$_SESSION['user_id'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $select= "SELECT * FROM users WHERE user_id='$id'";
    $sql = mysqli_query($db,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['user_id'];

    echo "$username"; 
    exit;
    if($res === $id)
    {
   
       $UPDATE = "UPDATE users SET username=$username, password=$password, email=$email WHERE user_id=$id";
       $sql2=mysqli_query($db,$update);
if($sql2)
       { 
           /*Successful*/
          // header('location: dashboard.php');
          echo "yeah!";       }
//        else
//        {
//            /*sorry your profile is not update*/
//            header('location:userprofile.php');
//        }
//     }
//     else
//     {
//         /*sorry your id is not match*/
//         header('location:userprofile.php');
     }
  }
?>