<?php
session_start();
error_reporting(0);
if(strlen($_SESSION['adminName'])==0)
  { 
header('location:login');
}
else{  

include('../db/config.php');

	?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>CPB.CarPull</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

<script language="javascript" type="text/javascript">
            var popUpWin = 0;

            function popUpWindow(URLStr, left, top, width, height) {
                if (popUpWin) {
                    if (!popUpWin.closed) popUpWin.close();
                }
                popUpWin = open(URLStr, 'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width=' + 600 + ',height=' + 600 + ',left=' + left + ', top=' + top + ',screenX=' + left + ',screenY=' + top + '');
            }
        </script>


	</head>	
<body>

   <!--  Start Sidebar -->
	<?php include('include/sidebar.php');?>
	<!--  End Sidebar -->


			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">All Booking Info.</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Car Booking Information</h2>
						<div class="box-icon">
							
							
						</div>
					</div>
					<div class="box-content">


					




						<!-- <table  class="table table-striped table-bordered bootstrap-datatable datatable"> -->
<table id="example" class="display nowrap  table-bordered" style="width:100%"> 

						  <thead>
							  <tr>
							  	<th>Car</th>							  	 
								  <th>Booking Starts</th>
								  <th>Booking Ends</th>
								  <th>Location</th>
								  <th>Days</th>
								  <th>Cost</th>
								  <th>Milage</th>
								  <th>Driver</th>
								  <th>Name</th>
								  <th>User</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php 
		$query=mysqli_query($con,"SELECT * FROM `car_booking` ORDER BY `booking_id` DESC ");

		while($row=mysqli_fetch_array($query))
		{

?>
							<tr>

								<td width="" >
									<a href="javascript:void(0);" onClick="popUpWindow('car-profile.php?car_id=<?php echo htmlentities($row['car_id']);?>');" title="View Driver Info.">

									<?php echo htmlentities($row['car_name']. '- '.$row['car_number'] ) ; ?></a>

								</td>
								

								<td class="center"><?php echo date("F j, Y, g:i a", strtotime($row['start_date'])); ?></td>

								<td class="center"><?php echo date("F j, Y, g:i a", strtotime($row['end_date'])); ?></td>


								<td class="center"><?php echo htmlentities($row['location']); ?></td>
								<td class="center"><?php echo htmlentities($row['day_count']); ?></td>
								<td class="center"><?php echo htmlentities($row['booking_cost']); ?></td>
								<td> <?php echo htmlentities($row['start_mileage']. '- '.$row['end_mileage'] ) ; ?>  </td>



								<td class="center"><?php echo htmlentities($row['driver_rating']); ?></td>

								<td class="center">
									<?php
									$driver_id=$row['driver_id'];
									$sql=mysqli_query($con,"SELECT * FROM `car_driver` WHERE `driver_id`='$driver_id' ");
									$row2=$sql->fetch_assoc();


									?>
									<a href="javascript:void(0);" onClick="popUpWindow('driver-profile.php?driver_id=<?php echo $driver_id;?>');" title="View Driver Info.">

									<?php echo htmlentities($row2['driver_name']); ?> </a>

								</td>


								
								<td class="center">
									<a href="javascript:void(0);" onClick="popUpWindow('userprofile.php?user_id=<?php echo htmlentities($row['user_id']);?>');" title="View User Info.">

									<?php echo htmlentities($row['user_name']); ?> </a>

								</td>


								
								
							</tr>
			<?php } ?>	
							
						  </tbody>
					  </table>

					</div>
				</div><!--/span-->
			
			</div><!--/row-->


	<!-- end: Content -->
		</div><!--/#content.span10-->
		
	</div><!--/#content.span10-->
</div><!--/fluid-row-->

	
	<!-- start: JavaScript-->

<script src=" https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js "></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js "></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js "></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js "></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js "></script>

<script type="text/javascript">
	
$(document).ready(function() {
    $('#example').DataTable( {
    	
        dom: 'Bfrtip',
        buttons: [
             'excel', 'pdf', 'print'
        ]
    } );
} );

</script>



<div class="clearfix"></div>
	
	<script src="js/custom.js"></script>

<?php include('include/only_footer.php');?>
	
	
	<?php } ?>