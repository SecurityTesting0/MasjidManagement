<?php include("inc/header.php"); 
	error_reporting (0);
?> 
		<!-- Main Area -->
		<section class="add_new_member ">
			 <div class="container">
				<div class="row">	
					<h3 class="text-center"> General Members Unpaid List Report Upto <?php  echo $date=date("Y-m-d"); ?></h3>
		
					<table id="example" class="display" style="width:95%;">
						<thead>
							<tr>
								<th>A/C No.</th>								
								<th>Name</th>								
								<th>Members Type</th>
								<th>Due Amount</th>
								<th>Status</th>
								<th>Action</th> 
							</tr>
						</thead>
						<tbody> 
						<?php	 
							$chk="SELECT member_code FROM members";
								$check=$db->select($chk);
								
								if($check){
											while ($chrs=$check->fetch_assoc()){
								$mid=$chrs['member_code'];
							
								$query ="SELECT members_id as ac, sum(credit_amount) as cr, sum(debit_amount) as dr, 
								First_name as fname, Last_name as Lname, type from 
								subscription_fees INNER JOIN members ON members.member_code=subscription_fees.members_id
								where members_id='$mid'"; 
								$results=$db->select($query); 
								$id=0;
								if ($results){
							
						?> 
						<?php 
							
							while($rs=$results->fetch_assoc()) {
							$id++;
							 $dbt=$rs['dr'];
							 $crt=$rs['cr'];
							 $dbtcrtres =$dbt-$crt;
							 if ($dbtcrtres>=0) { 
							 
						?>
							<tr>
								<td><?php echo $rs['ac'];?> </td>
								<td><?php echo $rs['fname'].' '.$rs['lname'];?> </td>
								<td><?php echo $rs['type'];?> </td>
								<td> <?php echo $dbtcrtres;?> </td>
								<td><span class="bg-danger">Unpaid</span></td>								
								<td><a href="" class="btn btn-success">Details</a></td>								
							</tr>
							
						<?php }?> 
						<?php }?> 
						<?php }?> 
						<?php }?> 
						<?php }?> 		
						</tbody>
						 
					</table>
						
					
					
				</div>
		</section>
		<!-- End Main Area -->
		
<?php include("inc/footer.php"); ?> 