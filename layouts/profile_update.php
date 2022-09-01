<?php
 
 session_start();
 require_once '../lib/helpers/connection.db.php';
    
 if(isset($_POST['update']))
 {
    $cur_username=$_SESSION['username'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $select= "SELECT * FROM `users` WHERE `username`='$cur_username'";
    $sql = mysqli_query($db,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['user_id'];

       $update = "UPDATE users SET username='$username', password=$password, email='$email' WHERE user_id=$res";
        $sql2=mysqli_query($db,$update);
if($sql2)
       { 
         // echo "<script>alert('Login Successfully!')</script>";
           /*Successful*/
           $_SESSION['username']=$username;
          header('location: dashboard.php');
         //  echo "yeah!";       }
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