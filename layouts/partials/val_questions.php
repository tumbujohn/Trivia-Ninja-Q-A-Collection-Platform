<?php
#include connection
require "../lib/helpers/connection.db.php";


# Define variables and initialize with empty values


if(isset($_POST['submit'])){

  $Language_id = $_POST['Language_id'];
  $Cat_id = $_POST['Cat_id'];
  $Sub_cat_id = $_POST['Sub_cat_id'];
  $user_id = $_POST['user_id'];
  $Question_type = $_POST['Question_type'];
   $Question = $_POST['Question'];
   $Option_1 = $_POST['Option_1'];
   $Option_2 = $_POST['Option_2'];
   $Option_3 = $_POST['Option_3'];
   $Option_4 = $_POST['Option_'];
   $Answer = $_POST['Answer'];
   $Note = $_POST['Note'];
   $Status = $_POST['Status'];
   

  $sql = "INSERT INTO questions ( Language_id, Cat_id,Sub_cat_id, user_id, Question_type,Question,Option_1,Option_2,Option_3,Option_4,Answer,Note,Status) 

  Values( '$Language_id', '$Cat_id','$Sub_cat_id', '$user_id', '$Question_type','$Question','$Option_1','$Option_2','$Option_3','$Option_4','$Answer','$Note','$Status')";
  $send=mysqli_query($db, $sql);
  
  if($send){
    echo "<script>alert('Welcome to Trivia-Ninja-Q-A-Collection-Platform');<script>";
  }
  else{
    echo "Error:" .$sql . "<br>" . mysql_error($db);
  }
}

  
   
   ?>


