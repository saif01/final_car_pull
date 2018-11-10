<?php

if (isset($_POST['submit'])) {

// two input value concatenate
$start_time= $_POST['start_date'] . ' ' . $_POST['start_time'];
$end_time= $_POST['end_date'] . ' ' . $_POST['return_time'];



echo $start_time . "</br>"; 
echo $end_time . "</br>";	




}



?>