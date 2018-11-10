<?php
session_start();
error_reporting(0);
if(strlen($_SESSION['adminName'])==0)
  { 
header('location:login');
}
else{  


include('../db/config.php');
 include('include/header.php');


 
$sql=mysqli_query($con," SELECT * FROM `user`");
$users=mysqli_num_rows($sql);

$sql2=mysqli_query($con," SELECT * FROM `car_driver`");
$drivers=mysqli_num_rows($sql2);

$sql3=mysqli_query($con," SELECT * FROM `tbl_car`");
$cars=mysqli_num_rows($sql3);



 ?>

<body>

	

<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
		<?php 

		include('include/navbar.php');
		include('include/sidebar.php');

		?>



	<div class="container-fluid-full">
		<div class="row-fluid">
	<!--  End Sidebar -->		
			
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>

					
						
			
			<div class="row-fluid">	

				<a href="user-all-info" class="quick-button metro yellow span2" style="border-radius: 50px 15px;">
					<i class="icon-user"></i>
					<p>All Users</p>
					<span class="badge"> <?php echo $users; ?></span>
				</a>

				<a href="driver-all-info" class="quick-button metro purple span2" style="border-radius: 50px 15px;">
					<i class="icon-group"></i>
					<p>All Drivers</p>
					<span class="badge"> <?php echo $drivers; ?></span>
				</a>

				<!-- <a class="quick-button metro red span2">
					<i class="icon-comments-alt"></i>
					<p>Comments</p>
					<span class="badge">46</span>
				</a> -->
				
				<!-- <a class="quick-button metro green span2">
					<i class="icon-tasks"></i>
					<p>Products</p>
				</a> -->

				<a href="car-table" class="quick-button metro green span2" style="border-radius: 50px 15px;">
					<i class="icon-cog"></i>
					<span class="badge"> <?php echo $cars; ?></span>
					<p>All Cars</p>
				</a>
				<a class="quick-button metro pink span2">
					<i class="icon-random"></i>
					<p>Messages</p>
					<span class="badge">88</span>
				</a>
				<a class="quick-button metro black span2">
					<i class="icon-calendar"></i>
					<p>Calendar</p>
				</a>
				
				<div class="clearfix"></div>
								
			</div><!--/row-->			
       

	</div><!--/.fluid-container-->
	

			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon list-alt"></i><span class="break"></span>Pie</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
							<div id="piechart" style="height:300px"></div>
					</div>
				</div>
			
				<div class="box span6">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon list-alt"></i><span class="break"></span>Donut</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						 <div id="donutchart" style="height: 300px;"></div>
					</div>
				</div>
			
			</div><!--/row-->



	</div>		<!-- end: Content -->
		
</div><!--/#content.span10-->
		</div><!--/fluid-row-->
    </div>
    </div>
	
	<div class="clearfix"></div>
	
	<?php include('include/footer.php');?>
	
	<?php } ?>