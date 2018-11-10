<?php include('../db/config.php');
require('../assets/coustom/UserInfo.php');

session_start();
error_reporting(0);

if(isset($_POST['submit']))
{
    $adminName=$_POST['adminName'];
    $password=$_POST['password'];


$ret=mysqli_query($con,"SELECT * FROM `admin` WHERE `admin_name` = '$adminName' AND `admin_password` = '$password' ");

 $rowcount=mysqli_num_rows($ret);  

$row=mysqli_fetch_array($ret);

if($rowcount>0 )
			
			{   
	$ret= mysqli_query($con,"SELECT * FROM `admin` WHERE `admin_name` = '$adminName' ");
    while($row=mysqli_fetch_array($ret))
                {   

                    $admin_id=$row['admin_id'];
                    $st=$row['admin_status'];

                    if ($st==1) 
                    {  


                        $_SESSION['adminName']=$_POST['adminName'];
                        $_SESSION['admin_id']=$row['admin_id'];
                        $admin_status=$row['admin_status'];
                        $ip= UserInfo::get_ip();
                        $os= UserInfo::get_os();
                        $browser= UserInfo::get_browser();
                        $device= gethostname();

                              
                                            
                        $log=mysqli_query($con,"INSERT INTO `loginlog`(`user_name`, `user_id`, `user_ip`, `user_os`, `user_browser`, `user_device`, `user_status`) VALUES ('".$_SESSION['adminName']."','".$_SESSION['admin_id']."','$ip','$os','$browser','$device','$admin_status')");
                                        
                         header("Location: index");
                        exit();			

				}
			elseif($st==0)
			    {
			        $_SESSION['errmsg']="Your ID Was Blocked.!!! Contract With IT Department";       
			        $_SESSION['adminName']=$_POST['adminName'];
			        $admin_status=$row['admin_status'];
			         $ip= UserInfo::get_ip();
			         $os= UserInfo::get_os();
			         $browser= UserInfo::get_browser();
			         $device= UserInfo::get_device();
			                               
			         $log=mysqli_query($con,"INSERT INTO `loginlog`(`user_name`, `user_id`, `user_ip`, `user_os`, `user_browser`, `user_device`, `user_status`) VALUES ('".$_SESSION['adminName']."','".$_SESSION['admin_id']."','$ip','$os','$browser','$device','$admin_status')");

			         header("location: login");
			        exit();
			       
			     }

			     else{

			     	$_SESSION['errmsg']="Username Or Password Not Match.!!!";       
			        $_SESSION['adminName']=$_POST['adminName'];
			        
			         $ip= UserInfo::get_ip();
			         $os= UserInfo::get_os();
			         $browser= UserInfo::get_browser();
			         $device= UserInfo::get_device();
			                               
			         $log=mysqli_query($con,"INSERT INTO `loginlog`(`user_name`, `user_ip`, `user_os`, `user_browser`, `user_device`) VALUES ('".$_SESSION['adminName']."','$ip','$rowcount','$browser','$device')");

			         header("location: login");
			        exit();
			       

			     }
			}
		}

 else{

			     	$_SESSION['errmsg']="Username Or Password Not Match.!!!";       
			        $_SESSION['adminName']=$_POST['adminName'];
			        
			         $ip= UserInfo::get_ip();
			         $os= UserInfo::get_os();
			         $browser= UserInfo::get_browser();
			         $device= UserInfo::get_device();
			                               
			         $log=mysqli_query($con,"INSERT INTO `loginlog`(`user_name`, `user_ip`, `user_os`, `user_browser`, `user_device`) VALUES ('".$_SESSION['adminName']."','$ip','$rowcount','$browser','$device')");

			         header("location: login");
			        exit();

			    }

}
?>

<?php include('include/header.php');?>
<body>
	

	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url(img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.html"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<h2>Login to your account</h2>
					<form class="form-horizontal" action="" method="post">
						
						<fieldset>
							<span style="color:red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span> 

							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="adminName"  type="text" placeholder="type username" required="" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="type password" required="" />
							</div>
							<div class="clearfix"></div>
							

							<div class="button-login">	
								<button type="submit" name="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>
					
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
