<?php
$db_host = 'localhost'; 
$db_user = 'root'; 
$db_pass = ''; 
$db_name = 'placement_cell_iiitg'; 


$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$res = "Select pdf from student where s_id='1601023'";
$query = mysqli_query($con,$res);
echo $query;


?>