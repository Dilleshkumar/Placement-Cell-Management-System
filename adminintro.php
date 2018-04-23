

<?php
session_start();
$con = mysqli_connect('localhost','root','') or die(mysql_error());
$db = mysqli_select_db($con,'placement_cell_iiitg') or die(mysql_error());
$name = $_SESSION["name"];
//$res = mysqli_query($con,"Select o_name from organisation where o_id=$username") or die(mysql_error);
$_SESSION['name']=$name;

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
						<li><a href="adminintro.php">Home</a></li>
						
						<li>
							<a href="changepassword1.php" >Change Password</a>
							
						</li>
						<li><a href="index.php" >Logout</a></li>
					</ul>
					
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<p align="left" style="margin-left: 24px;
    margin-top: -90px;">
					Welcome Adminstrator
					</p>
					
					<ul class="actions">
					<li><a href="admin_add_stu.php" target="_blank" class="button big">Add Student</a></li>
					<li><a href="admin_add_org.php" target="_blank" class="button big">Add Organisation</a></li><br/><br/>
				<!--	<li><a href="admin_slots.php" class="button big">Add a Slot</a></li><br/><br/>-->
					<li><a href="admin_block_stu.php" target="_blank" class="button big">Block Student</a></li>
					<li><a href="admin_unblock_stu.php" target="_blank" class="button big">Unblock Student</a></li><br/><br/>
					
					
					<li><a href="admin_block_org.php" target="_blank" class="button big">Block Organisation</a></li>
					<li><a href="admin_unblock_org.php" target="_blank" class="button big">Unblock organisation</a></li><br/><br/>
					<li><a href="stu_profile_by_admin.php" target="_blank" class="button big">Check Student's Profile</a></li>
					<li><a href="org_profile_by_admin.php" target="_blank" class="button big">Check Organisation's Profile</a></li><br/><br/>
					<li><a href="adminseeshortlist.php" target="_blank" class="button big">Shortlisted Students</a></li>
					<li><a href="adminseeplacement.php" target="_blank" class="button big">Placed Students</a></li>
				<!--	<li><a href="filled_slots.php" class="button big">Show Filled Slots</a></li><br/><br/>-->
				</ul>
				</div>
			</section>	
	</body>
</html>


