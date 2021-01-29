<?php include("inc/header.php"); ?>  
	

<?php
error_reporting(0);
	if (isset($_POST['submit'])){
		$member_code	= $_POST['member_code'];
		$from 			= $_POST['from'];
		$to 			= $_POST['to'];
	}

?>

		<!-- Main Area -->
		<section class="add_new_member ">
		<button onclick="history.go(-1);" class="btn btn-warning">Previous Page </button>
			 <div class="container">
				
				<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
				
					<h4 class="text-center"> <span style="color:green; font-weight:bold;">Members Individual Ledger  
					</span> <span style="color:red;font-weight:bold;">
					
					</span> </h4>
					<br>	
					<table class="display table-striped table-bordered table-responsive text-left" style="width:100%;">
					<tbody>
					
					<?php	
						if ($member_code==true){
						//retrive 3 table data in this query and show by month 
						$query="SELECT * FROM members WHERE member_code='$member_code'";
						$results=$db->select($query);
						$id=0; 
						if ($results){	
						?>
						<?php							
							while($rs=$results->fetch_assoc()){
							$id++;
							?>
						<tr class="bg-success">
							<td><b>Member A/C:</b></td>	
							<td><?php echo $rs['member_code']; ?></td>
							<td><b>Name:</b></td>
							<td><?php echo $rs['First_name'].' '.$rs['Last_name']; ?></td>							
							<td>Fixed Subscription: <?php echo $rs['fixed']; ?>.00</td>
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
					
					<table id="example" class="display table-striped table-bordered table-responsive" style="width:100%;">
						<thead>
							<tr class="bg-success">
								<th>S.L</th>
								<th>Invoice No.</th>
								<th>Invoice Date</th>
								<th>Particular</th>
								<th>Debit</th>
								<th>Credit</th>
								<th>Balance</th>
								<th class="ac_display">Action</th>
								
							
								
							</tr>
						</thead>
						<tbody>
						
					<!--Start Opening Balance-->
					<?php 
					$query ="select 
					concat(sum(debit_amount-credit_amount)) as opbalance
					from subscription_fees 
					where 
					invoice_date 
					between '2000-01-01' AND date_sub('$from', INTERVAL 1 DAY) 
					AND members_id='$member_code' "; 
					  
					  $results=$db->select($query); 
						if ($results){
							
							while($rs=$results->fetch_assoc()){ 
						 
							 $balance	=$rs['opbalance']; 
						  
					?>
					
						<tr>
								<td>--</td>	
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
					<!---->
							
						<?php 
						
						$query="SELECT * FROM `subscription_fees` 
						where members_id='$member_code' 
						and invoice_date>= '$from' and invoice_date<= '$to' "; 
						
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
								<td><?php 
								$inv='MR-GM-';
								echo $inv.$rs['id']; 
								
								?> </td>	
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
								<td>
								<a href="edit_gm_entrysub.php?id='<?php echo $rs['id']; ?>'" class="btn btn-warning ac_display">Edit</a>
								<a href="gm_voucher_print.php?gmvid='<?php echo $rs['id']; ?>'" target="blank"class="btn btn-success ac_display">Recipt</a>
								</td>								
									
							</tr>
							 
							<?php }?>
							<?php } else{?>
							<div class="well text-center"> <h3> No Data Found</h3></div>
							<?php }  ?>								
						
							
							
						</tbody>
						<!--<tfoot>
						<?php		
						$get_by_month = date("Y-m");
						$query="SELECT SUM(debit_amount) AS debit_amount, SUM(credit_amount) as credit_amount FROM `subscription_fees` where members_id='$member_code' and invoice_date>= '$from' and invoice_date<= '$to'";
						
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
						</tfoot>--> 
					</table>
				</div>
			 </div>
		</section>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
				<br />
					<form action="member_ledeger_pdf.php" method="post" target="blank">
						<input type="hidden" name="member_code" value="<?php echo $member_code; ?> " />
						<input type="hidden" name="from" value="<?php echo $from; ?> " />
						<input type="hidden" name="to" value="<?php echo $to; ?> "/>
						<input type="submit" class="btn btn-danger" name="submit" value="Print Or Download" />
					</form>
					<br />
				</div>
			</div>
		</div>
		<!-- End Main Area -->
		
<?php include("inc/footer.php"); ?> 