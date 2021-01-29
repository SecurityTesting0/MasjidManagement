<?php include("inc/header.php"); ?> 

		<!-- Main Area -->
		<section class="add_new_member ">
			 <div class="container">
				
				<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<br />
					<h4 class="text-center"> <span style="color:green; font-weight:bold;">Report View Individual Shop Renter  </span></h4>
					<br />
					
					
					
				
						<form action="shop_rent_single_report_fronpage_view.php" method="post">
							
							<div class="input-group col-12 col-sm-12">
							
							
							<select class="select2 form-control col-xs-12" multiple="multiple" data-placeholder="Example: 001" 
									data-dropdown-css-class="select2-purple" name="shop_id" required>
									 
									 <?php		
										$query="SELECT * FROM masjid_property";
										$results=$db->select($query);
										$id=0; 
										if ($results){	
										?>
										
										<?php
										while($mmcode=$results->fetch_assoc()){
										$id++; 
										
										?>
									  <option value="<?php echo $mmcode['Property_id'];?> " >
									  
									<?php echo $mmcode['Property_id'].'-'. $mmcode['rent_t_name'];?>
									  
									  </option>
									
									<?php } ?>
									<?php } ?>		
							</select> 
							</div>
							<div class="col-xs-12">
								<label for="ex2">From:<span style="color:red">*</span></label>
								<div class="form-group">
									<div id="filterDate2">
										<!-- Datepicker as text field -->         
									  <div class="input-group date" data-date-format="dd.mm.yyyy">
										<input  type="text" class="form-control" name="from" placeholder="Example: 2020-01-01" required>
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
								<label for="ex2">To:<span style="color:red">*</span></label>
								<div class="form-group">
									<div id="filterDate2">
										<!-- Datepicker as text field -->         
									  <div class="input-group date" data-date-format="dd.mm.yyyy">
										<input  type="text" class="form-control" name="to" placeholder="Example: 2020-01-01" required>
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
							 <div class="col-xs-12 margin_top">							
								<input class="form-control btn btn-success" id="ex2" type="submit" name="submit" value="Submit Query">
							 </div>
						</form>
					
				</div>
				
				</div>
				</div>
			 </div>
		</section>
		<!-- End Main Area -->
		
<?php include("inc/footer.php"); ?> 