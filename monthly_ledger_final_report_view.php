<?php include("inc/header.php"); ?>  
	

<?php

	if (isset($_POST['submit'])){
		$from 	= $_POST['from'];
		$to 	= $_POST['to'];
	}else{
		echo"No Data Found";
	}

?> 
	<!-- Main Area -->
		<section class="add_new_member " >
		<button onclick="history.go(-1);" class="btn btn-warning">Previous Page </button>
			 <div class="container">
				<div class="row">
				<div class="col-sm-10 col-sm-offset-1 print_area">
				
					<h4 class="text-center"> <span style="text-align:center; 
					color:green; font-weight:bold;">Income and Expenditure Accounts Report</span> </h4>
					<br />
					<h4 style="text-align:center; font-weight:bold;">
					<span style="text-align:center; color:red; font-weight:bold;">From:</span> <?php echo $from; ?> 
					<span style="text-align:center; color:red; font-weight:bold;"> To: </span><?php echo $to; ?>
					</h4>
					<br />
					
					<div class="text-center"> 
					<h3> Income </h3>
					
					</div>
					
					<table class="table table-striped table-bordered table-responsive text-left" style="width:100%; margin:0px auto;;">
						<thead>
							<tr class="bg-success">
								<th style="width:50px;">S.L</th> 
								<th>Particular</th>
								<th style="width:150px;">Amount</th>
							</tr>
						</thead>
						<tbody>
							<!--EC Members Subscription Table --> 
							  	<?php
								
									$query="SELECT(SELECT SUM(credit_amount) 
										FROM ecms_fees where invoice_date>='$from' and invoice_date<='$to') AS ecms_fees_total,
									(SELECT SUM(credit_amount) 
										FROM subscription_fees where invoice_date>='$from' and invoice_date<='$to') AS Members_Fees_Total, 
									(SELECT SUM(credit_amount) 
										FROM shop_rent where invoice_date>='$from' and invoice_date<='$to') AS shop_rent_total,
									(SELECT SUM(amount) 
										FROM income where date>='$from' and date<='$to') AS Donation_Total";	
									
									$results=$db->select($query);
									$id=0; 
									if ($results){	
									?>
									<?php
									while($rs=$results->fetch_assoc()){
									$id++;
									?>
								<tr>
									<td> 1 </td>
									<td> EC. Members Subscription </td>
									<td><?php echo number_format($rs['ecms_fees_total']); ?>.00</td>							
								</tr> 
								<tr>
									<td> 2 </td>
									<td> Members Subscription </td>
									<td><?php echo number_format($rs['Members_Fees_Total']); ?>.00</td>							
								</tr> 								
								<tr>
									<td> 3 </td>
									<td> Shop Rent </td>
									<td><?php echo number_format($rs['shop_rent_total']); ?>.00</td>							
								</tr> 
								<tr>
									<td> 4 </td>
									<td> Donation </td>
									<td><?php echo number_format($rs['Donation_Total']); ?>.00</td>							
								</tr>
								<?php }?>
								<?php }?> 
						</tbody> 
					</table>
					
					
					<!-- Start Expens -->
					
					<div class="text-center"> 
					<h3> Expendetures </h3>
					
					</div> 
						 <!--Expens Rent Table --> 
						 			
							
						
					
					<table class="table table-striped table-bordered table-responsive text-left" style="width:100%; margin:0px auto;;">
						<thead>
							<tr class="bg-success">
								<th style="width:50px;">S.L</th> 
								<th>Particular</th>
								<th style="width:150px;">Amount</th>
							</tr>
						</thead>
						<tbody>
						
							
							<?php 
								$query="SELECT SUM(salary_amount) as amount FROM `salary_payment` where
								invoice_date>= '$from' and invoice_date<= '$to' ";						
								$sresults=$db->select($query); 
								if ($sresults){ 
									while($srs=$sresults->fetch_assoc()){
								
								?>	
							<tr>
								<td>1</td>
								<td>Employee Salary  </td>
								<td><?php echo number_format($srs['amount']); ?>.00</td>
							</tr>
							<?php } ?>
							<?php } ?>
							
							<?php
								$chk="SELECT * FROM expens_head";
								$check=$db->select($chk);
								$id=1; 
								if($check){
								while ($chrs=$check->fetch_assoc()){
								$id++;
								$head_id=$chrs['id'];
									
								$query="SELECT SUM(amount) as amount FROM `expens` where head_id=$head_id 
								and date>= '$from' and date<= '$to' ";						
								$results=$db->select($query);
								
								if ($results){	
								?>
								<?php
								while($rs=$results->fetch_assoc()){
								
								?>	 					
							<tr>
								<td><?php echo $id; ?></td>	 
								<td><?php echo $chrs['expense_head'] ; ?></td> 
								<td><?php echo number_format($rs['amount']); ?>.00 </td>
							</tr>
								
								<?php }?>
								<?php } else{?>
								<div class="well text-center"> <h3> No Data Found</h3></div>
								<?php }  ?>	
								<?php }?>
								<?php }?>
						</tbody>
						<tfoot>
					
							
					<!-- End Expens -->
							
							<tr>

							<td colspan="2" class="bg-danger text-right">
							Total Income =<br>
							Total Expenditures =<br>
							Profit Or Loss = 
							</td>
								<td class="bg-danger"><span style="font-weight:bold; backround:green;">
								<?php
								
									function income($db,$from,$to){
										$query ="SELECT(SELECT SUM(credit_amount) 
												FROM ecms_fees where invoice_date>='$from' and invoice_date<='$to') AS ecms_fees_total,
											(SELECT SUM(credit_amount) 
												FROM subscription_fees where invoice_date>='$from' and invoice_date<='$to') AS Members_Fees_Total, 
											(SELECT SUM(credit_amount) 
												FROM shop_rent where invoice_date>='$from' and invoice_date<='$to') AS shop_rent_total,
											(SELECT SUM(amount) 
												FROM income where date>='$from' and date<='$to') AS Donation_Total";
										$results = $db->select($query);
										if ($results){
											while ($row=$results->fetch_assoc()) {
												
											$subtotal=$row['ecms_fees_total']+$row['Members_Fees_Total']+$row['shop_rent_total']+$row['Donation_Total'];
											return $subtotal;
										 
											}
											
										}
									}
									function expnes($db,$from,$to){
										$query="SELECT (SELECT SUM(amount) AS amount from `expens` 
										where date>= '$from' and date<= '$to') as expense,
										(SELECT SUM(salary_amount) as amount FROM `salary_payment` where
										 invoice_date>= '$from' and invoice_date<= '$to' ) as salary";
										$results = $db->select($query);
										if ($results){
											while ($row=$results->fetch_assoc()) { 
												$subtotal=$row['expense']+$row['salary'];
												return $subtotal; 
											} 
										}
									}
									
									$in=income($db,$from,$to);
									$ex=expnes($db,$from,$to);
									
									 $total =$in-$ex; 
										echo number_format($in).".00<br />\n";
										echo number_format($ex).".00<br />\n";
										echo number_format($total); 
									
									
								?>.00 </span>
								</td>
								
							</tr>
							
						 <!--End Expens Rent Table --> 
						</tbody> 
						
						
					</table>
					
					
					
					
					
							
					
				</div>
			 </div>
		
		</section>
		
		<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
					<br />
						<form action="final_summery_pdf.php" target="blank" method="post">
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