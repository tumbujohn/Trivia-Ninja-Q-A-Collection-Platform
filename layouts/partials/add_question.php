<?php
	$Question_id=$_POST['Question_id'];
    #include connection
	include"../lib/helpers/connection.db.php";
    

	mysqli_query($db,"DELETE FROM `questions` WHERE Question_id='$Question_id'");
	header('location:question_table.php');
?>