<?php
ob_start();
include("lib/session.php");
Session::checkSession();
error_reporting(0);
date_default_timezone_set($timezone);
?> 
<?php
 $userid	=Session::get('userID');
 $Status	=Session::get('Status');
?>

<?php
include("lib/config.php");
include("lib/database.php");
include("lib/helper.php");
$db = new Database();
$fm = new Formate();
?> 

<!doctype html>
<html lang="en">
  <head>
 <!--<meta http-equiv="refresh" content="30"/>-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Masjid Management</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datatables.min.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
	
	 <!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.min.css'>
	
    <link rel="stylesheet" href="css/select2.min.css" >	
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css">
		ai .fa{
			color:#f0ad4e; font-size:20px;"
		}
	</style>

  </head>
 <body>
 
 
 <div class="main_border_area">
		 <!-- Header Area -->
		<section class="header_area">
			  <div class="container ">
				<div class="row text-wrap">
					<div class="col-xs-6 col-md-6 col-lg-6 text-left">
					
					<?php 
						$query="SELECT * From company_info"; 
						$results=$db->select($query);
						if($results==true) {
							while ($rs=$results->fetch_assoc()){					
					?>
						<h3> <span style="color:red; font-weight:bold;"><?php echo $rs['company_name_first_part'];?></span> 
						<span style="color:green; font-weight:bold;"><?php echo $rs['comapnay_name_last_part'];?></span></h2>
						<h4> Address: <?php echo $rs['address'];?></h4>
					<?php } ?>
					<?php } ?>
					</div>
					<div class="col-xs-6 col-md-6 col-lg-6   ">
						<p> Welcome Admin</p>
						<?php
							if(isset($_GET['action']) && $_GET['action'] == "logout"){
								Session::destory();
							}
						 ?>	 
						<p><a href="?action=logout" class="btn btn-default btn-small btn-danger">Logout</a></p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="print_header text-center">
			  <div class="container">
				<div class="row">
					<div class="col-xs-12">
					<?php 
						$query="SELECT * From company_info"; 
						$results=$db->select($query);
						if($results==true) {
							while ($rs=$results->fetch_assoc()){					
					?>
						<h3><?php echo $rs['company_name_first_part'].' '.$rs['comapnay_name_last_part'];?></h3>
						<p>Address: <?php echo $rs['address'];?></p>
					<?php } ?>
					<?php } ?>
					</div>
				</div>
			</div>
		</section>
		
		<!--End Header Area -->


		<!-- Navbar Area -->

		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
			  <li><a href="index.php"> <i class="fa fa-home"></i> Home</a></li>
			  
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-dot-circle-o"></i> Masjid Property <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="add_property.php">Add New Property</a></li>
					<li><a href="property_details.php">View Property List</a></li>		
				  </ul>
				</li>			  
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-users"></i> Members Info <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="newmembers.php">Add New Members</a></li>
					<li><a href="viewmembers_active.php">View Active Members</a></li>		
					<li><a href="viewmembers _inactive.php">View Inactive Members</a></li>		
					<li><a href="import_mem.php">Import Members</a></li>		
					<li><a href="export.php">Download Members List</a></li>		
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
				  aria-haspopup="true" aria-expanded="false"> <i class="fa fa-dollar"> </i> EC Sub<span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="ecentrysub.php">Collection Fees</a></li>
					<li><a href="edit_ec_collection.php">Print Money Recipt</a></li>
					<li><a href="ec_members_ledger_search.php">Members Ledger</a></li>
					<!--<li><a href="ec_members_monthly_ledger_search.php">Monthly Ledger</a></li>-->
					<li><a href="ec_unpaidlist.php">Dues List</a></li>
					<?php 
						$date=date('Y-m')
					?>
					<li><a href="ec_paid_list.php?ecpid='<?php echo $date; ?>'">Paymented List</a></li>
					<li class="divider"></li>
					<li><a href="ec_members_bill_generate.php">Generate Monthly Bill</a></li>
					<li><a href="ec_opening.php">Opening Balance</a></li> 
				  </ul>
				 
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
				  aria-haspopup="true" aria-expanded="false"> <i class="fa fa-dollar"> </i> Members Sub<span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="entrysub.php">Collection Fees</a></li>
					<li><a href="edit_gm_collection.php">Print Money Recipt</a></li>
					<li><a href="members_ledger_search.php">Members Ledger</a></li>
					<!--<li><a href="members_monthly_ledger_search.php">Monthly Ledger</a></li>-->
					<li><a href="gm_unpaidlist.php">Dues List</a></li>
					<li><a href="gm_paid_list.php?gmpid='<?php echo $date; ?>'">Paymented List</a></li>					
					<li class="divider"></li>
					<li><a href="gm_generetbill.php">Generate Monthly Bill</a></li>
					<li><a href="gm_opening.php">Opening Balance</a></li>						
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" 
				  data-toggle="dropdown" role="button"
				  aria-haspopup="true" aria-expanded="false">
				  <i class="fa fa-shopping-cart"></i> Shop Rent<span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="collectshprent.php">Collect Rent</a></li>
					<!--<li><a href="">Edit Paymented Rent</a></li>-->
					<li><a href="shop_rent_single_search.php">Renter Ledger</a></li>
					<li><a href="sp_paid_list.php?sppid='<?php echo $date; ?>'">Paymented List</a></li>	
					<!--<li><a href="renter_monthly_ledger.php">Monthly Ledger</a></li> -->
					<li class="divider"></li>
					<li><a href="generet_shop_rent.php">Generate Shop Rent</a></li>
					<li><a href="shop_opening.php">Opening Balance</a></li>					
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
				  aria-haspopup="true" aria-expanded="false"> <i class="fa fa-plus-square"></i> Donation<span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="friday_income.php">Entry Donation</a></li>
					<!--<li><a href="">Edit Donation</a></li>-->
					<li><a href="income_ledger.php">Ledger</a></li>
					
					
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
				  aria-haspopup="true" aria-expanded="false"> <i class="fa fa-minus-square"></i> Expens<span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="new_expens.php">New Expens</a></li>
					<li><a href="add_newhead.php">Add New Head</a></li>
					<!--<li><a href="expnes_edit.php">Edit Expnes</a></li>--> 
					<li><a href="expnes_ledger.php">Ledger</a></li>
					
					
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
				  role="button" aria-haspopup="true" aria-expanded="false"> 
				  <i class="fa fa-users"></i> Employee <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="add_employee.php">Add New Employee </a></li>		
					<li><a href="employee_list.php">View Employee </a></li>
					<li><a href="view_generated_salary.php">View Generated Salary</a></li>
					<li><a href="print_salary.php">Print Salary Sheet</a></li>
					<li><a href="generate_salary.php">Generate Salary</a></li>
				  </ul>
				</li> 
				 
				<li><a href="monthly_ledger_final_report.php"><i class="fa fa-file"></i> Report </a></li>

				
				
				
			  </ul><!--
			  <form class="navbar-form navbar-left">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Search for...">
				  <span class="input-group-btn">
					<button class="btn btn-default" type="button">Search</button>
				  </span>
				</div>
			  </form>-->
			  <ul class="nav navbar-nav navbar-right">
				
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<!-- End Navbar Area -->