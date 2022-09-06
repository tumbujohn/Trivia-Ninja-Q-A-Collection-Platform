<?php
#include connection
require "../../lib/helpers/connection.db.php";


# Define variables and initialize with empty values


if(isset($_POST['add_quest'])){

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
   

  $sql = "INSERT INTO questions ( Language_id, Cat_id,Sub_cat_id, user_id, Question_type,Question,Option_1,Option_2,Option_3,Option_4,Answer,Note) 
VALUES ( '$Language_id', '$Cat_id','$Sub_cat_id', '$user_id', '$Question_type','$Question','$Option_1','$Option_2','$Option_3','$Option_4','$Answer','$Note')";
  $send=mysqli_query($db, $sql);
  
  if($send){
    echo '<script>alert("Qusetion successfully added");</script>';
    echo "<script>" . "window.location.href='../question_table.php';" . "</script>";
    // header("location:../dashboard.php");
    // exit();
  }
  else{
    echo "Error:" .$sql . "<br>" . mysql_error($db);
  }
}

  
   
   ?>


