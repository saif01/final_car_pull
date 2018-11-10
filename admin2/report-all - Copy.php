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

	<!-- All header link -->
<?php include('include/header.php');?>

<script language="javascript" type="text/javascript">
            var popUpWin = 0;

            function popUpWindow(URLStr, left, top, width, height) {
                if (popUpWin) {
                    if (!popUpWin.closed) popUpWin.close();
                }
                popUpWin = open(URLStr, 'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width=' + 500 + ',height=' + 480 + ',left=' + left + ', top=' + top + ',screenX=' + left + ',screenY=' + top + '');
            }
        </script>

 

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
						<h2><i class="halflings-icon th-list"></i><span class="break"></span>All Car Booking Information</h2>
						
					</div>
					<div class="box-content">


					




						<table class="table table-striped table-bordered bootstrap-datatable datatable">


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

								

								<td class="center" >
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
		
		
	
	<!-- start: JavaScript-->



	<?php include('include/footer.php');?>
	
	<?php } ?>