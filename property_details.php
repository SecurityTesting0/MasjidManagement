<?php include("inc/header.php"); ?> 
		<!-- Main Area -->
		<section class="add_new_member pading_margn ">
			 <div class="container">
				<div class="row">
					<h3 class="text-center"> <span style="color:green; font-weight:bold;">Masjid</span> <span style="color:red;font-weight:bold;">Propery List</span> </h3>
					<br>
	
	
					
					<table id="example" class="display table-hover table-bordered table-striped table-responsive" style="width:98%;">
						<thead>
							<tr class="bg-success">
								<th>Propery ID</th>								
								<th>Propery Name</th>
								<th>Rent Taker Name</th>
								<th>Description</th>
								<th>Monthly Rent</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
						
						<?php		
							$query="SELECT * FROM masjid_property";
							$results=$db->select($query);
							$id=0; 
							if ($results){	
							?>
							
							<?php
							while($rs=$results->fetch_assoc()){
							$id++; 						
							?>
							
						
							<tr>
								<td><?php echo $rs['Property_id']; ?></td>							
								<td><?php echo $rs['Property_name']; ?></td>
								<td><?php echo $rs['rent_t_name']; ?></td>
								<td><?php echo $rs['Description']; ?></td>
								<td><?php echo number_format($rs['Rent']); ?>.00 </td>								
								<td><a href="edit_property.php?id='<?php echo $rs['id']; ?>'" class="btn btn-warning">Edit</a></td>								
							</tr>	
							
							<?php }?>
							<?php }?>
						</tbody>
						<?php		
							$query="SELECT sum(Rent) as total from masjid_property";
							$results=$db->select($query);
							$id=0; 
							if ($results){	
							?>
							
							<?php
							while($rs=$results->fetch_assoc()){
							$id++; 						
							?>
							
						
							<tfoot>
								<tr class="bg-success">
									<th></th>
									<th></th>
									<th></th>
									<th style="text-align:right">Total Collectionable Rent=</th>
									<th><?php echo number_format($rs['total']); ?>.00 </th>	
								</tr>
							</tfoot>	
							
							<?php }?>
							<?php }?>
					</table>
					
					
			 </div>
		</section>
		<!-- End Main Area -->
		
<?php include("inc/footer.php"); ?> 