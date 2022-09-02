<?php

session_start();
    if(!ISSET($_SESSION['username'])){
        header('location:../login.php');
    }
    
include ("profile.php");    


include ("partials/header.php");
include ("partials/sidenav.php");
// include ("./partials/panel");
// include ("./partials/footer");

?>

<form method="POST" action="partials/val_questions.php">
	
			<label>Language_id:</label><input type="number" name="Language_id">
            <label>Cat_id:</label><input type="number" name="Cat_id">
            <label>Sub_cat_id:</label><input type="number" name="Sub_cat_id">
           <input type="hidden" name="user_id" value="<?php echo  $_SESSION['user_id'] ?>">
            <label>Question_type:</label><input type="number" name="Question_type">
            <label>Question:</label><input type="text" name="Question">
            <label>Option_1:</label><input type="text" name="Option_1">
            <label>Option_2:</label><input type="text" name="Option_2">
            <label>Option_3:</label><input type="text" name="Option_3">
            <label>Option_4:</label><input type="text" name="Option_4">
            <label>Answer:</label><input type="text" name="Answer">
            <label>Note:</label><input type="text" name="Note">

            
			<input type="submit" name="add">
      
		</form>
