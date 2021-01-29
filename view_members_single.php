<?php include("inc/header.php"); ?> 



<?php 
		if (empty($_GET['id'])){
		}elseif(!isset($_GET['id']) || $_GET['id'] == NULL){
			echo 'Something went to wrong';
		}else{
				$tid= $_GET['id'];
				$id= preg_replace("/[^0-9a-zA-Z]/", "", $tid);
				$rid = $id;
		}
?>
				
		<!-- Main Area -->
		<section class="add_new_member ">
			 <div class="container">
				<div class="row">	
					<?php
						$query ="SELECT * FROM members where id=$rid";
						   
						$results = $db->select($query);

						if ($results){?>
						<?php while ($rs = $results->fetch_assoc()) {

						?> 	
					<div class="form-group from_border">
						<h4 class="well text-center"><span style="color:red; font-weight:bold;">Members</span> <span style="color:green; font-weight:bold;"> Details Information </span></h4>
						
								
								<td></td>
								<td></td>
								<td> </td>
								<td> </td>
								<td></td>
						  
						  <form action="" enctype="">
							  <div class="col-xs-6 bg-danger">
								<label for="ex2">Member Code</label>
								<p><?php echo $rs['member_code']; ?></p>
							  </div>
							  <div class="col-xs-6 bg-danger">
								<label for="ex2">Member Type</label>
								<p><?php echo $rs['type']; ?></p>
							  </div>
							  <div class="col-xs-6 bg-success">
								<label for="ex2">First Name</label>
								<p><?php echo $rs['First_name']; ?><p>
							  </div>
							   
							  <div class="col-xs-6 bg-success">
								<label for="ex3">Last Name</label>
								<p><?php echo $rs['Last_name']; ?></p>
							  </div>
							  <div class="col-xs-6 bg-danger">
								<label for="ex2">Mobile Number </label>
								<p><?php echo $rs['Mobile_number']; ?></p>
							  </div>
							  <div class="col-xs-6 bg-danger">
								<label for="ex2"> Membership Date </label>
								<p><?php echo $rs['Membership_date']; ?></p>
							  </div>							   
							  <div class="col-xs-12 bg-success">
								<label for="ex2">Address </label>
								<p><?php echo $rs['Address']; ?></p>
							  </div>
							  <div class="col-xs-6 bg-danger">
								<label for="ex2"> Fixed Sub. Fees </label>
								<p><?php echo $rs['fixed']; ?></p>
							  </div>
							  <div class="col-xs-6 bg-danger">
								<label for="ex2"> Status </label>
								<p><?php 
									$status=$rs['Active_status']; 
										if($status==0) {
											echo "<p style='color:red;font-weight:bold;'>Inactive</p>"; 
										}else{
											echo"<p style='color:green; font-weight:bold;'>Active</p>"; 
										}
									?> 
								</p>
							  </div>
							 
							
							 <div class="col-xs-3 margin_top">							
								<a href="delete_members.php?id='<?php echo $rs['id']; ?>'" 
								class="form-control btn btn-danger" id="ex2" type="submit"> Delete Members </a> 
							 </div>	
							 <div class="col-xs-3 margin_top">							
								<a href="edit_member.php?id='<?php echo $rs['id']; ?>'" class="form-control btn btn-success" 
								id="ex2" type="submit">Edit Info </a>
							 </div>						
						 
						 </form>
					</div> 
						<?php } ?> 
						<?php } ?> 
					
			 </div>
		</section>
		<!-- End Main Area -->
		
<?php include("inc/footer.php"); ?> 