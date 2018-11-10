
<?php

include('../db/config.php');
$output='';

if (isset($_POST['export'])) {
	
$query3=mysqli_query($con,"SELECT * FROM `car_booking`");


// if(mysqli_num_rows($query3) > 0)
// {

	$output .='

<table class="table" bordered="1">
							<tr>
								  <th>Name</th>
								  <th>Number</th>
								  <th>Booking Starts</th>
								  <th>Booking Ends</th>
								  <th>Location</th>
								  <th>Days</th>
								  <th>Cost</th>
								  <th>User Name</th>
							</tr>

						';
		while ($row3=mysqli_fetch_array($query3)) {
			
			$output .='

			<tr>  
				 <td> '.$row3["car_name"] .' </td>
				 <td> '.$row3["car_number"] .' </td>
				 <td> '.$row3["start_date"] .' </td>
				 <td> '.$row3["end_date"] .' </td>
				 <td> '.$row3["location"] .' </td>
				 <td> '.$row3["day_count"] .' </td>
				 <td> '.$row3["booking_cost"] .' </td>
				 <td> '.$row3["user_name"] .' </td>

				 
			</tr>

		';
$output .='</table>';

header("Content-Type: application/xls");
header("Content-Disposition:attachment, filename=download.xls");
echo $output;



			//}

		}

	}




?>