<?php
session_start();
$con = mysqli_connect('localhost','root','') or die(mysql_error());
$db = mysqli_select_db($con,'placement_cell_iiitg') or die(mysql_error());
$name = $_SESSION["name"];

//echo "$res";
 $_SESSION['name']=$name;
  $_SESSION['message'] = " Welcome ".$name;
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
		<script>
function myFunction()
{
alert(php :
echo "fuck u";
); // this is the message in ""
}
</script>
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
							<a href="companyintro.php" >Placements</a>
							
						</li>
						
						<li>
							<a href="" class="icon fa-angle-down">Update</a>
							<ul>
								
								<li><a  target='_blank' href="companyupdatepersonal.php">Personal Details</a></li>
								<li><a target='_blank' href="companyupdateemail.php">Email</a></li>
								
								
								
								
								
							</ul>
						</li>
						 <li><a href="index.php" >Logout</a></li>
						
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<p align="left" style="margin-left: 24px; text-transform : uppercase;
    margin-top: -90px;">
					<?php 
        echo $_SESSION['message'];
?>
					</p>
					<h4 style="font-size: 30px;">Welcome to IIITG's Placement cell</h4>
					<p>Get ready for the development</p>
					<ul class="actions">
						<li><a href="IIITG_CRF_2017_18.pdf" target="_blank" class="button big scrolly">Register</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="container">
					<header class="major">
						<h2>About IIITG</h2>
						<p>Indian Institute of Information Technology Guwahati (IIITG) is an institution of National Importance under an <br />
						Act of Parliament (THE INDIAN INSTITUTES OF INFORMATION TECHNOLOGY (PUBLIC-PRIVATE PARTNERSHIP) ACT, 2017.<br/>
						It offers B Tech courses in Electronics and Communication Engineering (ECE) and Computer Science Engineering (CSE),<br/>
						and runs PhD programmes in ECE, CSE, Mathematics, and Humanities and Social Sciences (HSS).<br/>
						IIITG started operations in August 2013 with B.Tech programmes in CSE and ECE. The first batch of B. Tech students completed their programme in May 2017. 
						PhD programmes were started in 2015.	</p>

					</header>
					<div class="slider">
						<span class="nav-previous"></span>
						<div class="viewer">
							<div class="reel">
								<div class="slide">
									<img src="images/1449141321Capture.JPG" alt="" />
								</div>
								<div class="slide">
									<img src="images/pm.jpg" alt="" />
								</div>
								<div class="slide">
									<img src="images/c_2.jpg" alt="" />
								</div>
							</div>
						</div>
						<span class="nav-next"></span>
					</div>
				</div>
			</section>
			
					
					
				</div>
			</section>
			<section id="three" class="wrapper style1">
				<div class="container">
					<header class="major">
						<h2>From Director's Desk</h2>
						<p>It is my pleasure to invite all organizations to visit IIIT Guwahati and participate in our campus placement season.<br/> IIIT Guwahati is one of the twenty IIITs set up by the Govt. of India in partnership with State Govt <br/>and corporate partners. IIITG has as its partners, the Govts of India and Assam, TCS, Srei Infrastructure Finance,<br/> Oil India, and Amtron. In the four years of our existence we have been able to create a teaching and research environment as good as the best in the country.<br/> Our Syllabi takes the best from the IIIT and IIT systems and from world-wide trends. We have 35 faculty, 31 of whom have PhDs from IITs,<br/> other leading Institutions of the country, and from Universities abroad. </p>
					</header>
			</section>		
		<!-- CTA -->
			<section id="cta" class="wrapper style3">
				<h2>Want to involve in placements ?</h2>
				<ul class="actions">
					<li><a href="#" class="button big">Get Started</a></li>
				</ul>
			</section>
			
		<!-- Footer -->
			<footer id="footer" style="margin-top: -35px;">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon fa-envelope"><span class="label">Envelope</span></a></li>
				</ul>
				<ul class="menu">
					<li><a href="#" >FAQ</a></li>
					<li><a href="#" >Terms of Use</a></li>
					<li><a href="#" >Privacy</a></li>
					<li><a href="http://iiitg.ac.in/" >Contact</a></li>
					
				</ul>
				
			</footer>


	</body>
</html>





