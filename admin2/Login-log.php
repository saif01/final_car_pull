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
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Login Log </a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon list-alt"></i><span class="break"></span>All User Login Log Information</h2>
						
					</div>
					<div class="box-content">

						<table class="table table-striped table-bordered bootstrap-datatable datatable">


						  <thead>
							  <tr>
							  	 <th>Log ID</th>
							  	 <th>User</th>
							  	 <th>User IP</th>
								 <th>LogIn</th>
								 <th>LogOut</th>
								 <th>User OS</th>	
								 <th>Browser</th>						  
								 <th>User Device</th>
								 <th>User Status</th>

							  </tr>
						  </thead>   
						  <tbody>
						  	<?php 
		$query=mysqli_query($con," SELECT * FROM `loginlog` ORDER BY `login_id` DESC");
		while($row=mysqli_fetch_array($query))
		{
 
?>
							<tr>
								

								<td class="center" ><?php echo htmlentities($row['login_id']) ; ?></td>
								<td class="center" ><?php echo htmlentities($row['user_name']) ; ?></td>
								<td class="center"><?php echo htmlentities($row['user_ip']); ?></td>
								<td class="center"><?php echo date("F j, Y, g:i a", strtotime($row['logIn'])); ?></td>
								<td class="center"><?php echo date("F j, Y, g:i a", strtotime($row['logOut']));?></td>
								<td class="center"><?php echo htmlentities($row['user_os']); ?></td>
								<td class="center"><?php echo htmlentities($row['user_browser']); ?></td>
								
								<td class="center"><?php echo htmlentities($row['user_device']); ?></td>

								<td class="center"><?php 
								$st=$row['user_status']; 
								if ($st==1) {
									echo "Active";
								}else{echo "Deactive";}


								?></td>
								
								
							</tr>
			<?php } ?>	
							
						  </tbody>
					  </table>


					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
	
	
	
	<!-- start: JavaScript-->



	<?php include('include/footer.php');?>
	
	<?php } ?>