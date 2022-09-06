
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

?> 

   <div class = 'edit-wrapper'>
	<form method="POST" action="partials/val_questions.php">

    <div class="edit-grp">
    <label>Language</label>
    <select name="Language_id" >
        <option value="1">English</option>
        <option value="2">French</option>
    </select>
    </div>

    
    <div class="edit-grp selects">
    <label>Subject</label>
    <select name="Cat_id" >

    <?php
    $catid_sql=mysqli_query($db,"SELECT * FROM `Category`");
    while( $crow=mysqli_fetch_assoc($catid_sql)){
        ?>
        <option value="<?php echo $crow['cat_id'] ?>" selected><?php echo $crow['Cat_name'] ?></option>

        <?php
    }

?>

    </select>
    </div>

    
    <div class="edit-grp selects">
    <label>Difficulty</label>
    <select name="Sub_cat_id" >

    <?php
    $catid_sql=mysqli_query($db,"SELECT * FROM `sub_category`");
    while( $crow=mysqli_fetch_assoc($catid_sql))
        {
        ?>
        <option value="<?php echo $crow['Sub_cat_id'] ?>" selected><?php echo $crow['Sub_cat_name'] ?></option>

        <?php  
}
?>
        
            
    </select>
    </div>

    
    <div class="edit-grp selects">
    <label>Question Type</label>
    <select name="Question_type" >
        <option value="1">MCQ</option>
        <option value="2">True/False</option>
    </select>
    </div>

    
    <div class="edit-grp">
    <label class ='op'>Question </label>
    <input type="text" name="Question" placeholder="Enter question">
    </div>

    
    
    <div class="edit-grp">
    <label class ='op'>Option 1</label>
    <input type="text" name="Option_1" placeholder="Enter option 1">
    </div>

    
    <div class="edit-grp">
    <label class ='op'>Option 2</label>
    <input type="text" name="Option_2" placeholder="Enter option 2">
    </div>

    
    <div class="edit-grp">
    <label class ='op'>Option 3</label>
    <input type="text" name="Option_3" placeholder="Enter option 3 ">
    </div>
    
    <div class="edit-grp">
    <label class ='op'>Option 4</label>
    <input type="text" name="Option_4" placeholder="Enter option 4">
    </div>
    
    
    <div class="edit-grp">
    <label>Answer</label>
    <select name="Answer" >
        <option value="a">Option 1</option>
        <option value="b">Option 2</option>
        <option value="c">Option 3</option>
        <option value="d">Option 4</option>
       
    </select>
    </div>

    
    <div class="edit-grp">
    <label>Note</label>
    <textarea name="Note"  cols="10" rows="3"></textarea>
    </div>
    <div class="edit-grp sub">
        <input type="hidden" name="user_id" value= "<?php echo $_SESSION['user_id']; ?>">
		<input type="submit" name="add_quest" value="ADD">
    </div>


	</form>
  </div>
    <?php include ("./partials/footer.php"); ?>