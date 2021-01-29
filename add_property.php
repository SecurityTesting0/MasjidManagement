
<?php include("inc/header.php"); ?> 
		<!-- Main Area -->
		<section class="add_new_member ">
			 <div class="container">
				<div class="row">	
					<?php 
						if(isset($_POST["submit"])){
							
							$Propertey_id			=$fm->validation($_POST['property_id']);
							$Propertey_name			=$fm->validation($_POST['property_name']);
							$rent_t_name			=$fm->validation($_POST['rent_t_name']);						
							$Description			=$fm->validation($_POST['Description']);						
							$s_mony			        =$fm->validation($_POST['s_mony']);
							$Rent			        =$fm->validation($_POST['Rent']);
							
							$Propertey_id			=mysqli_real_escape_string($db->link,$Propertey_id);
							$Propertey_name			=mysqli_real_escape_string($db->link,$Propertey_name);
							$Description			=mysqli_real_escape_string($db->link,$Description);
							$Rent				    =mysqli_real_escape_string($db->link,$Rent);
							
							$query="INSERT INTO masjid_property(Property_id,Property_name,rent_t_name, Description,s_mony, Rent) values 
							('$Propertey_id','$Propertey_name','$rent_t_name','$Description','$s_mony', '$Rent')";
							$results=$db->insert($query);
							
							if($results==true){
								echo"<script type='text/javascript'>alert('Propertey Added Succesfully')</script></p>";
							}else{
								echo"You should be checked again";
							}
						}
					?>
					<div class="form-group from_border">
						<h4 class="well text-center"><span style="color:red; font-weight:bold;">Add Income Releted</span> <span style="color:green; font-weight:bold;">  Propertey Information</span></h4>
						  <form action="" method="post" enctype="">	
						  
							  <div class="col-xs-6">
								<label for="ex2">Propertey Id <span style="color:red">*</span></label>
								<input class="form-control" id="ex2" type="text" name="property_id" placeholder="Example: 001" required>
							  </div>
							  
							  <div class="col-xs-6">
								<label for="ex2">Propertey Name <span style="color:red">*</span></label>
								<input class="form-control" id="ex2" type="text" name="property_name" placeholder="Example: Shop Name" required>
							  </div>
							  <div class="col-xs-12">
								<label for="ex2">Rent Taker Person Name <span style="color:red">*</span></label>
								<input class="form-control" id="ex2" type="text" name="rent_t_name" placeholder="Example: Mridha Belal Hasnain" required>
							  </div>
							  
							 <div class="col-xs-6">
								<label for="ex2">Security Money </label>
								<input class="form-control" id="ex2" type="text" name="s_mony" placeholder="Example: Shop Name" >
							 </div>	
							 <div class="col-xs-6">
								<label for="ex2">Rent Amount <span style="color:red">*</span></label>
								<input class="form-control" id="ex2" type="text" name="Rent" placeholder="Example: Shop Name" required>
							 </div>	
							 <div class="col-xs-12">
								<label for="ex2">Description </label>
								<textarea class="form-control" id="ex2" rowspan="1" type="text" name="Description" > </textarea> 
							  </div>
							 <div class="col-xs-6 margin_top">							
								<input class="form-control btn btn-success" id="ex2" type="submit" name="submit" value="Save Entry">
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

