



<!-- The main control board or panel for the dashboard,  aligned next to the side nav -->

<div class="all__users" >
      


	<div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Manage <b>Questions</b></h2>
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
							
							<th>Question</th>
							<th>Author</th>
							<th>Category</th>
							<th>Time</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?php 


							$timestamp = time();
							


							
							$sql = "SELECT * FROM questions LEFT JOIN users ON  questions.user_id=users.user_id";
						
 							$query = mysqli_query($db,$sql);
 
								
									
 
								while($data = $query->fetch_assoc())
									{		
									
								?>
   
						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox1" name="options[]" value="1">
									<label for="checkbox1"></label>
								</span>
							</td>
                        
                            <td><?php echo $data['Question'];?></td>

							<td><?php echo $data['username'];?></td>

							<td>
								
							<?php
							$cid=$data['Cat_id'];
    $catid_sql=mysqli_query($db,"SELECT * FROM `Category` WHERE `cat_id` = $cid ");
        if($crow=mysqli_fetch_assoc($catid_sql)){
        ?>
       <?php echo ucwords($crow['Cat_name']); ?>

        <?php
    }
?>
							</td>

							<td><?php echo (date("F d, Y h:i A", $timestamp));?></td>
							
							<td>
                            
							
								<a href="#editquestion" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
								
								<a href="#More" class="delete" data-toggle="modal"><i class="fa-sharp fa-solid fa-file-plus-minus" data-toggle="tooltip" title="More">&#xE15C;</i></a>
								
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

						</tr>
				
					
	<!-- Edit Modal HTML -->

	<div id="editquestion" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
						<?php 

 
								$sql = "SELECT * FROM questions";

								$query = mysqli_query($db,$sql);

						$getrowassoc= mysqli_fetch_assoc($query)
						?>

					<div class="modal-header">						
						<h4 class="modal-title">Edit Question</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Question_type</label>
							<input type="text" class="form-control" value="<?php echo $getrowassoc['Question_type']; ?>" required>
						</div>
						<div class="form-group">
							<label>Question</label>
							<input type="text" class="form-control" value="<?php echo $getrowassoc['Question']; ?>" required>
						</div>
						<div class="form-group">
							<label>Option_1</label>
							<input type="text" class="form-control" value="<?php echo $getrowassoc['Option_1']; ?>" required>
						</div>
						<div class="form-group">
							<label>Option_2</label>
							<input type="text" class="form-control" value="<?php echo $getrowassoc['Option_2']; ?>" required>
						</div>	
						<div class="form-group">
							<label>Option_3</label>
							<input type="text" class="form-control" value="<?php echo $getrowassoc['Option_3']; ?>" required>
						</div>	
						<div class="form-group">
							<label>Option_4</label>
							<input type="text" class="form-control" value="<?php echo $getrowassoc['Option_4']; ?>" required>
						</div>	
						<div class="form-group">
							<label>Answer</label>
							<input type="text" class="form-control" value="<?php echo $getrowassoc['Answer']; ?>" required>
						</div>		
						
						<?php
					
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
						<p>Are you sure you want to delete these Question?</p>
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


</div>




