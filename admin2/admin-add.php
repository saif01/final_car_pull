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

$admin_name=$_POST['admin_name'];
$admin_pass=$_POST['admin_pass'];
$admin_contract=$_POST['admin_contract'];
$admin_officeId=$_POST['admin_officeId'];

//$compfile=$_FILES["compfile"]["name"]; 
$admin_img=$_FILES["admin_img"]["name"];

$admin_status = 1;

move_uploaded_file($_FILES["admin_img"]["tmp_name"],"p_img/adminimg/".$_FILES["admin_img"]["name"]);


$query=mysqli_query($con,"INSERT INTO `admin`(`admin_name`, `admin_password`, `admin_img`, `admin_phone`, `admin_officeID`, `admin_status`) VALUES ('$admin_name','$admin_pass','$admin_img','$admin_contract','$admin_officeId','$admin_status')");


?>
<script>
    alert('Update successfull.  !');
    window.open('admin-panel.php','_self'); //for locating other page.
    //window.location.reload(); //For reload Same page

    </script>
<?php } ?>

<?php include('include/header.php');?>
</head>
<body>
	
	<?php include('include/sidebar.php');?>
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="#" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
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
					<a href="#">Admin Registration</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Registration Form</h2>
						
					</div>

					<div class="box-content">

						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
						  <fieldset>

						

							<div class="control-group">
							  <label class="control-label" for="typeahead">Admin Name </label>
							  <div class="controls">
								<input type="text" name="admin_name" class="span6 typeahead" placeholder="Enter Admin Name">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Password </label>
							  <div class="controls">
							  	<!-- <input type="hidden" name="user_pass" value="12345" /> -->
								<input type="text" name="admin_pass" class="span6 typeahead" placeholder="Default Password" value="12345" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Admin Contract </label>
							  <div class="controls">
								<input type="text" name="admin_contract" class="span6 typeahead" placeholder="Enter Admin Phone Number" >
							  </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="typeahead">Admin Office ID </label>
							  <div class="controls">
								<input type="text" name="admin_officeId" class="span6 typeahead" placeholder="Enter Admin Office ID" >
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="fileInput">Admin Image </label>
							  <div class="controls">
								<input class="input-file uniform_on" name="admin_img"  type="file">
							  </div>
							</div> 
							
		
							<div class="form-actions">
							  <button type="submit" name="submit" class="btn btn-primary">Admin Register</button>
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
		
	
	
	<div class="clearfix"></div>
	
	<?php include('include/footer.php') ?>
	
	<?php } ?>
