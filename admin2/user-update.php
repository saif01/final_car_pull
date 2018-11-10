<?php
session_start();
error_reporting(0);
date_default_timezone_set('Asia/Dhaka');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

if(strlen($_SESSION['adminName'])==0)
  { 
header('location:login');
}
else{  ?>

<?php
include('../db/config.php');

$user_id=$_GET['user_id'];

if (isset($_POST['submit'])) {

$user_name=$_POST['user_name'];

$user_contract=$_POST['user_contract'];
$user_officeId=$_POST['user_officeId'];

//$compfile=$_FILES["compfile"]["name"]; 

$user_img=$_FILES["user_img"]["name"];

move_uploaded_file($_FILES["user_img"]["tmp_name"],"p_img/userImg/".$_FILES["user_img"]["name"]);

$query=mysqli_query($con,"UPDATE `user` SET `user_name`='$user_name',`user_contract`='$user_contract',`user_img`='$user_img',`user_officeId`='$user_officeId',`user_update`='$currentTime' WHERE `user_id`='$user_id' ");
?>
<script>
    alert('Update successfull. !!!');
    window.open('user-all-info.php','_self');
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
					<a href="#">Forms</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>

					<div class="box-content">

						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
						  <fieldset>
<?php 

$query2=mysqli_query($con,"SELECT * FROM `user` WHERE `user_id` ='$user_id' ");
while ($row=mysqli_fetch_array($query2)) 
{
?>				<div class="control-group span6" >
							<div class="control-group">
							  <label class="control-label" for="typeahead">User Name </label>
							  <div class="controls">
								<input type="text" name="user_name" class="span6 typeahead" value = "<?php echo htmlentities($row['user_name']);?>" >
							  </div>
							</div>

							

							<div class="control-group">
							  <label class="control-label" for="typeahead">User Contract </label>
							  <div class="controls">
								<input type="text" name="user_contract" class="span6 typeahead" value = "<?php echo htmlentities($row['user_contract']);?>" >
							  </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="typeahead">User Office ID </label>
							  <div class="controls">
								<input type="text" name="user_officeId" class="span6 typeahead" value = "<?php echo htmlentities($row['user_officeId']);?>" >
							  </div>
							</div>
							
						</div>
				<div class="control-group span6" >

<img src="p_img/userImg/<?php echo($row['user_img']);?>" class="img-responsive" alt="Image" height="150" width="140"/> 

						
		<!-- <input class="input-file uniform_on" name="user_img"  type="file" value="<?php echo($row['user_img']);?>">-->
							 
				</div>
							
		<div class="control-group span11" >
							<div class="form-actions">
							  <button type="submit" name="submit" class="btn btn-primary">Update User</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
<?php } ?>
				
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
