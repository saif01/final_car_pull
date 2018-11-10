<?php 
include('../db/config.php');

if(!empty($_POST["check_location"])) 
{
	$check_location= $_POST["check_location"];
	
		$result =mysqli_query($con,"SELECT `location` FROM `location` WHERE `location`='$check_location' ");
		$count=mysqli_num_rows($result);
		if($count>0)
		{
		echo "<span style='color:red'> Name already exists .</span>";
		 echo "<script>$('#submit').prop('disabled',true);</script>";
		} 
		else
		{
			
			echo "<span style='color:green'> Name available for Add .</span>";
		    echo "<script>$('#submit').prop('disabled',false);</script>";
		}
}

?>