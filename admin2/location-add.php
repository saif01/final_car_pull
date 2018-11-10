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

$location_name=$_POST['location_name'];

 $query=mysqli_query($con,"INSERT INTO `location`(`location`) VALUES ('$location_name')");


?>
<script>
    alert('Update successfull.. !');
    window.open('location-add.php','_self');
    </script>
<?php } 

 include('include/header.php');?>

 <script>
 	
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_location.php",
data:'check_location='+$("#check_location").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

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
				<li><a href="#">Location</a></li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Location Add Form</h2>
						<div class="box-icon">
							
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Location Name </label>
							  <div class="controls">
								<input type="text" id="check_location" onBlur="userAvailability()" name="location_name" class="span6 typeahead" required="">

								<span id="user-availability-status1" style="font-size:12px;"></span>
							  </div>
							</div>

							 

							
																	 
							
							<div class="form-actions">
							  <button type="submit" name="submit" class="btn btn-primary">Update Car</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Location Details </h2>
						<div class="box-icon">
							
							
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
<table class="table table-striped table-bordered bootstrap-datatable datatable">


						  <thead>
							  <tr>
							  	 <th>Count</th>
							  	 <th>Location</th>
							  	 <th>Action</th>
								  
								  
								  
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php 

		$cnt=1;
		$query=mysqli_query($con," SELECT * FROM `location` ORDER BY`location_id`");
		while($row=mysqli_fetch_array($query))
		{

?>
							<tr>
								<td class="center"><?php echo $cnt; ?></td>
								<td class="center"><?php echo htmlentities($row['location']); ?></td>
								<td> <a href="location-delete.php?location_id=<?php echo $row['location_id']?>" onClick="return confirm('Are you sure you want to delete???')"><button type="button" class="btn btn-danger" ><i class="icon-remove-sign"> Delete</i></button></a></td>
																
							</tr>
			<?php $cnt=$cnt+1; } ?>	
							
						  </tbody>
					  </table>


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