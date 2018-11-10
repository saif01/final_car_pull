<?php
session_start();
error_reporting(0);

include('../db/config.php');

$car_id=$_GET['car_id'];


$query=mysqli_query($con,"SELECT * FROM `tbl_car` WHERE `car_id`='$car_id' ");

$row=$query->fetch_assoc();

?>

<?php include('include/header.php');?>
<body>
	

	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url(img/bg-login.jpg) !important; }
		</style>
		
	<style type="text/css">
		
.user-s
{
	width: 200px;
	height: 120px;
	border-radius: 20%;
	overflow: hidden;
	position: absolute;
	top: calc(20px/2);
	left: calc(45% - 50px);
}


	</style>	
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				
				<div class="login-box">
					 <img class="user-s" src="p_img/carImg/<?php echo($row['car_img1']);?>" class="img-responsive" alt="Image"   />


					

					
					
				<table>
 
<td>  <h2>User Detail's:</h2>  </td>


					<tr>					
					<td> <h2>Car Name:</h2></td>
					<th> <h2> <strong><?php echo $row['car_name'];?></strong> </h2></th>
					</tr>

					<tr>					
					<td> <h2>Car Number:</h2></td>
					<th> <h2> <strong><?php echo $row['car_namePlate'];?></strong> </h2></th>
					</tr>
					

					<tr>					
					<td> <h2>Car Type:</h2></td>
					<th> <h2><strong><?php echo $row['car_type'];?></strong> </h2></th>
					</tr>

					<tr>					
					<td> <h2>Car Type:</h2></td>
					<th> <h2><strong><?php echo $row['car_type'];?></strong> </h2></th>
					</tr>

					<tr>					
					<td> <h2>Car Capacity:</h2></td>
					<th> <h2><strong><?php echo $row['car_capacity'];?></strong> </h2></th>
					</tr>

					<tr>					
					<td> <h2>Car Remarks:</h2></td>
					<th> <h2><?php echo $row['car_remarks'];?></h2> </th>
					</tr>
					
					<tr>					
					<td> <h2>User Status:</h2></td>
					<th> <h2> <strong><?php $st =$row['show_status'];

					if ($st==1) {
						echo "Show";
					}
					else{
						echo "Not Show";
					}?>
						
					</strong> </h2></th>
					</tr>




				</table>

					
				

					
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>







