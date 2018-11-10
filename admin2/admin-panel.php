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
				<li><a href="#">All Admin Information </a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Admin Information</h2>
						
					</div>
					<div class="box-content">

						<table class="table table-striped table-bordered bootstrap-datatable datatable">


						  <thead>
							  <tr>
							  	  <th>Img</th>
								  <th>Name</th>
								  <th>Phone</th>
								  <th>Office ID</th>								  
								  <th>Actions</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php 
		$query=mysqli_query($con,"SELECT * FROM `admin` ORDER BY `admin_id` DESC");
		while($row=mysqli_fetch_array($query))
		{

?>
							<tr>

								<td > <img src="p_img/adminimg/<?php echo($row['admin_img']);?>" class="img-responsive" alt="Image" height="42" width="42"/>  </td>
								<td class="center" ><?php echo htmlentities($row['admin_name']) ; ?></td>
								<td class="center"><?php echo htmlentities($row['admin_phone']); ?></td>
								<td class="center"><?php echo htmlentities($row['admin_officeID']); ?></td>
								
								<td class="center">   
								<?php
                                         if($row['admin_status']==1)
                                         {?>
                                        <a href="admin-status.php?h_admin_id=<?php echo htmlentities($row['admin_id']);?>" onclick="return confirm('Are you sure you want to Deactive this ** Admin **?');"><button class="btn btn-primary"> <i class="icon-ok-circle"> Active</i></button>
                                            
                                        <?php } else {?>

                                            <a href="admin-status.php?s_admin_id=<?php echo htmlentities($row['admin_id']);?>" onclick="return confirm('Are you sure you want to Active this ** Admin **?');"><button class="btn btn-danger"><i class="icon-ban-sign"> Deactive </i></button> 
                                            <?php } ?>
                                          

								</td>
								<td class="center">
																		
										 <a href="admin-delete.php?admin_id=<?php echo $row['admin_id']?>" onClick="return confirm('Are you sure you want to delete.???')"><button type="button" class="btn btn-danger" ><i class="icon-remove-sign"> Delete</i></button></a>
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