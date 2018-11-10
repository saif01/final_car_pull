<?php
session_start();
error_reporting(0);
if(strlen($_SESSION['adminName'])==0)
  { 
header('location:login');
}
else{ 
include('../db/config.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>CPB.CarPull</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="images/favicon.png" />
    </head>

    <body>
        <div class="container-scroller">
            <!-- partial:../../partials/_navbar.html -->
            <?php include('common/navbar.php'); ?>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">

                <!-- partial:partials/_sidebar.html -->
                <?php include('common/sidebar.php'); ?>
                <!-- partial -->
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">


                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <!--  <h4 class="card-title">All User Information </h4> -->
                                        <button class="card-title btn btn-outline btn-block ">All User Information</button>
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Phone</th>
                                                        <th>Office ID</th>

                                                        <th>Actions</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
		$query=mysqli_query($con," SELECT * FROM `user`");
		while($row=mysqli_fetch_array($query))
		{

?>
                                                    <tr>

                                                        <td> <img src="p_img/userImg/<?php echo($row['user_img']);?>" class="img-responsive" alt="Image" height="50" width="50" /> </td>
                                                        <td class="center">
                                                            <?php echo htmlentities($row['user_name']) ; ?>
                                                        </td>
                                                        <td class="center">
                                                            <?php echo htmlentities($row['user_contract']); ?>
                                                        </td>
                                                        <td class="center">
                                                            <?php echo htmlentities($row['user_officeId']); ?>
                                                        </td>

                                                        <td class="center">
                                                            <?php
                                         if($row['user_status']==1)
                                         {?>
                                                                <a href="user-status.php?h_user_id=<?php echo htmlentities($row['user_id']);?>" onclick="return confirm('Are you sure you want to Deactive this ** User **?');"><button class="btn btn-primary"> <i class="icon-ok-circle"> Active</i></button>
                                            
                                        <?php } else {?>

                                            <a href="user-status.php?s_user_id=<?php echo htmlentities($row['user_id']);?>" onclick="return confirm('Are you sure you want to Active this ** User **?');"><button class="btn btn-danger"><i class="icon-ban-sign"> Deactive </i></button> 
                                            <?php } ?>
                                          

								</td>
								<td class="center">
									
                                                                <a href="user-delete.php?user_id=<?php echo $row['user_id']?>" onClick="return confirm('Are you sure you want to delete???')"><button type="button" class="btn btn-danger" ><i class="icon-remove-sign"> Delete</i></button></a>
                                                                </a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    <footer class="footer">
                        <?php include('common/footer.php') ?>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="vendors/js/vendor.bundle.base.js"></script>
        <script src="vendors/js/vendor.bundle.addons.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <!-- End custom js for this page-->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                var table = $('#example').DataTable({
                    // lengthChange: false,
                    // buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
                });

                // table.buttons().container()
                //     .appendTo( '#example_wrapper .col-md-6:eq(0)' );
            });
        </script>


    </body>
    </html>

    <?php } ?>