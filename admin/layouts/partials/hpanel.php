<!-- The main control board or panel for the dashboard,  aligned next to the side nav -->

<div class="all__users" >
      


<div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Manage <b>Users</b></h2>
						</div>
						<div class="">
							<a href="#addUserModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
							<!-- <a href="#deleteUserModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						 -->
						</div>
					</div>
				</div>

<!-- Users table  -->

				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>
								<span class="custom-checkbox">
									<input type="checkbox" id="selectAll">
									<label for="selectAll"></label>
								</span>
							</th>
							
							<th>username</th>
							<th>email</th>
							<th>Phone</th>
							
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?php 

                // Collect all users from database 
					$sql = "SELECT * FROM users order by user_id desc";
 
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
							
							
                        
                            <td><?php echo $data['username']."<br>";?></td>

							<td><?php echo $data['email']."<br>";?></td>
                        
                            <td><?php echo $data['tel']."<br>";?></td>
							
							<td>
                            
							
								<a href="#editUserModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
								<a href="#deleteUserModal" type="button" class="btn btn-danger btn-sm delete-button" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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
	<div id="addUserModal" class="modal fade">
        <div class="noter">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../adduser.php" method="POST">
					<div class="modal-header">						
						<h4 class="modal-title">Add User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
					<div class="form-group">
							<label>First Name</label>
							<input type="text" name="fname" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Last Name</label>
							<input type="text" name="lname" class="form-control" required>
						</div>					
						<div class="form-group">
							<label>username</label>
							<input type="text" name="username" class="form-control" required>
						</div>
						<div class="form-group">
							<label>email</label>
							<input type="email" name="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" name="tel" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<textarea class="form-control" name="password" required></textarea>
						</div>
											
					</div> 
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add" name="add">
					</div>
				
				</form>
			</div>
		</div>
        </div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editUserModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Edit User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>username</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" required>
						</div>	
						
										
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
	<div id="deleteUserModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Delete User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete" id="delete">
					</div>
				</form>
			</div>
		</div>
	</div>


</div>
