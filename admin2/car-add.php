<?php
session_start();
error_reporting(0);
if(strlen($_SESSION['adminName'])==0)
  { 
header('location:login');
}
else{  ?>

<?php
include('../db/config.php');

 

if (isset($_POST['submit'])) {

$car_name=$_POST['car_name'];
$car_namePlate=$_POST['car_namePlate'];
$car_type=$_POST['car_type'];
$car_capacity=$_POST['car_capacity'];
$car_gearbox=$_POST['car_gearbox'];
$car_door=$_POST['car_door'];
$car_gps=$_POST['car_gps'];

$car_aircondition=$_POST['car_aircondition'];
$car_power_doorLock=$_POST['car_power_doorLock'];
$car_cd_player=$_POST['car_cd_player'];

$remarks=$_POST['remarks'];
//$compfile=$_FILES["compfile"]["name"]; 
$driver_img=$_FILES["driver_img"]["name"];
$imgB=$_FILES["imgB"]["name"];
$imgC=$_FILES["imgC"]["name"];

move_uploaded_file($_FILES["driver_img"]["tmp_name"],"p_img/carImg/".$_FILES["driver_img"]["name"]);
move_uploaded_file($_FILES["imgB"]["tmp_name"],"p_img/carImg/".$_FILES["imgB"]["name"]);
move_uploaded_file($_FILES["imgC"]["tmp_name"],"p_img/carImg/".$_FILES["imgC"]["name"]);


$query=mysqli_query($con," INSERT INTO `tbl_car`(`car_name`, `car_namePlate`, `car_type`, `car_capacity`, `car_img1`, `car_img2`, `car_img3`, `car_door`, `car_gearbox`, `car_gps`, `car_aircobdition`, `car_power_doorLock`, `car_cdPlayer`, `car_remarks`) VALUES ('$car_name','$car_namePlate','$car_type','$car_capacity','$driver_img','$imgB','$imgC','$car_door','$car_gearbox','$car_gps','$car_aircondition','$car_power_doorLock','$car_cd_player','$remarks')");


?>
<script>
    alert('Update successfull.  !');
    window.open('car-add.php','_self');
    </script>
<?php } ?>

<?php include('include/header.php');?>
</head>
<body>
	
	<?php include('include/sidebar.php');?>
			
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Car Add</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Car Add Form</h2>
						
					</div>

					<div class="box-content">

						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
						  <fieldset>

		<div class="span6">
							<div class="control-group">
							  <label class="control-label" for="typeahead">Car Name </label>
							  <div class="controls">
								<input type="text" name="car_name" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["BMW","Toyota","Suzuki","Mitsubishi","Nissan","Toyota Allion","Toyota Probox","Toyota Noah","Toyota Axio","Toyota Belta","Honda Airwave","Toyota Corolla","Toyota HiAce"]'>
								<p class="help-block">Start typing to activate auto complete!</p>

							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Car Number </label>
							  <div class="controls">
								<input type="text" name="car_namePlate" class="span6 typeahead" >
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Car Type </label>
							  <div class="controls">
							  	<select id="selectError3" name="car_type">
							  		<option value=""> Select Value</option>
									<option value="CNG">CNG</option>
									<option value="Petrol">Petrol</option>
									<option value="Diesel">Diesel</option>
									
								  </select>
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Car Capacity </label>
							  <div class="controls">
								<input type="Number" name="car_capacity" class="span6 typeahead" >
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Car GearBox </label>
							  <div class="controls">
								<select id="selectError3" name="car_gearbox">
									<option value=""> Select Value</option>
									<option value="Automatic">Automatic</option>
									<option value="Manual">Manual</option>
									
								  </select>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Car Door </label>
							  <div class="controls">
								<input type="Number" name="car_door" class="span6 typeahead" >
							  </div>
							</div>
				</div>
							


				<div class="span6">
							<div class="control-group">
							  <label class="control-label" for="fileInput">First Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="driver_img"  type="file">
							  </div>
							</div>     
							<div class="control-group">
							  <label class="control-label" for="fileInput">Second Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="imgB" type="file">
							  </div>
							</div>     
							<div class="control-group">
							  <label class="control-label" for="fileInput">Third Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="imgC"   type="file">
							  </div>
							</div>

	

					
							  <div class="control-group">
								<label class="control-label"> Car Aircondition </label>
								<div class="controls">
								  <label class="checkbox inline">
								  	<input type="hidden" name="car_aircondition" value="0" />
									<input type="checkbox"  id="inlineCheckbox1" name="car_aircondition"  value="1"> If yes then click or Ignore.
								  </label>
								  
								</div>
							  </div> 
							  <div class="control-group">
								<label class="control-label"> Power Door Lock </label>
								<div class="controls">
								  <label class="checkbox inline">
								  		<input type="hidden" name="car_power_doorLock" value="0" />
									<input type="checkbox" name="car_power_doorLock" id="inlineCheckbox2" id="inlineCheckbox3" value="1"> If yes then click or Ignore.
								  </label>
								  
								</div>
							  </div>         
							  <div class="control-group">
								<label class="control-label"> CD Player </label>
								<div class="controls">
								  <label class="checkbox inline">
								  	<input type="hidden" name="car_cd_player" value="0" />
									<input type="checkbox" name="car_cd_player"  value="1"> If yes then click or Ignore
								  </label>
								  
								</div>
							  </div>


							   <div class="control-group">
								<label class="control-label"> Car GPS </label>
								<div class="controls">
								  <label class="checkbox inline">
								  	<input type="hidden" name="car_gps" value="0" />
									<input type="checkbox" name="car_gps"  value="1"> If yes then click or Ignore
								  </label>
								  
								</div>
							  </div>

	</div>
			
			<div  class="span12">
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Remarks</label>
							  <div class="controls">
								<textarea class="cleditor" name="remarks" id="textarea2" rows="1"></textarea>
							  </div>
							</div>
			

				
							<div class="form-actions">
							  <button type="submit" name="submit" class="btn btn-primary">Update Car</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>


				</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			
			
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<?php include('include/footer.php') ?>
	
	<?php } ?>