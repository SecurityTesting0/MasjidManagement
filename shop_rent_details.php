<?php include("inc/header.php"); ?> 



		<!-- Main Area -->
		<section class="add_new_member ">
			 <div class="container">
				<div class="row">
				<?php	
						$get_by_month=date("Y-m");
						
						//retrive 2 table data in this query and show by month 
						$query="SELECT * FROM `shop_monthly_report` where Generate_date like '$get_by_month%'";
						$results=$db->select($query);
						
						if ($results){	
						?>
					<h3 class="text-center"> <span style="color:green; font-weight:bold;">Rent Collection 
					</span> <span style="color:red;font-weight:bold;"><?php 
					
					$get_month=date("m");				
					$get_years=date("Y");
					
					if($get_month=='01') {
						echo 'January'.'-'. $get_years;
					}elseif($get_month=='02') {
						echo 'February'.'-'. $get_years; 
					}elseif($get_month=='03') {
						echo 'March'.'-'. $get_years; 
					}elseif($get_month=='04') {
						echo 'April'.'-'. $get_years; 
					}elseif($get_month=='05') {
						echo 'May'.'-'. $get_years; 
					}elseif($get_month=='06') {
						echo 'June'.'-'. $get_years; 
					}elseif($get_month=='07') {
						echo 'July'.'-'. $get_years; 
					}elseif($get_month=='08') {
						echo 'August'.'-'. $get_years; 
					}elseif($get_month=='09') {
						echo 'September'.'-'. $get_years; 
					}elseif($get_month=='10') {
						echo 'October'.'-'. $get_years; 
					}elseif($get_month=='11') {
						echo 'November'.'-'. $get_years; 
					}elseif($get_month=='12') {
						echo 'December'.'-'. $get_years; 
					}
					
					
					
					
					;?> </span> </h3>
					<br>	
					<form action="" method="post"> 
					
	
					<table id="example" class="display" style="width:95%;">
						<thead>
							<tr>
								<th>P/ID</th>			
								<th>Shop Name</th>			
								<th>Renter</th>			
								<th>Rent</th>
								<th>Paid <br />Amount</th>
								<th>Dues</th>
								<th>Blance</th>								
								<th>Status</th>
								<th>Payment Date</th> 
							</tr>
						</thead>
						<tbody>
							<?php
							
							
							while($rs=$results->fetch_assoc()){
							
								$property_id = $rs['Property_id'];
						 
						 
								//End Total Sum results 
								
								$fixed_rent_sum	= $rs['Rent'];
								$paid_amount	= $rs['paid_amount'];
								$dues			= $rs['dues_amount'];
								$blance			= $rs['blance'];
								
							
								//Total calculation 
							
							
							
							?>
							
							<tr>
								<td><?php echo $rs['Property_id']; ?></td>	
								<td><?php echo $rs['Property_name']; ?></td>	
								<td><?php echo $rs['rent_t_name']; ?></td>	
								<td><?php echo $rs['Rent']; ?> </td>
								<td><?php echo $rs['paid_amount']; ?> </td>
								
								<?php
										//Select data for total value sum 
								 
										$queryw="SELECT SUM(Rent) as rent_sum, 
										SUM(paid_amount) as paid_sum, SUM(dues_amount) as dues_sum,SUM(blance)
										as blance_sum FROM `shop_monthly_report` 
										where Property_id=".$rs['Property_id']."";
										
										$results1=$db->select($queryw);
										$id=0; 
										if ($results1){	
										while($rsw=$results1->fetch_assoc()){
											
											
										//Sub Total Sum Results By Property_id
										$fixed_rent		= $rsw['rent_sum'];
										$paid_sum		= $rsw['paid_sum'];
										
										$blance			= $rsw['blance_sum'];
										
										$total_dues 	=$fixed_rent-$paid_sum;	
										$total_blance	=$blance-$total_dues;
										
										$s_total_dues 	=$total_blance-$total_dues;
										
										
								?> 
								<td><?php 
									if ($s_total_dues>0){
										echo $s_total_dues;
									}else{
										echo '0';
									}
								?>	</td>
								<td><?php echo $total_blance;?> </td>
								
								<?php if ($total_blance >= -0) { ?> 
								<td><?php echo "<font style='color:green; font-weight:bold;'> Paid </font> ";?></td>
																
								<?php } else { ?> 
								
								<td><?php echo "<font style='color:red; font-weight:bold;'> Unpaid </font> ";?></td>
								
								<?php } ?>   
							    <td><?php echo $rs['payment_date']; ?> </td> 	
								<?php }?>
								<?php }?>							
							
															
							</tr>
							</form> 
							
							<?php }?>
							<?php }?>
							
							
							
						</tbody>
						<tfoot>
						<?php		
						$get_by_month = date("Y-m");
						$query="SELECT SUM(rent) as sum, 
						SUM(paid_amount) as sum1 FROM generate_shop_rent 
						where`for_month` like '$get_by_month%'";
						
						$results=$db->select($query);
						$id=0; 
						if ($results){	
						?>
						<?php
							while($rs=$results->fetch_assoc()){
							$id++; 						
							?>
							<tr>
								<th colspan="3" style="text-align:right;">Total =</th>
								<th><?php echo $rs['sum']; ?> </th>
								<th><?php echo $rs['sum1']; ?> </th>
								<th><?php 
								
								$payment_amount =$rs['sum'];
								$paid_amount =$rs['sum1'];
								$dues_amount=$payment_amount-$paid_amount; 
								
								echo $dues_amount;

								?> </th>
								
								<th></th>
							</tr>
							<?php }?>
							<?php }?>
							
						</tfoot>
					</table>
					</form> 
					
					
			 </div>
		</section>
		<!-- End Main Area -->
		
<?php include("inc/footer.php"); ?> 