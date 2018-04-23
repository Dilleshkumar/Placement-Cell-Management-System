<?php
session_start();

if(isset($_POST['submit']))
{
	$name = $_SESSION['name'];
$pwd = $_POST['pwd'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];

    $con = mysqli_connect('localhost','root','') or die(mysql_error());
	$db = mysqli_select_db($con,'placement_cell_iiitg') or die(mysql_error());
	//$id = $_POST['id'];
	if($fname!=''&&$sname!='' && $lname!='' )
 {
   $res=mysqli_query($con,"select * from login_details  where user_name='$name' and admn_status='0'") or die(mysqli_error($con));
$check = mysqli_fetch_array($res);
if(isset($check)){
	$res = mysqli_query($con,"UPDATE student set f_name='$fname',s_name='$sname',l_name='$lname'
                            where s_id=$name") or die(mysqli_error($con));
							$_SESSION['success']= "Name updated succeessfully";
}
else{
	$_SESSION['error']="Some Error has occured";
}

}


if($gender!='' )
 {
   $res=mysqli_query($con,"select * from login_details  where user_name='$name' and admn_status='0'") or die(mysqli_error($con));
$check = mysqli_fetch_array($res);
if(isset($check)){
	$res = mysqli_query($con,"UPDATE student set gender='$gender'
                            where s_id=$name") or die(mysqli_error($con));
							$_SESSION['success1']= "Gender updated succeessfully";
}
else{
	$_SESSION['error1']="Some Error has occured";
}

}


if($dob!='' )
 {
   $res=mysqli_query($con,"select * from login_details  where user_name='$name' and admn_status='0'") or die(mysqli_error($con));
$check = mysqli_fetch_array($res);
if(isset($check)){
	$res = mysqli_query($con,"UPDATE student set date_of_birth='$dob'
                            where s_id=$name") or die(mysqli_error($con));
							$_SESSION['success2']= "DOB updated succeessfully";
}
else{
	$_SESSION['error2']="Some Error has occured";
}

}

  
 
 
 
 
 
 }
?>


<!DOCTYPE HTML>

<html>

	<head>
		<title> </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.slidertron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt skel-layers-fixed">
				<h1 font-size: 32px;><a href="#">Placement Cell <span>Indian Institute of Information Technology Guwahati</span></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="studentintro.php">Home</a></li>
						
						
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner" style="padding : 14em 0;">
				<div class="inner" style="margin-bottom:45px;">
					
					<p align="center" style="    margin-bottom: 7px;
">Update Personal Details</p>
					<div class="row" align="center">
						<div class="col-md-2">
						<form action="stuupdatepersonal.php" method="POST" style="margin-left: 560px;">
							<div class="form-login">
						
							<h4 style="color:forestgreen;"><?php if( isset($_SESSION['success']) )
{
        echo $_SESSION['success'];

        unset($_SESSION['success']);

}?></h4>
							<h4 style="color:red;"><?php if( isset($_SESSION['Error']) )
{
        echo $_SESSION['Error'];

        unset($_SESSION['Error']);

}?></h4>


							<input type="text" id="userName" class="form-control input-sm chat-input" name='fname' placeholder="Firstname"   style="padding-left: 45px;"/>
							</br>
							
							<input type="text" id="userName" class="form-control input-sm chat-input" name='sname' placeholder="Secondname" required  style="padding-left: 45px;"/>
							</br>
							<input type="text" id="userName" class="form-control input-sm chat-input" name='lname' placeholder="Lastname" required  style="padding-left: 45px;"/>
							</br>
							
							<h4 style="color:forestgreen;"><?php if( isset($_SESSION['success1']) )
{
        echo $_SESSION['success1'];

        unset($_SESSION['success1']);

}?></h4>
							<h4 style="color:red;"><?php if( isset($_SESSION['Error']) )
{
        echo $_SESSION['Error1'];

        unset($_SESSION['Error1']);

}?></h4>
							
							
							
							
							<select name="gender" style="padding-left: 45px;" >
  <option value="notselected">Gender</option>
  
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Others">Others</option>
</select>
							</br>
							
							
							<h4 style="color:forestgreen;"><?php if( isset($_SESSION['success2']) )
{
        echo $_SESSION['success2'];

        unset($_SESSION['success2']);

}?></h4>
							<h4 style="color:red;"><?php if( isset($_SESSION['Error2']) )
{
        echo $_SESSION['Error2'];

        unset($_SESSION['Error2']);

}?></h4>
							
							<input type="text" id="userName" class="form-control input-sm chat-input" name='dob' placeholder="DOB"   style="padding-left: 45px;"/>
							</br>
							
							
							<div class="" style="margin-top: 17px;">
							<span class="group-btn">     
								<input class="btn btn-primary btn-md" type="submit" name="submit" value="submit">
								

							</span>
							</div>
							</div>
						</form>
						</div>
					</div>
				</div>
				
				
			</section>

		
			
		
	</body>
</html>
