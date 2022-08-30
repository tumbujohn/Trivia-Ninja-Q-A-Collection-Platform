<?php

require_once '../lib/helpers/connection.db.php';
    
    if(ISSET($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
 
        $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'") or die(mysqli_error());
        $fetch = mysqli_fetch_array($query);
        $row = mysqli_num_rows($query);
 
        if($row > 0){
            $id=$fetch['user_id'];
            echo "<script>alert('Login Successfully!')</script>";
            echo "<script>window.location='dashboard.php'</script>";
        }else{
            echo "<script>alert('Invalid username or password')</script>";
            echo "<script>window.location='login.php'</script>";
        }
 
    }



?>