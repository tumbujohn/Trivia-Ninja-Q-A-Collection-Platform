<?php
#include connection
require '../../lib/helpers/connection.db.php';
//require()

# Define variables and initialize with empty values


if(isset($_GET['id']) && isset($_POST['update'])){

    $id=$_GET['id'];

  $Language_id = $_POST['Language_id'];
  $Cat_id = $_POST['Cat_id'];
  $Sub_cat_id = $_POST['Sub_cat_id'];
  $user_id = $_POST['user_id'];
  $Question_type = $_POST['Question_type'];
   $Question = $_POST['Question'];
   $Option_1 = $_POST['Option_1'];
   $Option_2 = $_POST['Option_2'];
   $Option_3 = $_POST['Option_3'];
   $Option_4 = $_POST['Option_4'];
   $Answer = $_POST['Answer'];
   $Note = $_POST['Note'];
   

  $sql = "UPDATE questions SET Language_id='$Language_id', Cat_id='$Cat_id', Sub_cat_id='$Sub_cat_id', user_id='$user_id', Question_type= '$Question_type', Question='$Question', Option_1='$Option_1', Option_2= '$Option_2', Option_3='$Option_3', Option_4='$Option_4', Answer='$Answer', Note='$Note'
  WHERE Question_id=$id

  ";

  $send=mysqli_query($db, $sql);
  
  if($send){
    echo '<script>alert("Question successfully Updated");</script>';
    echo "<script>" . "header.location.href='dashboard.php';" . "</script>";
    // header("location:../dashboard.php");
    // exit();
  }
  else{
    echo "Error:" .$sql . "<br>" ;
  }
}else{
    echo "Question does not esist";
}

  
   
   ?>


