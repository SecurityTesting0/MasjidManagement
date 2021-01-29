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
					
					<div class="form-group from_border">
						<h4 class="well text-center"><span style="color:red; font-weight:bold;">  Single Shop</span>  <span style="color:green; font-weight:bold;"> Rent Collection </span></h4>
						  
						    <?php
							$query ="SELECT * FROM masjid_property where id=$rid";
							   
							$results = $db->select($query);

							if ($results){?>
							
							<?php while ($show = $results->fetch_assoc()) {

							?> 
						  <div class="col-xs-6">
							<label for="ex2">Shop ID :  <?php echo $show['Property_id'];?></label>								
						  </div>
						  <div class="col-xs-6">
							<label for="ex2">Shop Name: <?php echo $show['Property_name'];?></label>
							
						  </div>
						  <div class="col-xs-6">
						<?php }?>
						<?php }?>
							  
						  <?php
							$query ="SELECT * FROM shop_rent_collection where shop_id=$rid";
							   
							$results = $db->select($query);

							if ($results){?>
							<?php while ($show = $results->fetch_assoc()) {

							?> 
							
						  <form action="" enctype="">
							  <div class="col-xs-6">
							  <label for="ex2">Payment Month</label>								
									
									  <input type="text" id="ex2" class="form-control" value="
									  <?php 
										$month = $show['for_month'];
										if ($month=='01') {
											echo 'January'; 
										}elseif ($month=='02'){
											echo "February"; 
										}elseif ($month=='03'){
											echo "March"; 
										}elseif ($month=='04'){
											echo "April"; 
										}elseif ($month=='05'){
											echo "May"; 
										}elseif ($month=='06'){
											echo "June"; 
										}elseif ($month=='07'){
											echo "July"; 
										}elseif ($month=='08'){
											echo "August"; 
										}elseif ($month=='09'){
											echo "September"; 
										}elseif ($month=='10'){
											echo "October"; 
										}elseif ($month=='11'){
											echo "November"; 
										} elseif ($month=='12'){
											echo "December"; 
										}
										
									  ?>
									  " > 						
							  </div>
							  
							  <div class="col-xs-6">
								<label for="ex2">Amount</label>
								<input class="form-control" id="ex2" type="text" value="<?php echo $show['payment_amount'];?>">
							  </div>
							  <div class="col-xs-12">
								<label for="ex2">Comments </label>
								<textarea class="form-control" id="ex2" name="comments" type="text"> <?php echo $show['comment_mem'];?> </textarea> 
							  </div>
							 <div class="col-xs-12 margin_top">							
								<input class="form-control btn btn-success" id="ex2" type="submit" value="Collect Shop Rent Now">
							 </div>						 
						 </form>
						 <?php }?>
					<?php }?>
					</div> 
					
			 </div>
		</section>
		<!-- End Main Area -->
<?php include("inc/footer.php"); ?> 