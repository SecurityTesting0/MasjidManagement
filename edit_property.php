
<?php include("inc/header.php"); ?> 


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
							
							$query="Update masjid_property SET 
							Property_id		='$Propertey_id',
							Property_name 	='$Propertey_name',
							rent_t_name		='$rent_t_name',
							Description		='$Description',
							s_mony			='$s_mony',
							Rent			='$Rent'
							where id 		= $rid";
							$results=$db->update($query);
							
							if($results==true){
								echo"<div class='bg-success' style='padding:5px; text-align:center; margin-bottom:20px;'>
								<p> Information Successfully Updated</p>
								<p> <a href='property_details.php'>Click to view</a></p>
								</div>";
							}else{
								echo"You should be checked again";
							}
						}
					?>
					
						<?php
						$query ="SELECT * FROM masjid_property where id=$rid";
						   
						$results = $db->select($query);

						if ($results){?>
						<?php while ($rs = $results->fetch_assoc()) {

						?> 	
	
					<div class="form-group from_border">
						<h4 class="well text-center"><span style="color:red; font-weight:bold;">Update</span> <span style="color:green; font-weight:bold;">  Propertey Information</span></h4>
						  <form action="" method="post" enctype="">	
						  
							  <div class="col-xs-6">
								<label for="ex2">Propertey Id <span style="color:red">*</span></label>
								<input class="form-control" id="ex2" type="text" name="property_id" value="<?php echo $rs['Property_id']; ?>" required>
							  </div>
							  
							  <div class="col-xs-6">
								<label for="ex2">Propertey Name <span style="color:red">*</span></label>
								<input class="form-control" id="ex2" type="text" name="property_name" value="<?php echo $rs['Property_name']; ?>" required>
							  </div>
							  <div class="col-xs-12">
								<label for="ex2">Rent Taker Person Name <span style="color:red">*</span></label>
								<input class="form-control" id="ex2" type="text" name="rent_t_name" value="<?php echo $rs['rent_t_name']; ?>" required>
							  </div>
							  
							 <div class="col-xs-6">
								<label for="ex2">Security Money </label>
								<input class="form-control" id="ex2" type="text" name="s_mony" value="<?php echo $rs['s_mony']; ?>" >
							 </div>	
							 <div class="col-xs-6">
								<label for="ex2">Rent Amount <span style="color:red">*</span></label>
								<input class="form-control" id="ex2" type="text" name="Rent" value="<?php echo $rs['Rent']; ?>" required>
							 </div>	
							 <div class="col-xs-12">
								<label for="ex2">Description </label>
								<textarea class="form-control" id="ex2" rowspan="1" type="text" name="Description" ><?php echo $rs['Description']; ?></textarea> 
							  </div>
							 <div class="col-xs-6 margin_top">							
								<input class="form-control btn btn-success" id="ex2" type="submit" name="submit" value="Update Information">
							 </div>
							 <div class="col-xs-6 margin_top">							
							 
							 </div>
						 
						 </form>
					</div> 
					
						 
						<?php } ?> 	
						<?php } ?> 	
					
			 </div>
		</section>
		<!-- End Main Area -->
		
<?php include("inc/footer.php"); ?> 

