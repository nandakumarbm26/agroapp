<?php 
    session_start();
	require 'db.php';
    
    if ( $_SESSION['logged_in'] != 1 )
    {
      $_SESSION['message'] = "You must log in before viewing your profile page!";
      header("location: error.php");
    }
    else
    {

       $email =  "admin@farmfriend.com";
       $name = "admin";
       $user =  "admin@FF";
       $mobile = "9538727397";
       $active = $_SESSION['Active'];
    }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>FarmFriend</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body style="background-image: linear-gradient(60deg, #4c7517 50%, #365310 50%);">
			<header id="header" style="background-color: #243620;">
				<div >
					<a  href="index.php" style="display: flex;">
						<img src="logo1.png" width="250px" height="auto" style="padding-left: 20px; filter:brightness(1.5)" />
						<div style="color: white;font-weight:bold;font-size:x-large">ADMIN DASHBOARD</div>
					</a>
					
				</div>
				<nav id="nav">
					<ul >
						<li><a onclick="document.getElementById('a1').style.display='block'"><span class="glyphicon glyphicon-home"></span> Transactions</a></li>
						<li><a onclick="document.getElementById('a2').style.display='block'"><span class="glyphicon glyphicon-shopping-cart"> Farmers</a></li>
						<li><a onclick="document.getElementById('a3').style.display='block'"><span class="glyphicon glyphicon-shopping-cart">Buyers</a></li>
						
						<li><a onclick="document.getElementById('a4').style.display='block'"><span class="glyphicon glyphicon-grain"> Digital-Market</a></li>
						<li><a href="blogView.php"><span class="glyphicon glyphicon-comment"> BLOGS</a></li>
						<li><a href="Login/logout.php"><span class="glyphicon glyphicon-user"> Logout</a></li>

					</ul>
					
				</nav>
				
			</header>
			<div>
						<h2 style="text-align: center;color:white">Hello Admin!</h2>
					</div>
			<div id="a1" style="display: none;">
						<?php require 'transactions.php' ?>
					</div>
					<div id="a2" style="display: none;">
						<?php require 'farmers.php' ?>
					</div>
					<div id="a3" style="display: none;">
						<?php require 'buyers.php' ?>
					</div>
					<div id="a4" style="display: none;">
						<?php require 'productMenu.php' ?>
					</div>

					
					
					
					
	</body>
</html>
