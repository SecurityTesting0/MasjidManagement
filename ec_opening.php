
<?php include("inc/header.php");
	error_reporting(0);
 ?> 
		<!-- Main Area -->
		<section class="add_new_member ">
			 <div class="container">
				<div class="row">	
					<?php 
						if(isset($_POST["submit"])){	
							
							$memac					=$fm->validation($_POST['memac']);
							$date					=$fm->validation($_POST['date']);						
							$debit					=$fm->validation($_POST['debit']);
							$credit					=$fm->validation($_POST['credit']);
							$narration				=$fm->validation($_POST['narration']);
							
							$memac					=mysqli_real_escape_string($db->link,$memac);
							$credit					=mysqli_real_escape_string($db->link,$credit);							
							$debit					=mysqli_real_escape_string($db->link,$debit);							
							$narration				=mysqli_real_escape_string($db->link,$narration);
							
							$dcres +=$debit-$credit;
							
							$chk="SELECT * FROM `ecms_fees` WHERE `members_id` LIKE '$memac%'";
							$check=$db->select($chk);
							if(($check->num_rows)>0){
								echo "<div class='well text-center' style='background-color:red;'>Balance Already Open </div>";
							}else{
								$query ="INSERT INTO `ecms_fees`(`members_id`, `invoice_no`, `invoice_date`,
								`debit_amount`, `credit_amount`, `blance`, `narration`, 
								`paid_id`, `dues_id`, `blance_id`, `gn_date`) 
								VALUES ('$memac','0','$date','$debit','$credit',
								'$dcres','$narration','0','0','0','0000-00-00')"; 
								$results=$db->insert($query);
								if ($results=true){ 
									echo"<p class='well text-center' style='margin:0px auto; color:green;'>
									Balance Open Successfull Completed</p>";
								}else {
									echo "Somthing Wrong";
								}
							}								
						}								
					?>
					<div class="form-group from_border">
						<h4 class="well text-center"><span style="color:red; font-weight:bold;">Enter E.C Members Opening</span> <span style="color:green; font-weight:bold;">Balance</span></h4>
						  <form action="" method="post" enctype="">
							  <div class="col-8 col-sm-8">
								<div class="form-group">
								  <label>Select Members A/C:<span style="color:red">*</span></label>
								  <div class="select2-purple">
									<select class="select2" multiple="multiple" data-placeholder="Example: 001" 
									data-dropdown-css-class="select2-purple" name="memac" style="width: 100%;" required>
									 
									 <?php		
										$query="SELECT * FROM members where commitee_serial >=1";
										$results=$db->select($query);
										$id=0; 
										if ($results){	
										?>
										
										<?php
										while($mmcode=$results->fetch_assoc()){
										$id++; 
										
										?>
									  <option value="<?php echo $mmcode['member_code'];?> " >
									  
										<?php 
										$status= $mmcode['Active_status']; 
										if($status==0){
											echo $mmcode['member_code'].'-'. $mmcode['First_name'].' '. $mmcode['Last_name'].'('.$mmcode['Committee_m_desigination'].')'.'(Inactive)';
										}else{
										echo $mmcode['member_code'].'-'. $mmcode['First_name'].' '. $mmcode['Last_name'].'('.$mmcode['Committee_m_desigination'].')';
										}
										?>
									  
									  </option>
									
									<?php } ?>
									<?php } ?>									
									</select>

								  </div>
								</div>
								<!-- /.form-group -->
							  </div>
							  
							   <div class="col-xs-4" >
								<label for="ex2">Select Date <span style="color:red">*</span></label>									
								  <div class="form-group">
									<div id="filterDate2">
										<!-- Datepicker as text field -->         
									  <div class="input-group date" data-date-format="dd.mm.yyyy">
										<input  type="text" class="form-control" name="date" placeholder="dd-mm-yyyy" required>
										<div class="input-group-addon" >
										  <span class="glyphicon glyphicon-th"></span>
										</div>
									  </div>										  
									  <script type="text/javascript">										  
									   $('.input-group.date').datepicker({format: "dd.mm.yyyy"}); 
									  </script>
									</div>    
								  </div>															
							  </div>
							  
							  <div class="col-xs-12">
								<label for="ex2">Narration </label>
								<textarea class="form-control" rows="5" id="ex2" name="narration" type="text"> </textarea> 
							  </div>
							  <div class="col-xs-6">
								<label for="ex2">Debit <span style="color:red">*</span></label>
								<input class="form-control" id="ex2" type="number" name="debit" placeholder="500" required>
							  </div>
							  <div class="col-xs-6">
								<label for="ex2">Credit: <span style="color:red">*</span></label>
								<input class="form-control" id="ex2" type="number" name="credit" placeholder="500" required>
							  </div> 
							 <div class="col-xs-6 margin_top">							
								<input class="form-control btn btn-success" id="ex2" name="submit" type="submit" value="Save Entry">
							 </div>
							 <div class="col-xs-6 margin_top">							
								<input class="form-control btn btn-warning" id="ex2" type="reset" value="Reset">
							 </div>
						 
						 </form>
					</div> 
					
			 </div>
		</section>
		<!-- End Main Area -->
			

<?php include("inc/footer.php"); ?> 