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

if(isset($_GET['qid'])){

    $Question_id=$_GET['qid'];
	
$del_question =	mysqli_query($db,"DELETE FROM `questions` WHERE Question_id= $Question_id " );

if($del_question){
    echo '<script>alert("Qusetion successfully deleted");</script>';
  }
  else{
    echo "Error:" .$sql . "<br>" . mysql_error($db);
  }

}

?>
 
 <div class="table-wrapper">
 <a href="add-question.php" class = text-AQ>Add question</a>

<table>
    <thead>
        <th>Question</th>
        <th>Author</th>
        <th>Actions</th>
    </thead>
    <tbody>
<?php
$user_id= $_SESSION['user_id'];

$query = mysqli_query($db, "SELECT * FROM `questions` WHERE  `user_id` = $user_id ") 
or 
die(mysqli_error());
$row = mysqli_num_rows($query);

if($row>0){
    while($fetch = mysqli_fetch_assoc($query)){
?>

<tr>
    <td><?php echo $fetch['Question'] ?></td>
    <td><?php echo $fetch['user_id'] ?></td>
    <td>
        <a href="edit_question.php?qid=<?php echo $fetch['Question_id'] ?>" >Edit</a>
        <a href="question_table.php?qid=<?php echo $fetch['Question_id'] ?>">Delete</a>
</td>
</tr>

<?php
}
}
?>

    </tbody>
</table>
</div>

<?php include ("./partials/footer.php"); ?>