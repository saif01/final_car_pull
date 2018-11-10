<?php
 
//insert.php
// define('DB_SERVER','localhost');
// define('DB_USER','root');
// define('DB_PASS' ,'123456');
// define('DB_NAME', 'carPull');
// $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
//$connect = new PDO('mysql:host=localhost;dbname=testing', 'root', '123456');
//include('db.php');
include('../include/config.php');


if(isset($_POST["title"]))
{
 

                $start_book=$_POST["start"];
                $end_book=$_POST['end'];
                //$car_id=$_POST['car_id'];

                $car_id = $_POST['car_id'];
                $user_id=$_POST['user_id'];
                $username=$_POST['username'];
                $car_name = $_POST['car_name'];
                $car_number =$_POST['car_number'];
                $car_img =$_POST['car_img'];
                //$start_event =$_POST['start'];
                //$end_event = $_POST['end'];
                $location= $_POST['title'];
                $booki_st=$_POST['booki_st'] ; 


    //Start Time Subtraction and convert to days.
        $ts1    =   strtotime($start_book);
        $ts2    =   strtotime($end_book);
        $seconds    = abs($ts2 - $ts1); # difference will always be positive
        $days = round($seconds/(60*60*24));
        //$days2 = $seconds/(60*60*24);
  //Start Time Subtraction and convert to days.


        if ($days >= 7)
         {
         die ('Ok');                 
         }

        else{

              // $sql=mysqli_query($con,"SELECT * FROM `car_booking` WHERE `car_id` ='$car_id' AND (`start_date` BETWEEN '$start_book' AND '$end_book' OR `end_date` BETWEEN '$start_book' AND '$end_book')");

              // $result=mysqli_num_rows($sql);

              // if ($result > 0) {
              //   die ('OK2');
              //    }

              // else{

                  $query =mysqli_query($con, "INSERT INTO `car_booking`(`car_id`, `user_id`, `user_name`, `car_name`, `car_number`, `car_img`, `start_date`, `end_date`, `location`, `day_count`, `boking_status`) VALUES ('$car_id','$user_id','$username','$car_name','$car_number','$car_img','$start_book','$end_book','$location','$days','$booki_st')");

                   //}
        
          }

}
?>

