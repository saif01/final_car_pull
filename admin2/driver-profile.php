<?php 
session_start();
error_reporting(0);

include('../db/config.php');

$driver_id=$_GET['driver_id'];


$query=mysqli_query($con,"SELECT * FROM `car_driver` WHERE `driver_id`='$driver_id' ");

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
		
.Driver-s
{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	overflow: hidden;
	position: absolute;
	top: calc(70px/2);
	left: calc(50% - 50px);
}


	</style>	
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				
				<div class="login-box">
					 <img class="Driver-s" src="p_img/driverimg/<?php echo($row['driver_img']);?>" class="img-responsive" alt="Image"   />


					

					
					
				<table>
 
<td>  <h2>Driver Detail's:</h2>  </td>


					<tr>					
					<td> <h2>Driver Name:</h2></td>
					<th> <h2> <strong><?php echo $row['driver_name'];?></strong> </h2></th>
					</tr>

					<tr>					
					<td> <h2>Driver Contract:</h2></td>
					<th> <h2> <strong><?php echo $row['driver_phone'];?></strong> </h2></th>
					</tr>
					

					<tr>					
					<td> <h2>Driver License:</h2></td>
					<th> <h2><strong><?php echo $row['driver_license'];?></strong> </h2></th>
					</tr>
					
					<tr>					
					<td> <h2>Driver NID:</h2></td>
					<th> <h2><strong><?php echo $row['driver_nid'];?></strong> </h2></th>
					</tr>


					<tr>					
					<td> <h2>Driver Status:</h2></td>
					<th> <h2> <strong><?php $st =$row['driver_status'];

					if ($st==1) {
						echo "Active";
					}
					else{
						echo "Deactive";
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







