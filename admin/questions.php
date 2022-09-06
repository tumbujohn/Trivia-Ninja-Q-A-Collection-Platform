
<?php
# Include connection
include "lib/helpers/connection.db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manage Questions</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/admin.css">
<script src="js/popup.js"></script>
</head>

<body>
    <div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Manage <b>Questions</b></h2>
						</div>
						<div class="col-xs-6">
							<a href="#editquestion" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Question</span></a>
							<a href="#deleteUserModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
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
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?php 

 
$sql = "SELECT * FROM questions";
 
$query = mysqli_query($db,$sql);
 
if(!$query)
{
    echo "Query does not work.".mysqli_error($db);die;
}
 
while($data = mysqli_fetch_array($query))
{
	?>
   
						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox1" name="options[]" value="1">
									<label for="checkbox1"></label>
								</span>
							</td>
							
							<td><?php echo $data['Question_type']."<br>";?></td>
                        
                            <td><?php echo $data['Question']."<br>";?></td>

						
							
							<td>
                            
							
								<a href="#editquestion" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
								
								<a href="#More" class="edit" data-toggle="modal"><i class="fa-sharp fa-solid fa-file-plus-minus" data-toggle="tooltip" title="More">&#xE254;</i></a>

								<a href="#deletequestion" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
							</td>
<?php							
}
?>
						</tr>
					
					</tbody>
				</table>
				<div class="clearfix">
					<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
					<ul class="pagination">
						<li class="page-item disabled"><a href="#">Previous</a></li>
						<li class="page-item"><a href="#" class="page-link">1</a></li>
						<li class="page-item"><a href="#" class="page-link">2</a></li>
						<li class="page-item active"><a href="#" class="page-link">3</a></li>
						<li class="page-item"><a href="#" class="page-link">4</a></li>
						<li class="page-item"><a href="#" class="page-link">5</a></li>
						<li class="page-item"><a href="#" class="page-link">Next</a></li>
					</ul>
				</div>
			</div>
		</div>        
    </div>
	<!-- Edit Modal HTML -->
	<div id="More" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
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
						
						</tr>
					</thead>
					<tbody>
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

						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox1" name="options[]" value="1">
									<label for="checkbox1"></label>
								</span>
							</td>
							<td><?php  echo $row['Question_type']."<br>";?></td>
							<td><?php echo $row['Question']."<br>";?></td>
                            <td><?php echo $row['Option_1']."<br>";?></td>
                            <td><?php echo $row['Option_2']."<br>";?></td>
                            <td><?php echo $row['Option_3']."<br>";?></td>
                            <td><?php echo $row['Option_4']."<br>";?></td>
                            <td><?php echo $row['Answer']."<br>";?></td>
							
						
						</tr>
									

						<?php
						}
						?>			
				
					</tbody>
				</table>
			</div>
		</div>
	</div>


						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox1" name="options[]" value="1">
									<label for="checkbox1"></label>
								</span>
							</td>
				
					
	<!-- Edit Modal HTML -->
	<div id="editquestion" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
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
	<!-- Delete Modal HTML -->
	<div id="deletequestion" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Delete Question</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete this Question?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>


</body>
</html>