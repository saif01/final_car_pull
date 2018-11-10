<?php
session_start();
error_reporting(0);
if(strlen($_SESSION['username'])==0)
  { 
header('location:index');
}
else{  

include('cal/db.php');
//$connect = new PDO('mysql:host=localhost;dbname=carPull', 'root', '123456');
$car_id= $_GET['car_id'];

$username= $_SESSION['username'];
$user_id= $_SESSION['user_id'];

 //echo $user_id . $username ;
 

// Car info fetch data from database by Car id......... 

$query2="SELECT  `car_name`, `car_namePlate`, `car_img1` FROM `tbl_car` WHERE `car_id` = '$car_id' ";

$statement2 = $connect->prepare($query2);

$statement2->execute();

$result2 = $statement2->fetchAll();

// echo "<pre>";
// print_r($result2);

foreach($result2 as $row2)

$car_name = $row2['car_name'];
$car_number=$row2['car_namePlate'];
$car_img=$row2['car_img1'];


// For Load data for show on calender.......................
$data = array();



$query = "SELECT * FROM `car_booking` WHERE `car_id` = '$car_id' and `boking_status`=1 ORDER BY `booking_id` ";

//$query = "SELECT * FROM car_booking ORDER BY booking_id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["booking_id"],
  //'title'   => $row["car_name"].' Car Number--'. $row["car_number"] ,
  'title' => $row["location"].'--'. $row["user_name"],
  'start'   => $row["start_date"],
  'end'   => $row["end_date"],
  
  
 );
}


  ?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>CPBCarPull</title>
    <link rel="icon" type="img/png" href="img/logo.png"/>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

<?php include('include/manu.php');?>
  

 <body>
  <br />
  <h3 align="center"><a href="#">Calender View Of <b> <?php echo $row["car_name"]; ?></b> Car Number <b> <?php echo $row["car_number"]; ?></b> Booking Information </a></h3>
  <br />
            <div class="container">

             <div id="calendar"></div>

            </div>


 
<script>
   
  $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    editable:true,
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay'
    },
    //events: 'cal/load.php',
    events: <?php echo json_encode($data); ?>,
    selectable:true,
    selectHelper:true,



    select: function(start, end, allDay)
    {
     var title = prompt("Enter Location Title");
     if(title)
     {
      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");


      var user_id= '<?php echo $user_id; ?>';
      var username= '<?php echo $username; ?>';
      var car_id= '<?php echo $car_id; ?>';
      var car_name= '<?php echo $car_name; ?>';
      var car_number= '<?php echo $car_number; ?>';
      var car_img= '<?php echo $car_img; ?>';
      var booki_st=1;

      
      $.ajax({
       url:"cal/insert.php",
       type:"POST",

       data:{title:title, start:start, end:end, car_id:car_id, car_name:car_name, car_number:car_number, car_img:car_img, user_id:user_id, username:username,booki_st:booki_st },
     success: function(rep) {
          if(rep == 'Ok')
          {
            alert('You can not book more than 7 days !!!!');
            location.reload(); 
          }

          else if(rep == 'OK2') 
          {
            alert('This Car Already Booked At this Date !!!!');
            location.reload();  
          }

          else
          {
            alert('Car booked Successfull ...');
            location.reload(); 
          }
        }

      })
     }
    },
    editable:true,
    eventResize:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
    var car_id= $car_id;

    

     $.ajax({
      url:"cals/update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id,  },
      success:function(){
       calendar.fullCalendar('refetchEvents');
       alert('Event Update');
      }
     })
    },

    eventDrop:function(event)
    {
      
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"cal/update.php",
      
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function()
      {
       calendar.fullCalendar('refetchEvents');
       alert("Event Updated");
      }
     });
    },

    eventClick:function(event)
    {
     if(confirm("Are you sure you want to remove it?"))
     {
      var id = event.id;
      $.ajax({
       url:"delete.php",
       type:"POST",
       data:{id:id},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Event Removed");
       }
      })
     }
    },

   });
  });
   
  </script>




<!--== Footer Area Start ==-->
    <section id="footer-area">
       

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>
Copyright &copy;<script>document.write(new Date().getFullYear()); </script> C.P.Bangladesh<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank"> </a> CPB.
</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="Syful-IT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
</body>

</html>

<?php } ?>

