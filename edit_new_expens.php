
<?php include("inc/header.php"); ?> 
		<!-- Main Area -->
		<section class="add_new_member ">
			 <div class="container">
				<div class="row">	
					<?php 
						if(isset($_POST["submit"])){	
							
							$head					=$fm->validation($_POST['head']);							
							$narration				=$fm->validation($_POST['narration']);
							$amount					=$fm->validation($_POST['amount']);
							 
							$date 					=date("Y-m-d");
							$head					=mysqli_real_escape_string($db->link,$head);
							$narration				=mysqli_real_escape_string($db->link,$narration);	
							$amount					=mysqli_real_escape_string($db->link,$amount);									
							
							$query ="INSERT INTO `expens`
							(`head`, `narration`, `amount`,`date`,`salary_date`,`head_id`) 
							VALUES ('$head','$narration','$amount','$date','0000-00-00','0')";
							$results=$db->insert($query);
							if($results==true){
								echo"<p class='well text-center' style='margin:0px auto; color:green;'>Payment Successfully Completed</p>";
							}else{
								echo"You should be checked again";
							}
						   }
					?>
					<div class="form-group from_border">
						<h4 class="well text-center"><span style="color:red; font-weight:bold;">Entry </span> <span style="color:green; font-weight:bold;">  Expens </span></h4>
						  <form action="" method="post" enctype="">
							  <div class="col-12 col-sm-12">
								<div class="form-group">
								  <label>Select Head <span style="color:red">*</span></label>
								  <div class="select2-purple">
									<select class="select2" multiple="multiple" data-placeholder="Type Head Name" 
									data-dropdown-css-class="select2-purple" name="head" style="width: 100%;" required>
									 
									<?php		
									$query="SELECT * FROM expens_head";
									$results=$db->select($query);
									$id=0; 
									if ($results){	
									?>
									<?php
									while($rs=$results->fetch_assoc()){
									$id++; 						
									?> 
									 <option value="<?php echo $rs['expense_head'];?> " >								 
									 								 
									  
									<?php echo $rs['expense_head']; ?>									  
									  </option>
									
									<?php } ?>
									<?php } ?>									
									</select>

								  </div>
								</div>
								<!-- /.form-group -->
							  </div>
							  
							  <div class="col-xs-12">
								<label for="ex2">Narration </label>
								<textarea class="form-control" rows="5" id="ex2" name="narration" type="text"> </textarea> 
							  </div>
							  <div class="col-xs-12">
								<label for="ex2">Amount <span style="color:red">*</span></label>
								<input class="form-control" id="ex2" type="number" name="amount" placeholder="500" required>
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