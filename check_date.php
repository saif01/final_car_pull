<?php
$currentTime = date('Y-m-d'); 

if(!empty($_POST["check_value"])) 
{
	$check_value= $_POST["check_value"];
	
		
		
		if(date('$check_value') < date('$currentTime') )
		{
		echo "<span style='color:red'> You Cannot Book Previous Date .</span>";
		 echo "<script>$('#submit').prop('disabled',true);</script>";
		} 
		else
		{
			
			echo "<span style='color:green'> This date is updated from Now .</span>";
		    echo "<script>$('#submit').prop('disabled',false);</script>";
		}
}


 


?>