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


                <script>
                    function show() {
                        var selectBox = document.getElementById('time_show');
                        var userInput = selectBox.options[selectBox.selectedIndex].value;
                        if (userInput == 'show') {
                            document.getElementById('Hardwared').style.display = 'block';
                            document.getElementById('Application').style.display = 'none';


                        }  else {
                            document.getElementById('Hardwared').style.display = 'none';
                            

                        }

                        return false;


                    }

                </script>

<style type="text/css">
   .round-saif{
                                                    border-radius: 25px;
                                                background: #73AD21;
                                                padding: 2px; 
                                                width: 220px;
                                                height: 170px;
                                                margin-left: 20px

                                                }
                                                .p-saif{
                                                    background-color: #908E8D;
                                                     color:white;
                                                      border-radius: 20px;
                                                       text-align: center;
                                                       margin-bottom: 2px;
                                                }

</style>

    

 <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">

        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">

                       <!-- Single Car Start -->
                        <div class="single-car-wrap">
                            <div class="row">

                                <?php
                           $query=mysqli_query($con,"SELECT * FROM `tbl_car`");
                    while($row=mysqli_fetch_array($query))
                    {
                         ?>
                                <!-- Single Car Thumbnail -->
                                <div class="col-lg-5">
                                    <div class="car-list-thumb">
                                        
                                        <a href="car-details.php?car_id=<?php echo htmlentities($row['car_id']);?> ">  <img src="admin/p_img/carImg/<?php echo($row['car_img1']);?>" class="img-responsive" alt="Image" height="" width="" /></a>
                                    </div>
                                </div>
                                <!-- Single Car Thumbnail -->

                                <!-- Driver Info start -->
                         <div class="col-lg-3">
                                       
                            <p class="p-saif">Driver</p>
                                       <a href="#"> <img  src="assets/img/driver/driver-1.jpg" alt="JSOFT" height="200" width="200" class="round-saif"></a> <hr>

                                <p class="p-saif">name</p> 
                                <p class="p-saif">Phone number</p>

                        </div>
                                <!-- Driver Info end -->

                                <!-- Single Car Info -->
                                <div class="col-lg-4">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="car-list-info">
                                                <h2><a href="car-details.php?car_id=<?php echo htmlentities($row['car_id']);?>"> <?php echo $row['car_name'];  ?></h2> </a>

            <div >   
                            <form action="booking-action.php" method="POST">
                                <div class="name">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label >Start DATE:
                                    <input type="date"  name="start_date"  />
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Return DATE: 
                                        <input type="date"  name="end_date"  />
                                            </label>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Type: 
                                        <select name="for_car" class="" id="time_show" onChange="return show();" >
                                                <option value="pick">Full day </option>   
                                                <option value="pick">Manual Input </option>
                                        </select>

                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="name">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label >From location:
                                   <input type="text"  name="form_location" placeholder="Where You Go" />
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>To location: 
                                        <input type="text"  name="to_location" placeholder="Where You Go" />
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>


                                <div class="name" style=" display: ">
                                    <div class="row">
                                        <div >
                                            <label >Start time
                                    <select name="start_time"> 
                                            <option value="09:00:00">9.00 AM </option>
                                            <option value="09:30:00">9.30 AM </option>
                                            <option value="10:00:00">10.00 AM </option>
                                            <option value="10:30:00">10.30 AM </option>
                                            <option value="11:00:00">11.00 AM </option>
                                            <option value="11:30:00">11.30 AM </option>
                                            <option value="01:00:00">1.00 PM </option>
                                            <option value="01:00:00">1.30 PM </option>
                                            <option value="02:00:00">2.00 PM </option>
                                            <option value="02:30:00">2.30 PM </option>
                                            <option value="03:00:00">3.00 PM </option>
                                            <option value="03:30:00">3.30 PM </option>
                                            <option value="04:00:00">4.00 PM </option>
                                            <option value="04:30:00">4.30 PM </option>
                                            <option value="05:00:00">5.00 PM </option>
                                            <option value="05:30:00">5.30 PM </option>
                                            <option value="06:00:00">6.00 PM </option>
                                                                                  
                                         </select>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Return Time: 
                                        <select name="return_time"> 
                                            <option value="09:00:00">9.00 AM </option>
                                            <option value="09:30:00">9.30 AM </option>
                                            <option value="10:00:00">10.00 AM </option>
                                            <option value="10:30:00">10.30 AM </option>
                                            <option value="11:00:00">11.00 AM </option>
                                            <option value="11:30:00">11.30 AM </option>
                                            <option value="01:00:00">1.00 PM </option>
                                            <option value="01:00:00">1.30 PM </option>
                                            <option value="02:00:00">2.00 PM </option>
                                            <option value="02:30:00">2.30 PM </option>
                                            <option value="03:00:00">3.00 PM </option>
                                            <option value="03:30:00">3.30 PM </option>
                                            <option value="04:00:00">4.00 PM </option>
                                            <option value="04:30:00">4.30 PM </option>
                                            <option value="05:00:00">5.00 PM </option>
                                            <option value="05:30:00">5.30 PM </option>
                                            <option value="06:00:00">6.00 PM </option>
                                                                                  
                                         </select>
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>




                                <div class="log-btn">                                 
                                    <button type="submit"  name="submit" class="fa fa-check-square"> Book Car</button>
                                </div>
                            </form>
                       </div>
                                               
                                
                                                
                                                <!-- <a href="#" class="rent-btn">Book It</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Car info -->
                                
                         <?php }?>

                            </div>
                        </div>
                        <!-- Single Car End -->
                    

                        



            </div> <!-- End Row -->


</div>

</div>

        </div>
    </section>
    <!--== Car List Area End ==-->
    <!--== Car List Area End ==-->

 <!--== Footer and Common js File start ==-->
<?php include('include/footer.php'); ?>
 <!--== Footer and Common js File end ==-->

 <?php } ?>