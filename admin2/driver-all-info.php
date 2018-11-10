<?php
session_start();
error_reporting(0);
if(strlen($_SESSION['adminName'])==0)
  { 
header('location:login');
}
else{  

include('../db/config.php');
 include('include/header.php');


 ?>
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
				<li><a href="#">Driver All</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Driver All Information</h2>
						
					</div>
					<div class="box-content">

						<table class="table table-striped table-bordered bootstrap-datatable datatable">


						  <thead>
							  <tr>
							  	 <th>Image</th>
								  <th>Name</th>
								  <th>Car Img</th>
								  <th>Name&number</th>
								  
								  <th>Phone</th>
								  <th>License</th>
								  
								  <th>Actions</th>
								  <!-- <th>Actions</th> -->
								  
								  
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php 
		$query=mysqli_query($con," SELECT * FROM `car_driver` ORDER BY `driver_id`");
		while($row=mysqli_fetch_array($query))
		{

?>
							<tr>

								<td > <img src="p_img/driverimg/<?php echo($row['driver_img']);?>" class="img-responsive" alt="Image" height="42" width="42"/>  </td>
								<td class="center" ><?php echo htmlentities($row['driver_name']) ; ?></td>
								<td>
								<?php 
								$car_id = $row['car_id'];
								$query2=mysqli_query($con,"SELECT `car_name`, `car_namePlate`, `car_img1` FROM `tbl_car` WHERE `car_id` ='$car_id' ");
								$row2=$query2->fetch_assoc();		

								?>

								 <img src="p_img/carImg/<?php echo($row2['car_img1']);?>" class="img-responsive" alt="Not Assign" height="42" width="70"/>

							    </td>
							    <td class="center"><?php echo htmlentities($row2['car_name'].'--'.$row2['car_namePlate']); ?></td>



								<td class="center"><?php echo htmlentities($row['driver_phone']); ?></td>
								<td class="center"><?php echo htmlentities($row['driver_license']); ?></td>
								
								<td class="center">   
								<?php
                                         if($row['driver_status']==1)
                                         {?>
                                        <a href="driver-status.php?h_user_id=<?php echo htmlentities($row['driver_id']);?>" onclick="return confirm('Are you sure you want to Deactive this ** Driver **?');"><button class="btn btn-primary"> <i class="icon-ok-circle"> Active</i></button>
                                            
                                        <?php } else {?>

                                            <a href="driver-status.php?s_user_id=<?php echo htmlentities($row['driver_id']);?>" onclick="return confirm('Are you sure you want to Active this ** Driver **?');"><button class="btn btn-danger"><i class="icon-ban-sign"> Deactive </i></button> 
                                            <?php } ?>
                                          

									
									
										
									 <a href="driver-delete.php?driver_id=<?php echo $row['driver_id']?>" onClick="return confirm('Are you sure you want to delete???')"><button type="button" class="btn btn-danger" ><i class="icon-remove-sign"> Delete</i></button></a>
									
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