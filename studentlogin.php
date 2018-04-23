<html>
<head>
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
 h2
 {
color : black;
font-size : 22px;	 
 }
</style>
</head>
<div class="header">
<img src="download.png" alt="IIITG" height="250" width="252">
<h1 style=font-size:75px>INDIAN INSTITUTE OF INFORMATION TECHNOLOGY</h1>
</div>
<body>
<h1 style=font-size:35px> Student Login<h1>
<form action='#' method='post'>
<table cellspacing='5' >
<tr><tr><tr><td><h2>User name:</td><td><input type='text' name='name'/></h2></td></tr></tr></tr>
<tr><td><h2>Password:</td><td><input type='password' name='pwd'/></h2></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>

</form>
<form>
<div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    
  </div>
</form>
<?php
session_start();
if(isset($_POST['submit']))
{
$con = mysqli_connect('localhost','root','') or die(mysql_error());
$db = mysqli_select_db($con,'placement_cell_iiitg') or die(mysql_error());
 $name=$_POST['name'];
 $pwd=$_POST['pwd'];
 if($name!=''&&$pwd!='')
 {
   $res=mysqli_query($con,"select * from login_details where user_name='".$name."' and password='".$pwd."'and admn_status='0'") or die(mysqli_error($con));
   $check = mysqli_fetch_array($res);
   if(isset($check))
   {
    $_SESSION['name']=$name;
    header('location:studentintro.php');
   }
  
  
   else 
   {
    echo'Details Incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>
</body>
</html>