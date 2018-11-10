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

    </head> 
    <body> 

   <!--  Start Sidebar -->
	<?php include('include/sidebar.php');?>
	<!--  End Sidebar -->

<script language="javascript" type="text/javascript">
            var popUpWin = 0;

            function popUpWindow(URLStr, left, top, width, height) {
                if (popUpWin) {
                    if (!popUpWin.closed) popUpWin.close();
                }
                popUpWin = open(URLStr, 'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width=' + 600 + ',height=' + 600 + ',left=' + left + ', top=' + top + ',screenX=' + left + ',screenY=' + top + '');
            }
        </script>

			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Reports</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Date Wise Reports</h2>
						<div class="box-icon">
							
							
						</div>
					</div>
					<div class="box-content">


					<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
						  <fieldset>

						  	<div class="span6">
							<div class="control-group">
							  <label class="control-label" for="typeahead">Start Date </label>
							  <div class="controls">
								<input type="Date" name="start_date" class=" typeahead" placeholder="Enter User Name">
							  </div>
							</div>


							<div class="control-group">
						<label class="control-label" for="typeahead">End Date </label>
							  <div class="controls">
								<input type="Date" name="end_date" class=" typeahead" placeholder="Enter User Name">
							  </div>


							</div>


						</div>

		<div class="span6">	

							<div class="control-group ">

	  			<label class="control-label" for="typeahead">Select Car </label>
				<div class="controls">
			<select name="car_id" class="form-control" >
				<option value="pick"> </option>
<?php
				$query2=mysqli_query($con,"SELECT `car_id`, `car_name`, `car_namePlate` FROM `tbl_car` ");
			while ($row2 = mysqli_fetch_array($query2))
			{
echo "<option value='". $row2['car_id'] ."'>" .$row2['car_name'] ." -- ". $row2['car_namePlate']. "</option>" ;
}
?>

					</select>
							  </div>							  
							</div>

	
							<div class="form-actions">
							  <button type="submit" name="submit" class="btn btn-primary">Show Report</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
		</div>
						</fieldset>
					</form>

<hr>

<?php 
if(isset($_POST['submit']))
{
     $start_date= $_POST['start_date'];
     $end_date=$_POST['end_date'];
     $car_id=$_POST['car_id'];
?>


						<table  id="example" class="display nowrap  table-bordered" style="width:100%">


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
		$query=mysqli_query($con,"SELECT * FROM `car_booking` WHERE `car_id`='$car_id'  AND   `start_date` >= '$start_date' AND `end_date`<= '$end_date' ");

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

					  

<?php } ?>	
					</div>
				</div><!--/span-->
			
	
		
	<!-- start: JavaScript-->
    

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