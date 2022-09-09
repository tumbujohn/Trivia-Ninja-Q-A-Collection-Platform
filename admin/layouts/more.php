
<?php

session_start();
    if(!ISSET($_SESSION['username'])){
        header('location:../login.php');
    }


include ("partials/header.php");
include ("partials/sidenav.php");

if(isset($_GET['vqid'])){
    $vqid= $_GET['vqid'];

    $sqls = "UPDATE questions SET Status= 1 WHERE question_id=$vqid ";
  
    $sends=mysqli_query($db, $sqls);

if(!$sends)
    {
        echo "Query does not work.";
    }else{
        echo "<script>alert('Updated Successfully');</script>";
    }
}




?>



<div class="all__users" >
      


	<div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Details</h2>
						</div>
						<div class="col-xs-6">
						
						</div>
						
					</div>
				</div>

			<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>
								<span class="custom-checkbox">
									<input type="checkbox" id="selectAll">
									<label for="selectAll"></label>
								</span>
							</th>
							<th>Question_type</th>
							<th>Question</th>
							<th>Option_1</th>
							<th>Option_2</th>
							<th>Option_3</th>
							<th>Option_4</th>
							<th>Question</th>
					     	<th>Action</th>
						</tr>
					</thead>
					<tbody>
                    <?php 
if(isset($_GET['qid'])){
    $qid= $_GET['qid'];
 
$sql = "SELECT * FROM questions WHERE Question_id = $qid";

$query = mysqli_query($db,$sql);

if(!$query)
{
    echo "Query does not work.".mysqli_error($db);die;
}

while($row = mysqli_fetch_array($query))
{
?>
					
						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox1" name="options[]" value="1">
									<label for="checkbox1"></label>
								</span>
							</td>
							<td><?php  echo $row['Question_type']."<br>";?></td>
							<td><?php echo $row['Question'];?></td>
                            <td><?php echo $row['Option_1'];?></td>
                            <td><?php echo $row['Option_2'];?></td>
                            <td><?php echo $row['Option_3'];?></td>
                            <td><?php echo $row['Option_4'];?></td>
                            <td><?php echo $row['Answer'];?></td>
							<td><a style="background:green;color:white;padding:5px 10px;" href="more.php?vqid=<?php echo $qid ;?>">Accept</a></td>
						</tr>
									

						<?php
						}
                    }
                    
						?>			
				
					</tbody>
				</table>
              
		</div>        
    </div>
	
    <?php include ("./partials/footer.php"); ?>