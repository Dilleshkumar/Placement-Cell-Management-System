<?php
session_start();
?>
<html>
<style>
/* The container */
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #55555555;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
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
						<li><a href="studentintro.php">Home</a></li>
						
						
					</ul>
				</nav>
			</header>
			
						<section id="banner" style="margin-top: -63px; padding: 7.5em 0;">
				<div class="inner">
					
					
					<div class="row">
						<div class="col-md-2" style="margin-top: -78px;">
						<form action="stuaddskills.php" method="get" style="margin-left: 588px;
    margin-top: 108px;">
	<p style="font-size: 40px;
   margin-left: -420px;">Update Skills</p>
   
   <h4 style="color:forestgreen;margin-left: -478px;"><?php if( isset($_SESSION['success']) )
{
        echo $_SESSION['success'];

        unset($_SESSION['success']);

}?></h4>
   
   <label class="container" style="margin-left: -438px; padding-bottom: 10px; color: papayawhip;"> <input type="checkbox" name="Skills[]" id="Skills" value="s1">Python<br/><span class="checkmark" style="margin-left: 439px;margin-top: 6px;">
   </span></label>
   <label class="container" style="margin-left: -438px; padding-bottom: 10px;color: papayawhip;"> <input type="checkbox" name="Skills[]" id="Skills" value="s2">Java<br/><span class="checkmark" style="margin-left: 439px;margin-top: 6px;">
   </span></label><label class="container" style="margin-left: -438px; padding-bottom: 10px;color: papayawhip;"> <input type="checkbox" name="Skills[]" id="Skills" value="s3">DeepLearning<br/><span class="checkmark" style="margin-left: 439px;margin-top: 6px;">
   </span></label><label class="container" style="margin-left: -438px; padding-bottom: 10px;color: papayawhip;"> <input type="checkbox" name="Skills[]" id="Skills" value="s1">Machine Learning<br/><span class="checkmark" style="margin-left: 439px;margin-top: 6px;">
   </span></label><label class="container" style="margin-left: -438px; padding-bottom: 10px;color: papayawhip;"> <input type="checkbox" name="Skills[]" id="Skills" value="s1">IOT	<br/><span class="checkmark" style="margin-left: 439px;margin-top: 6px;">
   </span></label><label class="container" style="margin-left: -438px; padding-bottom: 10px;color: papayawhip;"> <input type="checkbox" name="Skills[]" id="Skills" value="s1">WebDesigning<br/><span class="checkmark" style="margin-left: 439px;margin-top: 6px;">
   </span></label>
    <input type="submit" value="submit" class="button" style="margin-left: -443px;
    
    margin-top: 11px;">
</form>
						</div>
					</div>
				</div>
			</section>




<?php

 $con = mysqli_connect('localhost','root','') or die(mysql_error());
	$db = mysqli_select_db($con,'placement_cell_iiitg') or die(mysql_error());
error_reporting(0);
$name = $_SESSION['name'];
echo $name;
$name1 = $_GET['Skills'];

// optional
// echo "You chose the following Skills(s): <br>";

foreach ($name1 as $Skills){ 
   echo $Skills. "<br>";
   mysqli_query($con,"Insert into stu_skills values ('$name','$Skills')") or die(mysqli_error($con));
   $_SESSION['success'] = "Skills are updated successfully";
	
}

?>
</html>