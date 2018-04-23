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
   // header('location:studentintro.php');
	echo "<script>window.location.href='studentintro.php'</script>";
   }
  
  
   else 
   {
     $_SESSION['Error']="Incorrect Details!!";
   }
 }
 else
 {
  echo'Enter both username and password';
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
				<h1 font-size: 32px;><a href="index.php">Placement Cell <span>Indian Institute of Information Technology Guwahati</span></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>
							<a href="" class="icon fa-angle-down">Login as</a>
							<ul>
								<li><a href="temp.php">Student</a></li>
								<li><a href="adminlogin.php">Administrator</a></li>
								<li><a href="companylogin.php">Organisation</a></li>
								
							</ul>
						</li>
						
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2>Welcome to IIITG's Placement Cell</h2>
					<p align="center" style="margin-bottom: 11px;">Student Log In</p>
					<div class="row">
						<div class="col-lg-2">
						<form action="temp.php" method="POST">
							<div class="form-login" style="    margin-left: 583px;">
						
							<h4 style="color:red;"><?php if( isset($_SESSION['Error']) )
{
        echo $_SESSION['Error'];

        unset($_SESSION['Error']);

}?></h4>
							<input type="text" id="userName" class="form-control input-sm chat-input" name='name' placeholder="Username" required  style="    padding-left: 45px;"/>
							</br>
							<input type="password" id="userPassword" class="form-control input-sm chat-input" name='pwd' placeholder="Password" required style="    padding-left: 45px;"/>
							</br>
							<div class="">
							<span class="group-btn">     
								<input class="btn btn-primary btn-md" type="submit" name="submit" value="login">
								

							</span>
							</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</section>

		
			
		
			
			
		<!-- CTA 
		
			<section id="cta" class="wrapper style3">
				<h2>Want to involve in placements ?</h2>
				<ul class="actions">
					<li><a href="#" class="button big">Get Started</a></li>
				</ul>
			</section>-->
			
			
		<!-- Footer -->
			
	</body>
</html>




