<?php
session_start();

if(isset($_POST['submit']))
{
    $con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
	$db = mysqli_select_db($con,'placement_cell_iiitg') or die(mysqli_error($con));
	$id = $_POST['id'];
	$pwd = $_POST['pwd'];
	
	if($id!='' && $pwd!='')
 {
	// $try = "insert into login_details(user_name,password,admn_status) values ('$id','$pwd','0')";
	 //$try2 = "insert into student (s_id) values ($id)";
	 
	 //echo $try;
   if(!mysqli_query($con,"insert into login_details(user_name,password,admn_status) values ('$id','$pwd','2')"))
   {
	   $_SESSION['Error'] = "User ID already exists";   
	   $temp = 2;
   }
   //echo "fuck u0";
    else{
		$_SESSION['success'] ="User Added Successfully ";
		}
   
 }
 
}
 
   ?>


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
						
						
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner" style="    padding: 16.29em 0;">
				<div class="inner">
					
					<p align="center" style="    margin-bottom: 7px;
">Add Organisation</p>
					<div class="row" align="center">
						<div class="col-md-2">
						<form action="admin_add_org.php" method="POST" style="margin-left: 660px;">
							<div class="form-login">
						
							<h4 style="color:forestgreen;">
							<?php if( isset($_SESSION['success']) )
{
        echo $_SESSION['success'];

        unset($_SESSION['success']);

}?>
</h4>
							<h4 style="color:red;"><?php if( isset($_SESSION['Error']) )
{
        echo $_SESSION['Error'];

        unset($_SESSION['Error']);

}?></h4>
							<input type="text" id="userName" class="form-control input-sm chat-input" name='id' placeholder="Organisation Name" required  style="padding-left: 45px;"/>
							</br>
							<input type="password" id="userPassword" class="form-control input-sm chat-input" name='pwd' placeholder="New Password" required  style="padding-left: 45px;"/>
							</br>
							
							
							<div class="">
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




