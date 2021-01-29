<?php include("inc/header.php"); ?> 
		<!-- Main Area -->
		<section class="main_area ">
			 <div class="container">
				<div class="row">
					<div class="col-md-12">
                       <h3> All Admin Users List </h3>
					    <table class="table table-striped table-responsive text-left table-condensed">
                            <tr>
                                <th>S.L No</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>User Role</th>
                                <th>Actions</th>
                            </tr>
                            <?php
                            $query="Select * from admin_user where id=$userid";
                            $usres=$db->select($query);
                            $id=0;
                            if ($usres==true) {
                                while ($rs=$usres->fetch_assoc()){
                                    $id++;
                            ?>
                            <tr>
                               <td><?php echo $id;?></td>
                               <td><?php echo $rs['first_name'];?></td>
                               <td><?php echo $rs['last_name'];?></td>
                               <td><?php echo $rs['role'];?></td>
                               <td><a href="profile_edit.php" class="btn btn-warning"> Edit Information </a></td>

                            </tr>
                            <?php } ?>
                            <?php } ?>

                        </table>
                    </div>
				</div>
			 </div>
		</section>
		<!-- End Main Area -->
		

<?php include("inc/footer.php"); ?> 