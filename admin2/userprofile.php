<?php
session_start();
error_reporting(0);

include('../db/config.php');

$user_id=$_GET['user_id'];


$query=mysqli_query($con,"SELECT * FROM `user` WHERE `user_id`='$user_id' ");

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
					 <img class="user-s" src="p_img/userImg/<?php echo($row['user_img']);?>" class="img-responsive" alt="Image"   />


					

					
					
				<table>
 
<td>  <h2>User Detail's:</h2>  </td>


					<tr>					
					<td> <h2>User Name:</h2></td>
					<th> <h2> <strong><?php echo $row['user_name'];?></strong> </h2></th>
					</tr>

					<tr>					
					<td> <h2>User Contract:</h2></td>
					<th> <h2> <strong><?php echo $row['user_contract'];?></strong> </h2></th>
					</tr>
					

					<tr>					
					<td> <h2>User Office ID:</h2></td>
					<th> <h2><strong><?php echo $row['user_officeId'];?></strong> </h2></th>
					</tr>
					
					<tr>					
					<td> <h2>User Status:</h2></td>
					<th> <h2> <strong><?php $st =$row['user_status'];

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







