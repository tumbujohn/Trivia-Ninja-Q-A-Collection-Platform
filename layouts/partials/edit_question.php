<?php
		include"../lib/helpers/connection.db.php";

	$Question_id=$_GET['Question_id'];
	$sql=mysqli_query($db,"SELECT * FROM `questions`  WHERE Question_id='$Question_id'");
	$row=mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html>

<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">

		
        <label>Language_id:</label><input type="text" name="Language_id" value="<?php echo $row['Language_id']; ?>">
            <label>Cat_id:</label><input type="text" name="Cat_id" value="<?php echo $row['Cat_id']; ?>">
            <label>Sub_cat_id:</label><input type="text" name="Sub_cat_id" value="<?php echo $row['Sub_cat_id']; ?>">
            <label>user_id:</label><input type="text" name="user_id" value="<?php echo $row['user_id']; ?>">
            <label>Question_type:</label><input type="text" name="Question_type" value="<?php echo $row['Question_type']; ?>">
            <label>Question:</label><input type="text" name="Question" value="<?php echo $row['Question']; ?>">
            <label>Option_1:</label><input type="text" name="Option_1" value="<?php echo $row['Option_1']; ?>">
            <label>Option_2:</label><input type="text" name="Option_2" value="<?php echo $row['Option_2']; ?>">
            <label>Option_3:</label><input type="text" name="Option_3" value="<?php echo $row['Option_3']; ?>">
            <label>Option_4:</label><input type="text" name="Option_4" value="<?php echo $row['Option_4']; ?>">
            <label>Answer:</label><input type="text" name="Answer" value="<?php echo $row['Answer']; ?>">
            <label>Note:</label><input type="text" name="Note" value="<?php echo $row['Note']; ?>">
            <label>Status:</label><input type="text" name="Status" value="<?php echo $row['Status']; ?>">
		<input type="submit" name="submit">
		<a href="question_table.php">Back</a>
	</form>
</body>
</html>