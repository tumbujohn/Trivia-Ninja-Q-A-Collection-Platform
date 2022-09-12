
<?php


// include ("profile.php");    


include ("partials/header.php");
include ("partials/sidenav.php");
// include ("./partials/panel");
// include ("./partials/footer");

	$Question_id= $_POST['qid'];
    $Question_id=$_POST('qid');
	$sql=mysqli_query($db,"SELECT * FROM `questions`  WHERE Question_id='$Question_id'");
	$row=mysqli_fetch_assoc($sql);
?>

<div id="editquestion" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<!-- Fetch table attributes and content from database and display -->
						<?php 



								$sql = "SELECT * FROM questions";

								$query = mysqli_query($db,$sql);

								if(!$query)
								{
									echo "Query does not work.".mysqli_error($db);die;
								}

								while($row = mysqli_fetch_array($query))
								{								
						?>

					<div class="modal-header">						
						<h4 class="modal-title">Edit Question</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Question_type</label>
							<input type="text" class="form-control" value="<?php echo $row['Question_type']; ?>" required>
						</div>
						<div class="form-group">
							<label>Question</label>
							<input type="text" class="form-control" value="<?php echo $row['Question']; ?>" required>
						</div>
						<div class="form-group">
							<label>Option_1</label>
							<input type="text" class="form-control" value="<?php echo $row['Option_1']; ?>" required>
						</div>
						<div class="form-group">
							<label>Option_2</label>
							<input type="text" class="form-control" value="<?php echo $row['Option_2']; ?>" required>
						</div>	
						<div class="form-group">
							<label>Option_3</label>
							<input type="text" class="form-control" value="<?php echo $row['Option_3']; ?>" required>
						</div>	
						<div class="form-group">
							<label>Option_4</label>
							<input type="text" class="form-control" value="<?php echo $row['Option_4']; ?>" required>
						</div>	
						<div class="form-group">
							<label>Answer</label>
							<input type="text" class="form-control" value="<?php echo $row['Answer']; ?>" required>
						</div>		
						
						<?php
								}
						?>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">

					</div>
					
				</form>
			</div>
		</div>
	</div>

    <?php include ("./partials/footer.php"); ?>