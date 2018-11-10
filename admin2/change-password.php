<?php
session_start();
error_reporting(0);
if(strlen($_SESSION['adminName'])==0)
  { 
header('location:login');
}
else{  ?>

<?php
include('../db/config.php');



if(isset($_POST['submit']))
{

$adminName=$_SESSION['adminName'];
$password= $_POST['password'];
$newpassword= $_POST['newpassword'];

$sql=mysqli_query($con,"SELECT * FROM `admin` WHERE `admin_name`='$adminName' AND `admin_password`='$password'");

$num=mysqli_fetch_array($sql);

//print_r($num);


if($num>0)
    {
        $con=mysqli_query($con,"UPDATE `admin` SET `admin_password`='$newpassword' WHERE `admin_name`='$adminName' ");

        $successmsg="Password Changed Successfully !!";
    }
else
    {
        $errormsg="Old Password not match !!";
    }


 } ?>

<?php include('include/header.php');?>

<script type="text/javascript">
            function valid() {
                if (document.chngpwd.password.value == "") {
                    alert("Current Password Filed is Empty !!");
                    document.chngpwd.password.focus();
                    return false;
                } else if (document.chngpwd.newpassword.value == "") {
                    alert("New Password Filed is Empty !!");
                    document.chngpwd.newpassword.focus();
                    return false;
                } else if (document.chngpwd.confirmpassword.value == "") {
                    alert("Confirm Password Filed is Empty !!");
                    document.chngpwd.confirmpassword.focus();
                    return false;
                } else if (document.chngpwd.newpassword.value != document.chngpwd.confirmpassword.value) {
                    alert("Password and Confirm Password Field do not match  !!");
                    document.chngpwd.confirmpassword.focus();
                    return false;
                }
                return true;
            }
        </script>


</head>
<body>
	
	<?php include('include/sidebar.php');?>
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="#" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">User Registration</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Registration Form</h2>
						
					</div>

					<div class="box-content">

						<form class="form-horizontal" action="" method="post" name="chngpwd" onSubmit="return valid();">
						  <fieldset>

                <?php if($successmsg)
                      {?>
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <b>Well done!</b>
                                    <?php echo htmlentities($successmsg);?>
                                </div>
                                <?php }?>

                                <?php if($errormsg)
                      {?>
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <b>Oh snap!</b> </b>
                                    <?php echo htmlentities($errormsg);?>
                                </div>
                                <?php }?>
						

							<div class="control-group">
							  <label class="control-label" for="typeahead">Current Password </label>
							  <div class="controls">
								<input class="span6 typeahead" type="Password" name="password" placeholder="Enter Current Password" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead"> New Password </label>
							  <div class="controls">
							  	
								<input class="span6 typeahead" type="Password" name="newpassword" placeholder="Enter New Password">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Retype Password</label>
							  <div class="controls">
								<input class="span6 typeahead" type="password" name="confirmpassword" placeholder=" Retype New Password" >
							  </div>
							</div>


							
		
							<div class="form-actions">
							  <button type="submit" name="submit" class="btn btn-primary">User Register</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>


				</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			
			
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	
	<div class="clearfix"></div>
	
	<?php include('include/footer.php') ?>
	
	<?php } ?>
