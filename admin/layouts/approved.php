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
							<h2> Vetted <b> Questions </b></h2>
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
							<th>Username</th>
							<th>Category_Name</th>
							<th>Question</th>
                            <th>Option_1</th>
                            <th>Option_2</th>
                            <th>Option_3</th>
                            <th>Option_4</th>
                            <th>Answer</th>
                            <th>Status</th>
						</tr>
					</thead>
					<tbody>

                    <?php 

 
                        $sql = "SELECT * FROM questions WHERE Status='1'"; 

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
							
							<td>
								<?php
								$uid=$data['user_id'];
								$userid_sql=mysqli_query($db,"SELECT * FROM `users` WHERE `user_id` = $uid ");
								if($crow=mysqli_fetch_assoc($userid_sql)){
								?>
								   <?php echo ucwords($crow['username']); ?>
	
									<?php
										}
								?>
							</td>

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
						
                            <td><?php echo $data['Question'];?></td>
							<td><?php echo $data['Option_1'];?></td>
							<td><?php echo $data['Option_2'];?></td>
							<td><?php echo $data['Option_3'];?></td>
                            <td><?php echo $data['Option_4'];?></td>
							<td><?php echo $data['Answer'];?></td>
							<td><?php echo $data['Status'];?></td>
							
							
						
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