<?php
session_start();
error_reporting(0);
if(strlen($_SESSION['username'])==0)
  { 
header('location:index');
}
else{  ?>


<?php include('include/header.php');?>
    <?php include('include/manu.php');?>
    <?php include('db/config.php');?>

    
    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                           <?php
                           $query=mysqli_query($con,"SELECT * FROM `tbl_car`");
                    while($row=mysqli_fetch_array($query))
                    {        ?>

                            <!-- Single Car Start -->
                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                    <div class="car-list-thumb">
                                       
                                      <a href="car-details.php?car_id=<?php echo htmlentities($row['car_id']);?> ">  <img src="admin/p_img/carImg/<?php echo($row['car_img1']);?>" class="img-responsive" alt="Image" /></a>
                                  
                                    
                                </div>

                                    <div class="car-list-info without-bar">
                                        <h2><a href="#"><?php echo $row['car_name']; ?></a></h2>
                                        <!-- <h5>39$ Rent /per a day</h5> -->
                                        <p><?php echo $row['car_remarks'];  ?></p>
                                        
                                       <!--  <ul class="car-info-list">
                                            <li><?php $st = $row['car_aircobdition']; 
                                            if ($st==1) {
                                                echo "Aircondition";
                                            }else{echo "No";}

                                             ?></li>
                                            <li><?php echo $row['car_type'];?> Type</li>
                                            <li><?php $st = $row['car_power_doorLock']; 
                                            if ($st==1) {
                                                echo "Power Door Lock";
                                            }else{echo "No";}

                                             ?></li>
                                        </ul> -->
                                        
                                        <a href="car-booking.php?car_id=<?php echo htmlentities($row['car_id']);?>"><button type="button" class="book-now-btn"><i class="icon-zoom-in"></i> Book Car</button></a>

                                        <a href="calendar-view2.php?car_id=<?php echo htmlentities($row['car_id']);?>"><button type="button" class="book-now-btn"><i class="icon-zoom-in"></i> Booked Info</button></a>
<?php    
$car_id=$row['car_id'];     
 $query2=mysqli_query($con,"SELECT `driver_id` FROM `car_driver` WHERE `car_id`=$car_id ");
while($row2=mysqli_fetch_array($query2))
                    {
 ?>

                                        <a href="driver-details.php?driver_id=<?php echo htmlentities($row2['driver_id']);?>"><button type="button" class="book-now-btn" style="margin-left: "><i class="icon-zoom-in"></i> Driver</button></a>

                                    <?php }?>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Car End -->
<?php }?>
                            

                          
                            
                        </div>
                    </div>

                  
                </div>
                <!-- Car List Content End -->
            </div>
        </div>
    </section>
    <!--== Car List Area End ==-->

 <!--== Footer and Common js File start ==-->
<?php include('include/footer.php'); ?>
 <!--== Footer and Common js File end ==-->

 <?php } ?>