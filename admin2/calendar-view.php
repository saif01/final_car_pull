<?php
session_start();
error_reporting(0);
if(strlen($_SESSION['adminName'])==0)
  { 
header('location:login');
}
else{  

include('../db/config.php');

include('../db/calDB.php');

$query = "SELECT * FROM `car_booking` ORDER BY `booking_id` ";

//$query = "SELECT * FROM car_booking ORDER BY booking_id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["booking_id"],
  'title'   => $row["car_name"].'--'. $row["car_number"].' - '. $row["user_name"] ,
  //'title' => $row["location"],
  'start'   => $row["start_date"],
  'end'   => $row["end_date"],
  
 );
}


	?>

	<!-- All header link -->
<?php include('include/header.php');?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>



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
				<li><a href="#">Calendar View</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Reports</h2>
						<!-- <div class="box-icon">
							
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div> -->
					</div>
					<div class="box-content">


						<div id="calendar_s"></div>



		
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


	<!-- end: Content -->
		</div><!--/#content.span10-->
		
	
	<script>
   
  $(document).ready(function() {
   var calendar = $('#calendar_s').fullCalendar({
    editable:true,
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay'
    },
    //events: 'cal/load.php',
    events: <?php echo json_encode($data); ?>,
    //selectable:true,
    //selectHelper:true,

   });
  });
   
  </script>
	
	<!-- start: JavaScript-->



	<?php include('include/footer.php');?>
	
	<?php } ?>