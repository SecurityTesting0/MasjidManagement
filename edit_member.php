<?php include("inc/header.php"); 

?> 


<?php 
		if (empty($_GET['id'])){
		}elseif(!isset($_GET['id']) || $_GET['id'] == NULL){
			echo 'Something went to wrong';
		}else{
				$tid= $_GET['id'];
				$id= preg_replace("/[^0-9a-zA-Z]/", "", $tid);
				$rid = $id;
		}
?>
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
							$fixed					=mysqli_real_escape_string($db->link,$fixed);
							$First_name				=mysqli_real_escape_string($db->link,$First_name);
							$Last_name				=mysqli_real_escape_string($db->link,$Last_name);
							$Mobile_number			=mysqli_real_escape_string($db->link,$Mobile_number);
							$Membership_date		=mysqli_real_escape_string($db->link,$Membership_date);
							$Address				=mysqli_real_escape_string($db->link,$Address);
							$designation			=mysqli_real_escape_string($db->link,$designation);
							
							$query="Update members SET 
							`member_code`				='$member_code',
							`type`						='$type',
							`Committee_m_desigination`	='$designation',
							`commitee_serial`			='$serial',
							`fixed`						='$fixed',
							`ec_sub_fees`				='$ecsub',
							`First_name`				='$First_name',
							`Last_name`					='$Last_name',
							`Mobile_number`				='$Mobile_number',
							`Membership_date`			='$Membership_date',
							`Address`					='$Address',
							`Active_status`				='$Active_status'
							
							where id				=$rid";
							
							$results=$db->update($query);								
							if($results==true){
								echo"
								<div class='bg-success' style='padding:5px; text-align:center; margin-bottom:20px;'>
								<p> Information Succesfully Updated</p>
								<p> <a href='viewmembers_active.php'>Click to view</a></p>";
							}else{
								echo"You should be checked again";
							}
						}
					?>
					
					<?php
						$query ="SELECT * FROM members where id=$rid";
						   
						$results = $db->select($query);

						if ($results){?>
						<?php while ($rs = $results->fetch_assoc()) {

						?> 	
					<div class="form-group from_border_3">
						<h4 class="well text-center"><span style="color:red; font-weight:bold;">Add New</span> <span style="color:green; font-weight:bold;"> Member </span></h4>
						  <form action="" method="post" enctype="">
							  <div class="col-xs-4">
								<label for="ex2">Member Code <span style="color:red">*</span></label>
								<input class="form-control" id="ex2" type="text" name="member_code" value="<?php echo $rs['member_code']; ?> " required >
							  </div>
							  <div class="col-xs-3">
								<label for="ex2">Membership Type <span style="color:red">*</span></label>							
								  <select class="form-control" id="sel1" name="type" required>
									<option value="<?php echo $rs['type']; ?>"> <?php echo $rs['type']; ?></option>
									<option value="General Member">General Member</option>
									<option value="Committee Member">Committee Member</option>									
								  </select>
							  </div>
							  <div class="col-xs-4">
								<label for="ex2">Desigination (If E.C Members)</label>							
								  <select class="form-control" id="sel1" name="Committee_m_desigination">
									<option value="<?php echo $rs['Committee_m_desigination']; ?>"><?php echo $rs['Committee_m_desigination']; ?></option>
									<option value="">None </option>
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
								<input class="form-control" id="ex2" type="text" name="serial"value="<?php echo $rs['commitee_serial']; ?>" >
							  </div>
							  <div class="col-xs-6">
								<label for="ex2">First Name <span style="color:red">*</span></label>
								<input class="form-control" id="ex2" type="text" name="First_name"value="<?php echo $rs['First_name']; ?>" required>
							  </div>
							  <div class="col-xs-6">
								<label for="ex3">Last Name <span style="color:red">*</span></label>
								<input class="form-control" id="ex3" type="text" name="Last_name" value="<?php echo $rs['Last_name']; ?>" required>
							  </div>
							  <div class="col-xs-6">
								<label for="ex2">Mobile Number <span style="color:red">*</span> </label>
								<input class="form-control" id="ex2" type="text" name="Mobile_number" value="<?php echo $rs['Mobile_number']; ?>" required>
							  </div>
							  <div class="col-xs-6" >
								<label for="ex2">Membership Date <span style="color:red">*</span></label>									
								  <div class="form-group">
									<div id="filterDate2">
										<!-- Datepicker as text field -->         
									  <div class="input-group date" data-date-format="dd.mm.yyyy">
										<input  type="text" class="form-control" name="Membership_date" 
										value="<?php echo $rs['Membership_date']; ?>" required>
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
								<textarea class="form-control" id="ex2" name="Address" type="text"><?php echo $rs['Address']; ?></textarea> 
							  </div>
							
							 <div class="col-xs-2 margin_top">							
								<input class="form-control btn btn-info" id="ex2" type="submit" name="submit" value="Update Info">
							 </div>
							 
							 <div class="col-xs-3 margin_top">							
								<div class="form-check-inline">
								  <label class="form-check-label"> 
									<input type="radio" class="form-check-input" name="Active_status" value="1" checked> Active 
									<input type="radio" class="form-check-input" name="Active_status" value="0" > Inactive 
								  </label>
								</div>
							 </div>
							 <div class="col-xs-3">
								<label for="ex2">Fixed Amount <span style="color:red">*</span></label>
								<input class="form-control" id="ex2" type="text" name="fixed" value="<?php echo $rs['fixed']; ?>" required>
							  </div>
							  <div class="col-xs-3">
								<label for="ex2">E.C Sub. Fees</label>
								<input class="form-control" id="ex2" type="text" name="ecsub" value="<?php echo $rs['ec_sub_fees']; ?>" >
							  </div>
						 
						 </form>
						 
					</div> 
					<?php } ?>
					<?php } ?>
			 </div>
		</section>
		<!-- End Main Area -->
	
		
<?php include("inc/footer.php"); ?> 