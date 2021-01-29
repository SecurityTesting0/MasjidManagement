<?php include("inc/header.php"); ?>  
	

<?php
error_reporting(0);
	if (isset($_POST['submit'])){
		$from 	= $_POST['from'];
		$to 	= $_POST['to'];
	}else{
		echo"No Data Found";
	}

?>
		<!-- Main Area -->
		<section class="add_new_member ">
		<button onclick="history.go(-1);" class="btn btn-warning">Previous Page </button>
			 <div class="container">
				
				<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
				
					<h3 class="text-center"> <span style="text-align:center; color:green; font-weight:bold;">Others Donation Ledger</span> </h3>
					<br />
					<h4 style="text-align:center; font-weight:bold;">
					<span style="text-align:center; color:red; font-weight:bold;">From:</span> <?php echo $from; ?> 
					<span style="text-align:center; color:red; font-weight:bold;"> To: </span><?php echo $to; ?>
					</h4>
					
					
					<?php	
											
						$query="SELECT * FROM `income` where date>= '$from' and date<= '$to' ";						
						$results=$db->select($query);
						$id=0; 
						if ($results){	
						?>
					<table id="example" class="display table table-bordered table-responsive table-striped" style="width:95%;">
						<thead>
							<tr class="bg-success">
								<th>S.L</th>
								<th>Collection Date</th>
								<th>Invoice Date</th>
								<th>Head</th>
								<th>Narration</th>
								<th>Amount</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							
							
							while($rs=$results->fetch_assoc()){
							$id++;
						
							?>	 					
							<tr>
								<td><?php echo $id; ?></td>	
								<td><?php echo $rs['date']; ?> </td>
								<td><?php echo $rs['invoice_date']; ?> </td>
								<td><?php echo $rs['head'] ; ?></td> 
								<td><?php echo $rs['narration']; ?> </td>
								<td><?php echo number_format($rs['amount']); ?>.00 </td>
								<td>
								<a href="edit_friday_income.php?id='<?php echo $rs['id']; ?>'" class="btn btn-warning">Edit</a>
								<a href="donation_voucher_print.php?donvid='<?php echo $rs['id']; ?>'" target="blank"class="btn btn-success">Recipt</a>
								</td>
							</tr>
							</form> 
							
							<?php }?>
							<?php } else{?>
							<div class="well text-center"> <h3> No Data Found</h3></div>
							<?php }  ?>							
						
							
							
						</tbody>
						<tfoot>
						<?php		
						$get_by_month = date("Y-m");
						$query="SELECT SUM(amount) AS amount from `income` where date>= '$from' and date<= '$to'";
						
						$results=$db->select($query);
						$id=0; 
						if ($results){	
						?>
						<?php
							while($rs=$results->fetch_assoc()){
							$id++; 	
							
							?>
							<tr  class="bg-success">
								<th colspan="5" style="text-align:right;">Total=</th>
								<th><?php echo number_format($rs['amount']); ?>.00 </th>							
							</tr>
							<?php }?>
							<?php }?>
						</tfoot>
					</table>
				</div>
			 </div>
		</section>
		<section>
		<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<form action="donation_pdf.php" target="blank" method="post">
							<input type="hidden" name="from" value="<?php echo $from; ?> " />
							<input type="hidden" name="to" value="<?php echo $to; ?> "/>
							<input type="submit" class="btn btn-danger" name="submit" value="Print or Download Report" />
						</form>
						<br />
						<br />
					</div>
				</div>
		</div>
		</section>
		<!-- End Main Area -->
		
<?php include("inc/footer.php"); ?> 