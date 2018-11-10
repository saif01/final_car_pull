<?php

//fetch.php

include('../db.php');

//$connect = new PDO('mysql:host=localhost;dbname=testing', 'root', '123456');

if(isset($_POST["year"]))
{

$year= $_POST["year"];

 //$query = " SELECT * FROM `chart_data` WHERE year = '".$_POST["year"]."' ORDER BY id ASC ";

$query = "SELECT * FROM `chart_info` WHERE `year` = '$year' ORDER BY `chart_id` ASC ";


 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'month'   => $row["month"],
   //'profit'  => floatval($row["booking_day"])
   'booking_day'  => floatval($row["booking_days"])
  );
 }
 echo json_encode($output);
}

else{

$query = "SELECT * FROM `chart_info` WHERE `year` = '2018' ORDER BY `chart_id` ASC ";


 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'month'   => $row["month"],
   //'profit'  => floatval($row["booking_day"])
   'booking_day'  => floatval($row["booking_days"])
  );
 }
 echo json_encode($output);



}



?>