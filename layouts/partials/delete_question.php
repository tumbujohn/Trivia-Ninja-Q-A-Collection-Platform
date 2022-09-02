<?php
	$Question_id=$_GET['Question_id'];
	include('conn.php');
	mysqli_query($db,"DELETE FROM `questions` WHERE Question_id='$Question_id'");
	header('location:quesion_table.php');
?>