<?php include("inc/header.php"); ?>  
	

<?php
error_reporting(0);
	if (isset($_POST['submit'])){
		$from 	= $_POST['from'];
	}else{
		echo"No Data Found";
	}

?>
		<!-- Main Area -->
		<section class="add_new_member ">
			 <div class="container">
				
				<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
				
					<h3 class="text-center"> <span style="text-align:center; color:green; 
					font-weight:bold;">General Members Collection Detials <?php echo $dt=date('Y-m-d')?></span> </h3>
					<br />
					
					
					<table id="example" class="display table-hover table-bordered table-striped table-responsive" style="width:100%;">
						<thead>
							<tr class="bg-success"> 
								<th>S.L</th>
								<th>Member A/C</th>
								<th>Invoice Date</th>
								<th>Narration</th> 
								<th>Credit</th> 
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php	
											
						$query="SELECT * FROM `subscription_fees` where invoice_date like '$from%'";						
						$results=$db->select($query);
						$id=0; 
						if ($results){	 
						
							while($rs=$results->fetch_assoc()){
							$id++;
						
							?>	 					
							<tr> 
								<td><?php echo $id; ?></td>	
								<td><?php echo $rs['members_id']; ?> </td>
								<td><?php echo $rs['invoice_date']; ?> </td>
								<td><?php echo $rs['narration']; ?> </td> 
								<td><?php echo $rs['credit_amount'] ; ?>.00</td> 
								<td>
								<a href="edit_gm_entrysub.php?id='<?php echo $rs['id']; ?>'" class="btn btn-warning">Edit </a>
								<a href="gm_voucher_print.php?gmvid='<?php echo $rs['id']; ?>'" target="blank" class="btn btn-success">Recipt </a>
								</td>
							</tr>
							</form> 
							
							<?php }?>
							<?php } else{?>
							<div class="bg-danger well text-center"> <h3 style="color:red;"> No Data Found</h3></div>
							<?php }  ?>							
						
							
							
						</tbody>
						
					</table>
				</div>
			 </div>
		</section>
		<!-- End Main Area -->
		
<?php include("inc/footer.php"); ?> 