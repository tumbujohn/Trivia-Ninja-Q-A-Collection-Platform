<?php
//include'../lib/helpers/connection.db.php';


//include ("../profile.php");    


//include ("header.php");
//include ("sidenav.php");
?>

<body>
<style>
th { background-color:brown;
padding: 10px; }
td { background-color:lightyellow;
padding: 10px; }
table, td {
  border: 1px solid black;
}

</style>
<form method="POST" action="val_questions.php">
	
			<label>Language_id:</label><input type="text" name="Language_id">
            <label>Cat_id:</label><input type="text" name="Cat_id">
            <label>Sub_cat_id:</label><input type="text" name="Sub_cat_id">
            <label>user_id:</label><input type="text" name="user_id">
            <label>Question_type:</label><input type="text" name="Question_type">
            <label>Question:</label><input type="text" name="Question">
            <label>Option_1:</label><input type="text" name="Option_1">
            <label>Option_2:</label><input type="text" name="Option_2">
            <label>Option_3:</label><input type="text" name="Option_3">
            <label>Option_4:</label><input type="text" name="Option_4">
            <label>Answer:</label><input type="text" name="Answer">
            <label>Note:</label><input type="text" name="Note">
            <label>Status:</label><input type="text" name="Status">
            
			<input type="submit" name="add">
		</form>

<table>
    <tr>
      <th>Question_id</th>
      <th>Language_id</th>
      <th>Cat_id</th>
      <th>Sub_cat_id</th>
      <th>user_id</th>
      <th>Question_type</th>
      <th>Question</th>
      <th>Option_1</th>
      <th>Option_2</th>
      <th>Option_3</th>
      <th>Option_4</th>
      <th>Answer</th>
      <th>Note</th>
      <th>Status</th> 
      <th></th>
    </tr>

    <?php
    $sql=mysqli_query($db,"SELECT * FROM `questions`");
					while($row=mysqli_fetch_array($sql)){
    ?>
    <tr>
    <td><?php echo $row['Question_id']; ?></td>
      <td><?php echo $row['Language_id']; ?></td>
      <td><?php echo $row['Cat_id']; ?></td>
      <td><?php echo $row['Sub_cat_id']; ?></td>
      <td><?php echo $row['user_id']; ?></td>
      <td><?php echo $row['Question_type']; ?></td>
      <td><?php echo $row['Question']; ?></td>
      <td><?php echo $row['Option_1']; ?></td>
      <td><?php echo $row['Option_2']; ?></td>
      <td><?php echo $row['Option_3']; ?></td>
      <td><?php echo $row['Option_4']; ?></td>
      <td><?php echo $row['Answer']; ?></td>
    <td><?php echo $row['Note']; ?></td>
    <td><?php echo $row['Status']; ?></td>
    <td>
								<a href="edit_question.php?id=<?php echo $row['Question_id']; ?>"><i class="fa-regular fa-file-pen"></i></a>
								<a href="delete_question.php?id=<?php echo $row['Question_id']; ?>"><i class="fa-duotone fa-trash"></i></a>
							</td>

                    </tr>
                    <?php
                    }
                    ?>
  
  </table>
  <button type="submit" name="submit">Submit Questions</button> 
</body>