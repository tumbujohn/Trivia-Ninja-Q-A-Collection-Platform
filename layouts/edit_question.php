
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

    <?php 
    if($row['Language_id'] == 1){
        echo '
        <option value="1" selected>English</option>
        <option value="2">French</option>
        ';
    } else{
        echo '
        <option value="1" >English</option>
        <option value="2" selected>French</option>
        ';
    }
       ?>
       

    </select>
    </div>

    
    <div class="edit-grp selects">
    <label>Subject</label>
    <select name="Cat_id" >
<?php
    $catid_sql=mysqli_query($db,"SELECT * FROM `Category`");
    while( $crow=mysqli_fetch_assoc($catid_sql)){
        if($crow['cat_id'] == $row['Cat_id']){
        ?>
        <option value="<?php echo $crow['cat_id'] ?>" selected><?php echo $crow['Cat_name'] ?></option>

        <?php
    }else{
?>
 <option value="<?php echo $crow['cat_id'] ?>"><?php echo $crow['Cat_name'] ?></option>
<?php
    }
}
?>

    </select>
    </div>

    
    <div class="edit-grp selects">
    <label>Difficulty</label>
    <select name="Sub_cat_id" id="">
    <?php
    $catid_sql=mysqli_query($db,"SELECT * FROM `sub_category`");
    while( $crow=mysqli_fetch_assoc($catid_sql)){
        if($crow['Sub_cat_id'] == $row['Sub_cat_id']){
        ?>
        <option value="<?php echo $crow['Sub_cat_id'] ?>" selected><?php echo $crow['Sub_cat_name'] ?></option>

        <?php
    }else{
?>
 <option value="<?php echo $crow['Sub_cat_id'] ?>"><?php echo $crow['Sub_cat_name'] ?></option>
<?php
    }
}
?>

    </select>
    </div>

    
    <div class="edit-grp selects">
    <label>Question Type</label>
    <select name="Question_type" id="">
        
    <?php 
    if($row['Question_type'] == 1){
        echo '
        <option value="1" selected>MCQ</option>
        <option value="2">True/False</option>
        ';
    } else{
        echo '
        <option value="1" >MCQ</option>
        <option value="2" selected>True/False</option>
        ';
    }
       ?>
       
    </select>
    </div>

    
    <div class="edit-grp">
    <label class ='op'>Question </label>
    <input type="text" name="Question" value="<?php echo $row['Question']; ?>">
    </div>

    
    
    <div class="edit-grp">
    <label class ='op'>Option 1</label>
    <input type="text" name="Option_1" value="<?php echo $row['Option_1']; ?>">
    </div>

    
    <div class="edit-grp">
    <label class ='op'>Option 2</label>
    <input type="text" name="Option_2" value="<?php echo $row['Option_2']; ?>">
    </div>

    
    <div class="edit-grp">
    <label class ='op'>Option 3</label>
    <input type="text" name="Option_3" value="<?php echo $row['Option_3']; ?>">
    </div>
    
    <div class="edit-grp">
    <label class ='op'>Option 4</label>
    <input type="text" name="Option_4" value="<?php echo $row['Option_4']; ?>">
    </div>
    
    
    <div class="edit-grp">
    <label>Answer</label>
    <select name="Answer" id="">
    <?php
                $Ans = $row['Answer'];
            
                if($Ans == 'a'){
                    echo '
                    <option value="a" selected>Option 1</option>
                    <option value="b">Option 2</option>
                    <option value="c">Option 3</option>
                    <option value="d">Option 4</option>
                    ';
                }elseif($Ans == 'b'){
                    echo '
                    <option value="a">Option 1</option>
                    <option value="b" selected>Option 2</option>
                    <option value="c">Option 3</option>
                    <option value="d">Option 4</option>
                    ';
                }elseif($Ans == 'c'){
                    echo '
                    <option value="a">Option 1</option>
                    <option value="b">Option 2</option>
                    <option value="c"selected>Option 3</option>
                    <option value="d">Option 4</option>
                    ';
                }else{
                    echo '
                    <option value="a">Option 1</option>
                    <option value="b">Option 2</option>
                    <option value="c">Option 3</option>
                    <option value="d" selected>Option 4</option>
                    ';
                }
        ?>
    </select>
    </div>

    
    <div class="edit-grp">
    <label>Note</label>
    <textarea name="Note" id="" cols="10" rows="3"><?php echo $row['Note']; ?></textarea>
    </div>
    <div class="edit-grp sub">
        <input type="hidden" name="user_id" value = "<?php echo $_SESSION['user_id'];?>">
		<input type="submit" name="update" value="update">
    </div>

	</form>
  </div>
    <?php include ("./partials/footer.php"); ?>