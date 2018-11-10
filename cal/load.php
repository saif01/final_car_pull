<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=carPull', 'root', '123456');

$data = array();

$query = "SELECT * FROM car_booking ORDER BY booking_id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["booking_id"],
  'title'   => $row["car_name"],
  'start'   => $row["start_date"],
  'end'   => $row["end_date"]
 );
}

echo json_encode($data);

?>


