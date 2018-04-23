

<?php
session_start();
$db_host = 'localhost'; 
$db_user = 'root'; 
$db_pass = ''; 
$db_name = 'placement_cell_iiitg'; 
$name =$_SESSION['name'];


$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = "SELECT S.s_id,S.job_id,J.designation,J.salary from short_listed_students as S,jobs as J where S.job_id = J.job_id and s_id='$name'";
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>



   
   

<!DOCTYPE HTML>

<html>

	<head>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		div.a {
    text-transform: uppercase;
}
		
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}
		
		.bgimg{
			background-image : url('../images/pic05.jpg')
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
			text-align:center
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: grey;
			color: #FFFFFF;
			border-color: grey !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
			text-align:center
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: center;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
			text-align : center;
		}
		
		.data-table tbody tr:nth-child(even) td {
			background-color: #f4fbff;
			text-align : center;
		}
		.data-table tbody tr:hover td {
	
			border-color: black;
			text-align :z;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align:center;
		}
		.data-table tfoot th:first-child {
			text-align: center;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
			text-align:center;
		}
	</style>
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
				<h1 font-size: 32px; style=" "><a href="index.php" >Placement Cell <span>Indian Institute of Information Technology Guwahati</span></a></h1>
				<nav id="nav">
					<ul>
						<li style=" "><a href="companyintro.php">Home</a></li>
						
						
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner" style="padding: 12em 0;">
				<div class="bigimg">
				<p align="left" style="margin-left: 24px; font-size: 21px;">
				<div class="a" style="margin-left: -1006px;
    font-size: 18px;">
				<?php
					echo $_SESSION['message'];
					?>
					</div></p>
					
					<h3 align="center" style="    margin-bottom: 22px;margin-left: -40px;
">Your ShortList</h3>
					<div class="row" align="center" style="margin-left: -127px;">
						<div class="col-md-2">
						<table class="data-table" style="margin-left: 322px;">
		
		<thead>
			<tr>
				<th>SID</th>
				<th>JobID</th>
				<th>Designation</th>
				<th>Salary</th>
				
				
				
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		//$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			//$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
			echo '<tr>
					<td>'.$row['s_id'].'</td>
					<td>'.$row['job_id'].'</td>
					<td>'.$row['designation'].'</td>
					<td>'.$row['salary'].'</td>
					
				</tr>';
			
			$no++;
		}?>
		</tbody>
		<tfoot>
			<tr>
				
			</tr>
		</tfoot>
	</table>
	
	
						</div>
					</div>
				</div>
				
				
			</section>
			
			
		<section id="one" class="wrapper style1">
				<div class="">
					


	
			
		
	




		</section>
			
		
			
		
	</body>
</html>
