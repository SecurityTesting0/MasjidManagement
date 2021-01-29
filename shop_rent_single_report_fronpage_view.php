<?php include("inc/header.php"); ?>  
	

<?php
 error_reporting (0);
	if (isset($_POST['submit'])){
		$shop 	= $_POST['shop_id'];
		$from 	= $_POST['from'];
		$to 	= $_POST['to'];
	}

?>



<style type="text/css">
			
	@page { 
	size: A4;
	margin: 2cm;
	right:0; 
	}
	
	@media print{
		body *{
			visibility:hidden; 
		}
		.add_new_member, .add_new_member *{
			visibility:visible; 
			margin:0px auto; 
		}		
		.print_header, .print_header *{
			display:block;
			visibility:visible; 
		}
		.add_new_member {
			position:absolute; 
			right:0px;
			top:110px;
			left:0px;
			font-size:14px; 
		}		
		.print_header{
			position:absolute; 
			top: 0px;
			right:0px; 
			left:0px; 
			text-align:center; 
		}
		.ac_display {
			visibility:hidden;
			display:none; 
		}
	}
	

</style>
		<!-- Main Area -->
		<section class="add_new_member ">
			 <div class="container">
				
				<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
				
					<h4 class="text-center"> <span style="color:green; font-weight:bold;">Report View Individual Shop Renter  
					</span> <span style="color:red;font-weight:bold;">
					
					</span> </h4>
					<br>	
					<table class="display table-bordered table-responsive table-striped text-left" style="width:100%;">
					<tbody>
					
					<?php	
						if ($shop==true){
						//retrive 3 table data in this query and show by month 
						$query="SELECT * FROM masjid_property WHERE Property_id='$shop'";
						$results=$db->select($query);
						$id=0; 
						if ($results){	
						?>
						<?php							
							while($rs=$results->fetch_assoc()){
							$id++;
							?>
						<tr>
							<td><b>Propery ID:</b></td>	
							<td><?php echo $rs['Property_id']; ?></td>
							<td><b>Property Name:</b></td>
							<td><?php echo $rs['Property_name']; ?></td>
							<td><b>Renter Name:</b></td>
							<td><?php echo $rs['rent_t_name']; ?></td>
							<td><b>Fixed-Rent:</b> </td>
							<td><?php echo number_format($rs['Rent']); ?></td>
						</tr>
						<tr>
							<td><b>From: </b></td>	
							<td style='text-align:left;'><?php echo $from; ?></td>
							<td><b>To:</b></td>
							<td style='text-align:left;'><?php echo $to; ?></td>
						</tr>
						
						
						<?php }?> 						
						<?php }?> 
						</form> 
					</table>
					<br />
					<br />
					
					<table id="example" class="display table-bordered table-responsive table-striped" style="width:100%;">
						<thead>
							<tr class="bg-success">
								<th>S.L</th>
								<th>Invoice Date</th>
								<th>Particular</th>
								<th>Debit</th>
								<th>Credit</th>
								<th>Balance</th> 
								<th class="ac_display">Action</th> 
							</tr>
						</thead>
						<tbody> 
						
						
						<?php 
					$query ="select 
					concat(sum(debit_amount-credit_amount)) as opbalance
					from shop_rent 
					where 
					invoice_date 
					between '2000-01-01' AND date_sub('$from', INTERVAL 1 DAY) 
					AND shop_id='$shop'
					"; 
					  
					  $results=$db->select($query); 
						if ($results){
							
							while($rs=$results->fetch_assoc()){ 
						 
							 $balance	=$rs['opbalance']; 
						  
					?>
					
						<tr>
								<td>--</td>	
								<td>--</td>
								<td>Opening Balance</td> 
								
								<td>
								<?php 
									 if($balance >=1){
										echo number_format($balance);
									 }else {
										 echo '0';
									 }
								?>.00</td>
								<td> 
								<?php 
									 if($balance <=0){
										echo number_format($balance);
									 }else {
										 echo '0';
									 }
								?>.00 </td>
								<td>
									<?php echo number_format($balance); ?>.00
								</td>													
									
							</tr>
							<?php }?> 
							<?php }?> 
					 
					<!--End Opening balance-->
						
						<?php	
						//retrive 3 table data in this query and show by month
						
						$query="SELECT * FROM `shop_rent` where shop_id='$shop' and invoice_date>= '$from' and invoice_date<= '$to' ";
						
						
						
						$results=$db->select($query);
						$id=0; 
						if ($results){	
						?>
							<?php
							
							
							while($rs=$results->fetch_assoc()){
							$id++;
						
							?>	 					
							<tr>
								<td><?php echo $id; ?></td>	
								<td><?php echo $rs['invoice_date']; ?> </td>
								<td><?php echo $rs['narration'] ; ?></td> 
								<td><?php echo number_format($rs['debit_amount']); ?>.00 </td>
								<td><?php echo number_format($rs['credit_amount']); ?>.00 </td>
								<td>
								<?php 
								$debit		=$rs['debit_amount'];
								$credit 	=$rs['credit_amount'];
								
								$balance 	+=$debit-$credit;
								 echo number_format($balance); 

								?>.00
								</td>
								<td class="ac_display"> 
								<a href="edit_collectshprent.php?id='<?php echo $rs['id']; ?>'" class="btn btn-warning ac_display">Edit</a>
								<a href="shop_voucher_print.php?spvid='<?php echo $rs['id']; ?>'" target="blank" class="btn btn-success ac_display">Recipt</a>
								</td>
									
							</tr>
							
							<?php }?>
							<?php } else{?>
							<div class="well text-center"> <h3> No Data Found</h3></div>
							<?php }  ?>								
						
							
							
						</tbody>
						<tfoot>
						<?php		
					
						$query="SELECT SUM(debit_amount) AS debit_amount, 
						SUM(credit_amount) as credit_amount
						FROM `shop_rent` where shop_id='$shop' 
						and invoice_date>= '$from' and invoice_date<= '$to'";
						
						$results=$db->select($query);
						$id=0; 
						if ($results){	
						?>
						<?php
							while($rs=$results->fetch_assoc()){
							$id++; 	
							
							?>
							<tr class="bg-success">
								<th colspan="3" style="text-align:right;">Total =</th>							
								<th><?php echo number_format($rs['debit_amount']); ?>.00 </th>
								<th><?php echo number_format($rs['credit_amount']); ?>.00 </th>							
							</tr>
							<?php }?>
							<?php }?>
							<?php }?> 
						</tfoot>
					</table>
				</div>
			 </div>
		</section>
		<button class="btn btn-warning" onclick="window.print();"> Print Report</button>
		<!-- End Main Area -->
		
<?php include("inc/footer.php"); ?> 