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
    echo "Error:" .$sql . "<br>";
  }

}

?>
 
 <div class="table-wrapper">

 <div class= 'text-AQ'>
 <a href="add-question.php" >Add question</a>
</div>

<table>
    <thead id = 'txt'> 
        <th>Question</th>
        <th>Option A </th>
        <th>Option B</th>
        <th>Option C</th>
        <th>Option D</th>
        <th>Status </th>
        <th>Actions</th>
    </thead>
    <tbody>
<?php
$user_id= $_SESSION['user_id'];

$query = mysqli_query($db, "SELECT * FROM `questions` WHERE  `user_id` = $user_id ") 
or 
die();
$row = mysqli_num_rows($query);

if($row>0){
    while($fetch = mysqli_fetch_assoc($query)){
?>

<tr>
    <td><?php echo $fetch['Question'] ?></td>
    <td><?php echo $fetch['Option_1'] ?></td>
    <td><?php echo $fetch['Option_2'] ?></td>
    <td><?php echo $fetch['Option_3'] ?></td>
    <td><?php echo $fetch['Option_4'] ?></td>
    <td><?php 
    if($fetch['Status'] == 1){
        echo 'Vetted';
    }else{
        echo  'To be vetted';
    }
    ?></td>
    <td>
       <?php
if($fetch['Status']==0){
    ?>
     <a class ='edit' href="edit_question.php?qid=<?php echo $fetch['Question_id'] ?>" >Edit</a>
        <a class = 'delete' href="question_table.php?qid=<?php echo $fetch['Question_id'] ?>">Delete</a>
        <?php
}else{
    ?>
    <a class ='disable' href="#" >Edit</a>
        <a class = 'disable' href="#">Delete</a>
    <?php
}
       ?>
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