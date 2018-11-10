<?php include('../db/config.php');
require('../assets/coustom/UserInfo.php');

session_start();
error_reporting(0);

if(isset($_POST['submit']))
{
    $adminName=$_POST['adminName'];
    $password=$_POST['password'];

$ret=mysqli_query($con,"SELECT `admin_id`, `admin_name`, `admin_password`, FROM `admin` WHERE `admin_name` = '$adminName' AND `admin_password` = '$password' ");
   
$num=mysqli_fetch_array($ret);

print_r($num);
exit();


if($num>0)
{   
                        
                        $_SESSION['adminName']=$_POST['adminName'];
                        $_SESSION['id']=$num['id'];
                        $ip= UserInfo::get_ip();
                        $os= UserInfo::get_os();
                        $browser= UserInfo::get_browser();
                        $device= gethostname();
                              
                        //$hostname=$_ENV['COMPUTERNAME'];                      
                        $status=1;

                        $log=mysqli_query($con,"INSERT INTO `loginlog`(`user_name`, `user_id`, `user_ip`, `user_os`, `user_browser`, `user_device`) VALUES ('".$_SESSION['adminName']."','".$_SESSION['id']."','$ip','$os','$browser','$device')");
                                        
                         header("Location: index");
                        exit();			

				}
else
    {
        $_SESSION['errmsg']="Invalid adminName or password";       
        $_SESSION['adminName']=$_POST['adminName'];
      
         $ip= UserInfo::get_ip();
         $os= UserInfo::get_os();
         $browser= UserInfo::get_browser();
         $device= UserInfo::get_device();
                               
         $log=mysqli_query($con,"INSERT INTO `loginlog`(`user_name`, `user_ip`, `user_os`, `user_browser`, `user_device`) VALUES ('".$_SESSION['adminName']."','$ip','$os','$browser','$device')");

         header("location: login");
        exit();
       
     }

}

?>