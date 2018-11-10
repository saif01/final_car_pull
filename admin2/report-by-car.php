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

	<!--  Start Sidebar -->
	<?php include('include/sidebar.php');?>
	<!--  End Sidebar -->
							
<!-- start: Content -->
<div id="content" class="span10">						
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tasks</a></li>
			</ul>
<!-- start: Main Content -->

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
       





   				</div>


<!-- End: Main Content -->
</div><!--/.fluid-container-->
<!-- end: Content -->	
<?php include('include/footer.php');?>

	<?php } ?>