<?php include("inc/header.php"); ?> 
		<!-- Main Area -->
		<section class="add_new_member ">
			 <div class="container">
				<div class="row">	
					
					<div class="form-group from_border">
						<h4 class="well text-center"><span style="color:red; font-weight:bold;">Entry Friday</span> <span style="color:green; font-weight:bold;">  Income </span></h4>
						  <form action="" enctype="">
							  <div class="col-xs-12">
								<label for="ex2">Collection Date</label>
								<input class="form-control" id="ex2" type="text" placeholder="01-01-2020">
							  </div>
							   <div class="col-xs-6">
								<label for="sel1">Select Month:</label>
								  <select class="form-control" id="sel1">
									<option>Select</option>
									<option>January</option>
									<option>February</option>
									<option>March</option>
									<option>April</option>
									<option>May</option>
									<option>June</option>
									<option>July</option>
									<option>August</option>
									<option>September</option>
									<option>October</option>
									<option>November</option>
									<option>December</option>
								  </select>
							  </div>
							  <div class="col-xs-6">
								<label for="ex2">Amount</label>
								<input class="form-control" id="ex2" type="text" placeholder="500">
							  </div>
							  
							  <div class="col-xs-12">
								<label for="ex2">Comments </label>
								<textarea class="form-control" id="ex2" type="text"> </textarea> 
							  </div>
							
							 <div class="col-xs-6 margin_top">							
								<input class="form-control btn btn-success" id="ex2" type="submit" value="Save Entry">
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