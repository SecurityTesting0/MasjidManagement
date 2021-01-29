<?php include("inc/header.php"); ?> 
		<!-- Main Area -->
		<section class="main_area main_area_text">
			 <div class="container">
				<div class="row">
				
					<?php 
				
				
				
						if(isset($_POST["submit"])){
							$dm=date("Y-m");
							$chk="SELECT * FROM `generate_fees` WHERE `date` LIKE '$dm%'";
							$check=$db->select($chk);
							if(($check->num_rows)>0){
								echo "Already Generated!";
							}else{
							
							$query ="SELECT `member_code`, `fixed` FROM `members`";
							$results=$db->select($query);
							while($data=$results->fetch_assoc()){
								$member=$data['member_code'];
								$amount=$data['fixed'];
								
								//$chk="";
								$ins="INSERT INTO `generate_fees` (`id`, `member_code`, `payment_amount`, `payment_status`, `date`) VALUES (NULL, '$member', '$amount', '0', current_timestamp()) ";
								$insdata=$db->insert($ins);
								
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