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
					<a href="index">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">All User Information </a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>User Information</h2>
						
					</div>
					<div class="box-content">

						<table class="table table-striped table-bordered bootstrap-datatable datatable">


						  <thead>
							  <tr>
							  	 <th>Image</th>
								  <th>Name</th>
								  <th>Phone</th>
								  <th>Office ID</th>
								  
								  <th>Actions</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php 
		$query=mysqli_query($con," SELECT * FROM `user`");
		while($row=mysqli_fetch_array($query))
		{

?>
							<tr>

								<td > <img src="p_img/userImg/<?php echo($row['user_img']);?>" class="img-responsive" alt="Image" height="42" width="42"/>  </td>
								<td class="center" ><?php echo htmlentities($row['user_name']) ; ?></td>
								<td class="center"><?php echo htmlentities($row['user_contract']); ?></td>
								<td class="center"><?php echo htmlentities($row['user_officeId']); ?></td>
								
								<td class="center">   
								<?php
                                         if($row['user_status']==1)
                                         {?>
                                        <a href="user-status.php?h_user_id=<?php echo htmlentities($row['user_id']);?>" onclick="return confirm('Are you sure you want to Deactive this ** User **?');"><button class="btn btn-primary"> <i class="icon-ok-circle"> Active</i></button>
                                            
                                        <?php } else {?>

                                            <a href="user-status.php?s_user_id=<?php echo htmlentities($row['user_id']);?>" onclick="return confirm('Are you sure you want to Active this ** User **?');"><button class="btn btn-danger"><i class="icon-ban-sign"> Deactive </i></button> 
                                            <?php } ?>
                                          

								</td>
								<td class="center">
									
									<a class="btn btn-info" href="user-update.php?user_id=<?php echo $row['user_id'] ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									
										 <a href="user-delete.php?user_id=<?php echo $row['user_id']?>" onClick="return confirm('Are you sure you want to delete???')"><button type="button" class="btn btn-danger" ><i class="icon-remove-sign"> Delete</i></button></a>
									</a>
								</td>
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