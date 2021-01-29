
<?php include("inc/header.php"); ?>

		<!-- Main Area -->
		<section class="add_new_member ">
			 <div class="container">
				<div class="row">	
					<?php 
						if(isset($_POST["submit"])){
							$first_name				=$fm->validation($_POST['first_name']);
							$last_name				=$fm->validation($_POST['last_name']);
                            $query="Update admin_user SET 
							`first_name`			='$first_name',
							`last_name`				='$last_name'
							where id				=$userid";
                            $results=$db->update($query);
                            if($results==true){
                                echo "<script type='text/javascript'>alert('Information Successfully Updated')</script>";
                            }
					     }
					?>
                    <form action="" method="post" >
                                <div class="form-group from_border">
                                    <h4 class="well text-center"><span style="color:red; font-weight:bold;">Profile </span> <span style="color:green; font-weight:bold;"> Inormation </span></h4>
                                    <div class="" style="height: 170px; width:150px;
                                     background: #fff; margin:0px auto; border: 2px solid green;">
                                        <img src="userimage/admin.png" class="img-responsive img-thumbnail">
                                    </div> <br>
                                    <table class="table table-striped table-responsive">
                                       <?php
                                        $query="Select * from admin_user where id=$userid";
                                        $usres=$db->select($query);
                                        if ($usres==true) {
                                            while ($rs=$usres->fetch_assoc()){

                                       ?>

                                        <tbody>
                                            <tr>
                                                <td>First Name</td>
                                                <td>:</td>
                                                <td><input type="text" name="first_name" value="<?php echo $rs['first_name'];?>"></td>
                                            </tr>
                                        <tr>
                                            <td>Last Name</td>
                                            <td>:</td>
                                            <td><input type="text" name="last_name" value="<?php echo $rs['last_name'];?>"></td>

                                        </tr>
                                         <tr>
                                            <td>Super User Role</td>
                                            <td>:</td>
                                            <td><?php echo $rs['role'];?></td>

                                        </tr>

                                        </tbody>
                                    </table>

                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-default btn-info">Update Info</button>
                                        </div>
                                    </form>
                                </div>
                        <?php } ?>
                        <?php } ?>

					
			 </div>
		</section>
		<!-- End Main Area -->
			

<?php include("inc/footer.php"); ?> 