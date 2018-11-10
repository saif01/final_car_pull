
<!DOCTYPE html>
<html>
<head>
	<title>excel </title>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">


</head>
<body>


<table id="example" class="display nowrap" style="width:100%">    

					<thead>
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
					</thead>
        <tbody>
     <?php
     include('../db/config.php');
     $query=mysqli_query($con,"SELECT * FROM `car_booking`");
     while($row = mysqli_fetch_array($query))  
     {  
        echo '  
       <tr>  
				 <td> '.$row["car_name"] .' </td>
				 <td> '.$row["car_number"] .' </td>
				 <td> '.$row["start_date"] .' </td>
				 <td> '.$row["end_date"] .' </td>
				 <td> '.$row["location"] .' </td>
				 <td> '.$row["day_count"] .' </td>
				 <td> '.$row["booking_cost"] .' </td>
				 <td> '.$row["user_name"] .' </td>

				 
			</tr>

        ';  
     }
     ?>

     </tbody>
    </table>
    <br />


 <!-- <form method="post" action="test2.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form> -->

<script src=" https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js "></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js "></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js "></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js "></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js "></script>

<script type="text/javascript">
	
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>





</body>
</html>



					  







