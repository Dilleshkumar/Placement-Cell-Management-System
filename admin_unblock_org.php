<html>
<body>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:blue;
  font-size:22px;
  text-align:center;
 }
 button {
  background-color: #555555;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>

<div class="header">
<img src="download.png" alt="IIITG" height="250" width="252">
<h1 color="blue" style=font-size:75px>INDIAN INSTITUTE OF INFORMATION TECHNOLOGY</h1>
</div>

<body>
<h1 style=font-size:35px>Unblock an Organisation<h1>
<form action='#' method='post'>
<table cellspacing='5' align='center'>
<tr><td><h2>Enter Organisation ID : </td><td><input type='text' name='id'/></h2></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>

</table>
</form>

<?php
session_start();
if(isset($_POST['submit']))
{
    $con = mysqli_connect('localhost','root','') or die(mysql_error());
	$db = mysqli_select_db($con,'placement_cell_iiitg') or die(mysql_error());
	$id = $_POST['id'];
	
	
	//$ad = $_POST['ad'];
	if($id!='')
 {
   $res=mysqli_query($con,"update login_details set admn_status='2' where user_name=$id and admn_status='4'") or die(mysqli_error($con));
   //$res1 = mysqli_query($con,"insert into student values ($id,null,null,null,null,null,null,null,null)") or die(mysqli_error($con));
  
  
 }
}
 else 
 {
	 echo "Enter data";
 }
 
   ?>