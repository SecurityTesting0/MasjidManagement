
<?php include("inc/header.php"); ?> 
		<!-- Main Area -->
		<section class="add_new_member ">
			 <div class="container">
				<div class="row">	
					<?php 
						if(isset($_POST["submit"])){	
							
							$shop_id				=$fm->validation($_POST['shop_id']);
							$date					=$fm->validation($_POST['date']);
							$invoice_date			=date("Y-m-d"); 
							$credit					=$fm->validation($_POST['credit']);
							$narration				=$fm->validation($_POST['narration']);
							
							$shop_id				=mysqli_real_escape_string($db->link,$shop_id);
							$credit					=mysqli_real_escape_string($db->link,$credit);							
							$narration				=mysqli_real_escape_string($db->link,$narration);	
							
														
							$sql ="Select id,shop_id,debit_amount, blance from shop_rent where shop_id='$shop_id' order by id DESC LIMIT 0,1";
							$results=$db->select($sql);
							if($results==true){
							while($data=$results->fetch_assoc()){
								$getprvbl 	=$data['blance'];
								$getdb	 	=$data['debit_amount'];
								// check exist entry
							}
							
							//blance entry 
							  $chkdc		= $getprvbl+$getdb; 
							  $balance	 	= $chkdc-$credit; 
							  
							$query ="INSERT INTO `shop_rent`(
							`shop_id`, `invoice_no`,`invoice_date`,`debit_amount`, 
							`credit_amount`, `blance`, `narration`, 
							`paid_id`,`dues_id`, `blance_id`,`gn_date`) VALUES (
							'$shop_id','0','$date','0','$credit','$balance','$narration',
							'0','0','0','0000-00-00')";
							$results=$db->insert($query);
							if($results==true){
								?>
							
							
								<p class='bg-success text-center' style='margin:0px auto; color:green;'>
								
								
								Rent Payment Succesfull
								
								<?php 
									$queryvou="SELECT *from shop_rent ORDER BY id DESC LIMIT 1";
									$resultsvou=$db->select($queryvou);
									if($resultsvou==true){
									while($vid=$resultsvou->fetch_assoc()){
									
									?> 
									<a href="shop_voucher_print.php?spvid='<?php echo $vid['id']?>'" target="blank" class="btn btn-success"> Print Money Recpit </a> 
									
									
									</p>
								<?php } }?>  
								
							<?php
							}else{
								echo"You should be checked again";
							}
							
						   }else{
							    $query ="INSERT INTO `shop_rent`(
								`shop_id`,`invoice_no`,`invoice_date`,`debit_amount`, 
								`credit_amount`, `blance`, `narration`, 
								`paid_id`,`dues_id`, `blance_id`,`gn_date`) VALUES (
								'$shop_id','0','$date','0','$credit','-$credit','$narration',
								'0','0','0','0000-00-00')";
								$results=$db->insert($query);
								if($results==true){
									echo"<p class='well text-center' style='margin:0px auto; color:green;'>Rent Payment Succesfull</p>";
								}else{
									echo"You should be checked again";
								}
						   }
						   
						    /*SMS Code 
						   
							   if($results==true) {									
									$sql ="Select Mobile_number from members where Property_id='$shop_id'";
									$sms=$db->select($sql);
									$newnum="";
									if ($sms){											
										while($rs=$sms->fetch_assoc()){
										$newnum.="+88".trim($rs['Mobile_number']); 	
										}
									}
									$fields = array(
														'api_key' => urlencode('C20028305f6c6457c62bf2.79069222'),
														'type' => urlencode('text'),
														'contacts' => urlencode($newnum),
														'senderid' => urlencode('8809612446179'),
														'msg' => urldecode('Thank You, Your Contribution of '.$credit.' Taka Fee of '.$narration. ' has been received. Heartfelt Thanks for extending your support to us. -Missionpara Mosque.' )
													);
									$fields_string="";
									foreach($fields as $key=>$value){ 
									$fields_string .= $key.'='.$value.'&'; 
									}
											
									$ch = curl_init();
									curl_setopt($ch,CURLOPT_URL, "http://brandsms.itbd.info/smsapi");
									curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
									curl_setopt($ch, CURLOPT_POST, count($fields));
									curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
									curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
									curl_setopt($ch, CURLOPT_FAILONERROR, true);
									curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
									$result = curl_exec($ch);
								}
						   
						   //SMS Code */
						   
						   
						}								
					?>
					<div class="form-group from_border">
						<h4 class="well text-center"><span style="color:red; font-weight:bold;">Collection Monthly</span> <span style="color:green; font-weight:bold;">  Shop Rent </span></h4>
						  <form action="" method="post" enctype="">
							  <div class="col-8 col-sm-8">
								<div class="form-group">
								  <label>Shop ID <span style="color:red">*</span></label>
								  <div class="select2-purple">
									<select class="select2" multiple="multiple" data-placeholder="Example: 001" 
									data-dropdown-css-class="select2-purple" name="shop_id" style="width: 100%;" required>
									 
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
								<textarea class="form-control" rows="2" id="ex2" name="narration" type="text"> </textarea> 
							  </div>
							  <div class="col-xs-12">
								<label for="ex2">Amount <span style="color:red">*</span></label>
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