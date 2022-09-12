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
<div class="all__users" >

   

	<div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Manage <b>New Questions</b></h2>
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

 
$sql = "SELECT * FROM questions LEFT JOIN users ON  questions.user_id=users.user_id WHERE Status='0'"; 

                        $query = mysqli_query($db,$sql);

                            if(!$query)
                                {		
                                 echo "Query does not work.".mysqli_error($db);die;
                                }

                             while($data = mysqli_fetch_array($query))
                             {		
								$timestamp = strtotime($data['datetime']);
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
								<!-- Get Category name by Id -->
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
                            
						

								<a href="../layouts/edit_question.php" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
								
								<a href="../layouts/more.php?qid=<?php echo $data['Question_id'] ?>" class="delete" data-toggle="modal"><i class="fa-sharp fa-solid fa-file-plus-minus" data-toggle="tooltip" title="More">&#xE15C;</i></a>
								
							</td>
				
						</tr>
                        <?php							
								}
							?>
						
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
</div>

    <?php include ("./partials/footer.php"); ?>