<?php include("inc/header.php");
	error_reporting(0); 
 ?> 
		<!-- Main Area -->
		<section class="main_area main_area_text">
			 <div class="container">
				<div class="row">
				
				
					<?php 
						if(isset($_POST["submit"])){
							$dm=date("Y-m");
							$chk="SELECT * FROM `shop_rent` WHERE `gn_date` LIKE '$dm%'";
							$check=$db->select($chk);
							if(($check->num_rows)>0){
								echo "<script type='text/javascript'>alert('Already Generated!')</script>";
							}else{
							
							$query ="SELECT `Property_id`, `Rent` FROM `masjid_property`";
							$results=$db->select($query);
								while($data=$results->fetch_assoc()){
								$shop_id		=$data['Property_id'];
								$debit_amount	=$data['Rent'];
								
								//$chk="";
								$ins="INSERT INTO `shop_rent` (`shop_id`, `invoice_no`, `invoice_date`, 
								`debit_amount`, `credit_amount`, `blance`,
								`narration`, `paid_id`, `dues_id`, `blance_id`, `gn_date`) 
								VALUES ('$shop_id','0',current_date(),
								'$debit_amount','0','0','Monthly Rent','0','0','0',current_date())";
								$insdata=$db->insert($ins);							}
							if ($insdata) {
								echo "<script type='text/javascript'>alert('Subsciption Fees Successfully Generated')</script> ";
							}
							
							
						}
						}
					?>
				
				
					<div class="col-md-12">
							<div class="generate"> 
								<h3>Generate Monthly Subsciption Fees</h3>
								<form action="" method="post">
									<div class="col-xs-12 margin_top">							
										<input class="form-control btn btn-success" id="ex2" name="submit" type="submit" value="Click to Generate Fees">
									</div>						
								</form>
							</div>
					</div>
				</div>
			 </div>
		</section>
		<!-- End Main Area -->
		

<?php include("inc/footer.php"); ?> 