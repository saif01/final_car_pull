<?php include('db/config.php');
require('assets/coustom/UserInfo.php');

session_start();
error_reporting(0);

if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

$ret=mysqli_query($con,"SELECT `user_name`, `user_pass` FROM `user` WHERE `user_name`='$username' AND `user_pass` = '$password' ");
   
$num=mysqli_fetch_array($ret);
if($num>0)
{   

    $ret= mysqli_query($con,"SELECT * FROM `user` WHERE `user_name` ='$username'");

    while($row=mysqli_fetch_array($ret))
                {   

                    $user_id=$row['user_id'];
                    $st=$row['user_status'];

                    if ($st==1) 
                    {  
                    
                        $_SESSION['username']=$_POST['username'];
                        $_SESSION['user_id']=$row['user_id'];
                        $ip= UserInfo::get_ip();
                        $os= UserInfo::get_os();
                        $browser= UserInfo::get_browser();
                        $device= gethostname();
                              
                        //$hostname=$_ENV['COMPUTERNAME'];                      
                        $status=1;

                        $log=mysqli_query($con,"INSERT INTO `loginlog`(`user_name`, `user_id`, `user_ip`, `user_os`, `user_browser`, `user_device`, `user_status`) VALUES ('".$_SESSION['username']."','$user_id','$ip','$os','$browser','$device','$st')");
                         
                                       
                         header("Location: dashbord");
                        exit();

                    
  						}

  						elseif ($st==0)
                    {   

                        $_SESSION['username']=$_POST['username'];
                        $_SESSION['id']=$num['id'];
                        $ip= UserInfo::get_ip();
                        $os= UserInfo::get_os();
                        $browser= UserInfo::get_browser();
                        $device= gethostname();
                              
                        //$hostname=$_ENV['COMPUTERNAME'];                      
                        $status=1;

                        $log=mysqli_query($con,"INSERT INTO `loginlog`(`user_name`, `user_id`, `user_ip`, `user_os`, `user_browser`, `user_device`, `user_status`) VALUES ('".$_SESSION['username']."','$user_id','$ip','$os','$browser','$device','$st')");

                        echo "<script>
                        alert('Your Account Has been blocked .Please contact Admin  !!!');
                        window.open('login','_self'); </script>";

                    }

					}

				}
else
    {
        $_SESSION['errmsg']="Invalid username or password";       
        $_SESSION['username']=$_POST['username'];
      
         $ip= UserInfo::get_ip();
         $os= UserInfo::get_os();
         $browser= UserInfo::get_browser();
         $device= UserInfo::get_device();
         $status=0;                         
         $log=mysqli_query($con,"INSERT INTO `loginlog`(`user_name`, `user_ip`, `user_os`, `user_browser`, `user_device`, `user_status`) VALUES ('".$_SESSION['username']."','$ip','$os','$browser','$device','$st')");

         header("location: login");
        exit();
       
     }

}

?>


<?php include('include/header.php');?>


<!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row"> 

                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Welcome to C.P. Bangladesh Car Pull Management</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <hr>
                       
                    </div>
              <!--   </div> -->
                <!-- Page Title End -->
            	</div>
        <!-- </div> -->
    
    <!--== Page Title Area End ==-->

<!--== Login Page Content Start ==-->
   <!--  <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row"> -->
                <!-- <div class="col-lg-4 col-md-8 m-auto">

                	<div class="login-page-content">
                		<div class="login-form">
                			<h3>LogIn!</h3>
							<form action=" " method="post" >
								 <span style="color:red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>

								<div class="username">
									<input type="text" name="username" placeholder="Email or Username" required="">
								</div>
								<div class="password">
									<input type="password" name="password" placeholder="Password" required="">
								</div>
								<div class="log-btn">
									<button type="submit" name="submit" ><i class="fa fa-sign-in"></i> Log In</button>
								</div>
							</form>
                		</div>
                		
                		</div>
                	</div>
                </div> -->
        <!-- 	</div>
        </div>
    </section> -->
    <!--== Login Page Content End ==-->
</section>

 <!--== Footer and Common js File start ==-->
<?php include('include/footer.php');?>
 <!--== Footer and Common js File end ==-->


