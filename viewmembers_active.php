<?php include("inc/header.php"); ?> 
		<!-- Main Area -->
		<section class="add_new_member pading_margn">
			 <div class="container">
				<div class="row">
					<div class="col-xs-12">
						<table id="example" class=" table table-hover table-striped table-bordered table-responsive " style="width:98%;">
						
							<?php		
							$query="SELECT * FROM members where Active_status=1 order by member_code DESC";
							$results=$db->select($query);
							$id=0; 
							if ($results){	
							?>
							<thead>
								<tr class="bg-success">
									<th>A/C</th>								
									<th>Name</th>								
									<th>Type</th>
									<th>Mobile</th> 
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
									<td>
									<?php 
									$ds=$rs['commitee_serial'];
									if ($ds==null){
										echo$rs['First_name'].' '.$rs['Last_name']; 
									}else{
										echo $rs['First_name'].' '.$rs['Last_name'].'-'.$rs['Committee_m_desigination']; 	
									 }
									
									?></td>
									<td><?php echo $rs['type']; ?></td>
									<td><?php echo $rs['Mobile_number']; ?></td> 
									<td><?php echo number_format($rs['fixed']); ?>.00 </td>								
									<td><?php 
										$status=$rs['Active_status']; 
										if($status==1) {
											echo"<p style='color:green; font-weight:bold;'>Active</p>"; 
										}else{
											echo "<p style='color:red;font-weight:bold;'>Inactive</p>"; 
										}
										?>  </td>								
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
							
						<?php		
							$query="SELECT sum(fixed) as total from members";
							$results=$db->select($query);
							$id=0; 
							if ($results){	 
								while($rs=$results->fetch_assoc()){
								$id++; 						
							?>
							
						
							<tfoot>
								<tr class="bg-success"> 
									<th colspan="5" style="text-align:right">Total Collectionable Fee=</th>
									<th><?php echo number_format($rs['total']); ?>.00 </th>	
								</tr>
							</tfoot>	
							
							<?php }?>
							<?php }?>
						</table>
					
					</div>
			 </div>
		</section>
		<!-- End Main Area -->
		
<?php include("inc/footer.php"); ?> 