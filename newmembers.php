<?php include("inc/header.php"); ?> 

		<!-- Main Area -->
		<section class="add_new_member ">
			 <div class="container">
				<div class="row">	
					<?php 
						if(isset($_POST["submit"])){
							
							$member_code		=$fm->validation($_POST['member_code']);
							$type				=$fm->validation($_POST['type']);
							$serial				=$fm->validation($_POST['serial']);
							$fixed				=$fm->validation($_POST['fixed']);
							$ecsub				=$fm->validation($_POST['ecsub']);							
							$First_name			=$fm->validation($_POST['First_name']);
							$Last_name			=$fm->validation($_POST['Last_name']);
							$Mobile_number		=$fm->validation($_POST['Mobile_number']);
							$Membership_date	=$fm->validation($_POST['Membership_date']);
							$Address			=$fm->validation($_POST['Address']);
							$Active_status		=$fm->validation($_POST['Active_status']);
							$designation		=$fm->validation($_POST['Committee_m_desigination']); 
							
							
							$member_code			=mysqli_real_escape_string($db->link,$member_code);
							$type					=mysqli_real_escape_string($db->link,$type);
							$serial					=mysqli_real_escape_string($db->link,$serial);
							$fixed					=mysqli_real_escape_string($db->link,$fixed);
							$ecsub					=mysqli_real_escape_string($db->link,$ecsub);
							$First_name				=mysqli_real_escape_string($db->link,$First_name);
							$Last_name				=mysqli_real_escape_string($db->link,$Last_name);
							$Mobile_number			=mysqli_real_escape_string($db->link,$Mobile_number);
							$Membership_date		=mysqli_real_escape_string($db->link,$Membership_date);
							$Address				=mysqli_real_escape_string($db->link,$Address);
							
							$chk="SELECT * FROM `members` WHERE `member_code` LIKE '%$member_code%'";
							$check=$db->select($chk);
							if(($check->num_rows)>0){
								echo "<script type='text/javascript'>alert('Member ID Already Exist')</script>";
							}else{
								$query="INSERT INTO members(member_code,
								type,Committee_m_desigination,commitee_serial,fixed,ec_sub_fees,First_name,Last_name,Mobile_number,
								Membership_date,Address,Active_status) values 
								('$member_code','$type','$designation','$serial','$fixed','$ecsub','$First_name','$Last_name',
								'$Mobile_number','$Membership_date','$Address','$Active_status')";
								$results=$db->insert($query);
								
								if($results==true){
									echo"<p class='well text-center' style='margin:0px auto; color:green;'>Member Added Succesfully</p>";
								}else{
									echo"You should be checked again";
								}
							}
						}
					?>
					<div class="form-group from_border_3">
						<h4 class="well text-center"><span style="color:red; font-weight:bold;">Add New</span> <span style="color:green; font-weight:bold;"> Member </span></h4>
						  <form action="" method="post" enctype="">
							  <div class="col-xs-4">
								<label for="ex2">Member Code <span style="color:red">*</span></label>
								<input class="form-control" id="ex2" type="text" name="member_code" placeholder="Example: A001" required >
							  </div>
							  <div class="col-xs-3">
								<label for="ex2">Membership Type <span style="color:red">*</span></label>							
								  <select class="form-control" id="sel1" name="type" required>
									<option>Select</option>
									<option value="General Member">General Member</option>
									<option value="Committee Member">Committee Member</option>									
								  </select>
							  </div>
							  <div class="col-xs-4">
								<label for="ex2">Desigination (If E.C Members)</label>							
								  <select class="form-control" id="sel1" name="Committee_m_desigination">
									<option value="0">Select</option>
									<option value="Motowalli">Motowalli</option>
									<option value="President">President</option>									
									<option value="Sr. Vice-President">Sr. Vice-President</option>									
									<option value="Vice-President">Vice-President</option>									
									<option value="General Secretary">General Secretary</option>									
									<option value="Join G. Secretary">Join G. Secretary</option>									
									<option value="Cashier">Cashier</option>									
									<option value="Asst. Cashier">Asst. Cashier</option>									
									<option value="Internal Auditor">Internal Auditor</option>									
									<option value="Internal Auditor Member">Internal Auditor Member</option>									
									<option value="Editor">Editor</option>									
									<option value="Publicity Editor">Publicity Editor</option>									
									<option value="Asst. Publicity Editor">Asst. Publicity Editor</option>									
									<option value="Committee Member">Committee Member</option>									
									<option value="Member">Member</option>									
								  </select>
							  </div>
							  <div class="col-xs-1">
								<label for="ex2">Serial</label>
								<input class="form-control" id="ex2" type="text" name="serial"placeholder="Ex: 1">
							  </div>
							  <div class="col-xs-6">
								<label for="ex2">First Name <span style="color:red">*</span></label>
								<input class="form-control" id="ex2" type="text" name="First_name"placeholder="Mridha Belal" required>
							  </div>
							  <div class="col-xs-6">
								<label for="ex3">Last Name <span style="color:red">*</span></label>
								<input class="form-control" id="ex3" type="text" name="Last_name" placeholder="Hasnain" required>
							  </div>
							  <div class="col-xs-6">
								<label for="ex2">Mobile Number <span style="color:red">*</span> </label>
								<input class="form-control" id="ex2" type="text" name="Mobile_number" placeholder="01719180080" required>
							  </div>
							  <div class="col-xs-6" >
								<label for="ex2">Membership Date <span style="color:red">*</span></label>									
								  <div class="form-group">
									<div id="filterDate2">
										<!-- Datepicker as text field -->         
									  <div class="input-group date" data-date-format="dd.mm.yyyy">
										<input  type="text" class="form-control" name="Membership_date" placeholder="dd-mm-yyyy" required>
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
								<label for="ex2">Address </label>
								<textarea class="form-control" id="ex2" name="Address" type="text"> </textarea> 
							  </div>
							
							 <div class="col-xs-2 margin_top">							
								<input class="form-control btn btn-success" id="ex2" type="submit" name="submit" value="Add Member">
							 </div>
							 <div class="col-xs-2 margin_top">							
								<input class="form-control btn btn-danger" id="ex2" type="reset" value="Reset">
							 </div>
						 
							 
							 <div class="col-xs-3 margin_top">							
								<div class="form-check-inline">
								  <label class="form-check-label"> 
									<input type="radio" class="form-check-input" name="Active_status" value="1" checked> Active 
									<input type="radio" class="form-check-input" name="Active_status" value="0" > Inactive 
								  </label>
								</div>
							 </div>
							 <div class="col-xs-2">
								<label for="ex2">Sub. Fees <span style="color:red">*</span></label>
								<input class="form-control" id="ex2" type="text" name="fixed" placeholder="Example: 500" required>
							 </div>
							 <div class="col-xs-2">
								<label for="ex2">EC Sub. Fees</label>
								<input class="form-control" id="ex2" type="text" name="ecsub" placeholder="Example: 500">
							 </div>
						 
						 </form>
						 
						 
					</div> 
					
			 </div>
		</section>
		<!-- End Main Area -->
	
		
<?php include("inc/footer.php"); ?> 