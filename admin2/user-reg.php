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

$user_name=$_POST['user_name'];
$user_pass=$_POST['user_pass'];
$user_contract=$_POST['user_contract'];
$user_officeId=$_POST['user_officeId'];

//$compfile=$_FILES["compfile"]["name"]; 
$user_img=$_FILES["user_img"]["name"];

$user_status = 1;

move_uploaded_file($_FILES["user_img"]["tmp_name"],"p_img/userImg/".$_FILES["user_img"]["name"]);


$query=mysqli_query($con," INSERT INTO `user`(`user_name`, `user_pass`, `user_contract`, `user_img`, `user_officeId`, `user_status`) VALUES ('$user_name','$user_pass','$user_contract','$user_img','$user_officeId','$user_status')");


?>
<script>
    alert('Update successfull.  !');
    window.open('user-reg.php','_self'); //for locating other page.
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
					<a href="#">User Registration</a>
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
							  <label class="control-label" for="typeahead">User Name </label>
							  <div class="controls">
								<input type="text" name="user_name" class="span6 typeahead" placeholder="Enter User Name">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Password </label>
							  <div class="controls">
							  	<!-- <input type="hidden" name="user_pass" value="12345" /> -->
								<input type="text" name="user_pass" class="span6 typeahead" placeholder="Default Password" value="12345" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">User Contract </label>
							  <div class="controls">
								<input type="text" name="user_contract" class="span6 typeahead" placeholder="Enter User Phone Number" >
							  </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="typeahead">User Office ID </label>
							  <div class="controls">
								<input type="text" name="user_officeId" class="span6 typeahead" placeholder="Enter User Office ID" >
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="fileInput">User Image </label>
							  <div class="controls">
								<input class="input-file uniform_on" name="user_img"  type="file">
							  </div>
							</div> 
							
		
							<div class="form-actions">
							  <button type="submit" name="submit" class="btn btn-primary">User Register</button>
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
