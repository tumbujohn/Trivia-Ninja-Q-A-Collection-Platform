
<?php

session_start();
    if(!ISSET($_SESSION['username'])){
        header('location:../login.php');
    }
    
// include ("profile.php");    


include ("partials/header.php");
include ("partials/sidenav.php");
// include ("./partials/panel");
// include ("./partials/footer");

	$Question_id= $_GET['qid'];
	$sql=mysqli_query($db,"SELECT * FROM `questions`  WHERE Question_id='$Question_id'");
	$row=mysqli_fetch_assoc($sql);
?>

   <div class = 'edit-wrapper'>
	<form method="POST" action="update_question.php?id=<?php echo $Question_id; ?>">

    <div class="edit-grp">
    <label>Language</label>
    <select name="Language_id" id="">
        <option value="1">English</option>
        <option value="2">French</option>
    </select>
    </div>

    
    <div class="edit-grp selects">
    <label>Subject</label>
    <select name="Cat_id" id="">
        <option value="1">English</option>
        <option value="2">French</option>
        <option value="2">Math</option>
    </select>
    </div>

    
    <div class="edit-grp selects">
    <label>Difficulty</label>
    <select name="Sub_cat_id" id="">
        <option value="1">Easy</option>
        <option value="2">Hard</option>
        <option value="3">Medium</option>
    </select>
    </div>

    
    <div class="edit-grp selects">
    <label>Question Type</label>
    <select name="Question_type" id="">
        <option value="1">MCQ</option>
        <option value="2">True/False</option>
    </select>
    </div>

    
    <div class="edit-grp">
    <label>Question </label>
    <input type="text" name="Question" value="<?php echo $row['Question']; ?>">
    </div>

    
    
    <div class="edit-grp">
    <label class ='op'>Option 1</label>
    <input type="text" name="Option_1" value="<?php echo $row['Option_1']; ?>">
    </div>

    
    <div class="edit-grp">
    <label class ='op'>Option 2</label>
    <input type="text" name="Option_1" value="<?php echo $row['Option_2']; ?>">
    </div>

    
    <div class="edit-grp">
    <label class ='op'>Option 3</label>
    <input type="text" name="Option_1" value="<?php echo $row['Option_3']; ?>">
    </div>
    
    <div class="edit-grp">
    <label class ='op'>Option 4</label>
    <input type="text" name="Option_1" value="<?php echo $row['Option_4']; ?>">
    </div>
    
    
    <div class="edit-grp">
    <label>Answer</label>
    <select name="Answer" id="">
        <option value="a">Option 1</option>
        <option value="b">Option 2</option>
        <option value="c">Option 3</option>
        <option value="d">Option 4</option>
    </select>
    </div>

    
    <div class="edit-grp">
    <label>Note</label>
    <textarea name="Note" id="" cols="10" rows="3"><?php echo $row['Note']; ?></textarea>
    </div>
    <div class="edit-grp sub">
		<input type="submit" name="update" value="update">
    </div>

	</form>
  </div>
    <?php include ("./partials/footer.php"); ?>