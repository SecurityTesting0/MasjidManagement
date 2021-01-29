<?php include("inc/header.php"); ?> 
		<!-- Main Area -->
		<section class="add_new_member ">
			 <div class="container">
				<div class="row">	
					<table id="example" class="display table-hover table-striped table-bordered table-responsive" style="width:100%;">
					
						<?php		
						$query="SELECT * FROM members where Active_status=0";
						$results=$db->select($query);
						$id=0; 
						if ($results){	
						?>
						<thead>
							<tr class="bg-success">
								<th>Members Code</th>								
								<th>Name</th>								
								<th>Members Type</th>
								<th>Mobile</th>
								<th>Membership Date</th>
								<th>Sub. Fees</th>
								<th>Status</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
							
							
							
							<?php
							while($rs=$results->fetch_assoc()){
							$id++; 						
							?>
							
							
						
							<tr>
								<td><?php echo $rs['member_code']; ?></td>							
								<td><?php echo $rs['First_name'].' '.$rs['Last_name']; ?></td>
								<td><?php echo $rs['type']; ?></td>
								<td><?php echo $rs['Mobile_number']; ?></td>
								<td><?php echo $rs['Membership_date']; ?> </td>								
								<td><?php echo number_format($rs['fixed']); ?> </td>								
								<td><?php 
									$status=$rs['Active_status']; 
									if($status==0) {
										echo "<p style='color:red;font-weight:bold;'>Inactive</p>"; 
									}else{
										echo"<p style='color:green; font-weight:bold;'>Active</p>"; 
									}
									?> 
								
								</td>								
								<td><a href="edit_member.php?id='<?php echo $rs['id']; ?>'" class="btn btn-warning">Edit</a>|
								<a href="view_members_single.php?id='<?php echo $rs['id']; ?>" class="btn btn-success">Details</a></td>								
							</tr>	
							
							<?php }?>
							<?php }else{ ?>
							<div class="bg-danger">
								 <p style='text-align:center;'>No Members Data Found!</p>
								 
							</div>
							
							<?php } 
							
							
							?>
							
							
						</tbody>
					</table>
					
					
			 </div>
		</section>
		<!-- End Main Area -->
		
<?php include("inc/footer.php"); ?> 