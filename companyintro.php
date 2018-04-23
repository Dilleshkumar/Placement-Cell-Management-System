
<?php
session_start();
$con = mysqli_connect('localhost','root','') or die(mysql_error());
$db = mysqli_select_db($con,'placement_cell_iiitg') or die(mysql_error());
$name = $_SESSION["name"];
$res = mysqli_query($con,"Select o_name from organisation where o_id=('$name')") or die(mysqli_error($con));
$_SESSION['message']='Welcome '. $name;
// while ($row = mysqli_fetch_assoc($res))
 //{
   // echo " Welcome  " .$row['o_name'];
 //}
$_SESSION["name"] = $name;
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
						<li><a href="companyintroindex.php" >Home</a></li>
						<li>
							<a href="changepassword.php" >Change Password</a>
							
						</li>
						<li>
							<a href="index.php" >Logout</a>
							
						</li>
						
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<p align="left" style="margin-left: 24px;"><?php
					echo $_SESSION['message'];
					?></p>
					
					<ul class="actions">
					<li><a href="showappliedlist.php" class="button big">Check Applied List</a></li>
					<li><a href="theirjobsoffered.php" class="button big">Jobs Offered</a></li><br/><br/>
					
					
					<li><a href="showshortlistedstudents.php" class="button big">Shortlist Cadidates</a></li><br/><br/>
					<li><a href="addjobbyorg.php" class="button big">Add Job</a></li><br/><br/>
					<li><a href="selectcandidates.php" class="button big">Offer Job</a></li><br/><br/>
					<li><a href="stu_profile_by_org.php" class="button big">Check Student's Profile</a></li><br/><br/>
					
				</ul>
				</div>
			</section>

	</body>
</html>



