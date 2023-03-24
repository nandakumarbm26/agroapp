<?php session_start(); ?>

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
	<link rel="stylesheet" href="login.css" />
	<script src="js/jquery.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/skel-layers.min.js"></script>
	<script src="js/init.js"></script>
	<noscript>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-xlarge.css" />
	</noscript>
	<link rel="stylesheet" href="indexfooter.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>

<?php
require 'menu.php';
?>

<!-- Banner -->
<section id="banner" class="wrapper">
	<div class="container">

		<h2>FarmFriend</h2>
		<p>Market and Supplies</p>
		<br><br>
		<center>
			<div class="row uniform">
				<div class="6u 12u$(xsmall)">
					<button class="button fit" onclick="document.getElementById('id01').style.display='block'" style="width:auto">LOGIN</button>
				</div>

				<div class="6u 12u$(xsmall)">
					<button class="button fit" onclick="document.getElementById('id02').style.display='block'" style="width:auto">REGISTER AS FARMER</button>
				</div>
				<div class="6u 12u$(xsmall)">
					<button class="button fit" onclick="document.getElementById('id04').style.display='block'" style="width:auto">REGISTER AS BUYER</button>
				</div>
			</div>
		</center>


</section>


<section id="one" class="wrapper style1 align-center">
	<div class="container">
		<header>
			<h2>FarmFriend</h2>
			<p>Explore the new way of trading...</p>
		</header>
		<div class="row 200%">
			<section class="4u 12u$(small)">
				<i class="icon big rounded fa-clock-o"></i>
				<p>Digital Market</p>
			</section>
			<section class="4u 12u$(small)">
				<i class="icon big rounded fa-comments"></i>
				<p>Agro-Blog</p>
			</section>
			<section class="4u$ 12u$(small)">
				<i class="icon big rounded fa-user"></i>
				<p>Register with us</p>
			</section>
		</div>
	</div>
</section>


<!-- Footer -->
<footer class="footer-distributed" style="background-color:black" id="aboutUs">
	<center>
		<h1 style="font: 35px calibri;">About Us</h1>
	</center>
	<div class="footer-left">
		<h3 style="font-family: 'Times New Roman', cursive;">FarmFriend &copy; </h3>
		<!--	<div class="logo">
				<a href="index.php"><img src="images/logo.png" width="200px"></a>
			</div>-->
		<br />
		<p style="font-size:20px;color:white">Your product Our market !!!</p>
		<br />
	</div>

	<div class="footer-center">
		<div>
			<i class="fa fa-map-marker"></i>
			<p style="font-size:20px">FarmFriend</p>
		</div>
		<div>
			<i class="fa fa-phone"></i>
			<p style="font-size:20px">9999999999</p>
		</div>
		<div>
			<i class="fa fa-envelope"></i>
			<p style="font-size:20px"><a href="mailto:farmfriend@gmail.com" style="color:white">farmfriend@gmail.com</a></p>
		</div>
	</div>

	<div class="footer-right">
		<p class="footer-company-about" style="color:white">
			<span style="font-size:20px"><b>About FarmFriend</b></span>
			FarmFriend is e-commerce trading platform for grains & grocerries...
		</p>
		<div class="footer-icons">
			<a href="#"><i style="margin-left: 0;margin-top:5px;" class="fa fa-facebook"></i></a>
			<a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-instagram"></i></a>
			<a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-youtube"></i></a>
		</div>
	</div>

</footer>


<div id="id01" class="modal">

	<form class="modal-content animate" action="Login/login.php" method='POST'>
		<div class="imgcontainer">
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		</div>

		<div class="container">
			<h3>Login</h3>
			<form method="post" action="Login/login.php">
				<div class="row uniform 50%">
					<div class="7u$">
						<input type="text" name="uname" id="uname" value="" placeholder="UserName" style="width:80%" required />
					</div>
					<div class="7u$">
						<input type="password" name="pass" id="pass" value="" placeholder="Password" style="width:80%" required />
					</div>
				</div>
				<div class="row uniform">
					<p>
						<b>Category : </b>
					</p>
					<div class="3u 12u$(small)">
						<input type="radio" id="farmer" name="category" value="1" checked>
						<label for="farmer">Farmer</label>
					</div>
					<div class="3u 12u$(small)">
						<input type="radio" id="buyer" name="category" value="0">
						<label for="buyer">Buyer</label>
					</div>
				</div>
				<center>
					<div class="row uniform">
						<div class="7u 12u$(small)">
							<input type="submit" value="Login" />
						</div>
					</div>
				</center>
		</div>
	</form>
	</section>
</div>
</div>
</div>
</form>
</div>

<div id="id03" class="modal">

	<form class="modal-content animate" action="Login/login.php" method='POST'>
		<div class="imgcontainer">
			<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
		</div>

		<div class="container">
			<h3>Admin Login</h3>
			<form method="post" action="Login/login.php">
				<div class="row uniform 50%">
					<div class="7u$">
						<h3>Admin : Admin@FarmFriend</h3>
						<p style="color: red;">Access denied for users.</p>
					</div>
					<div class="7u$">
						<input type="password" name="pass" id="pass" value="" placeholder="Password" style="width:80%" required />
					</div>
				</div>

				<center>
					<div class="row uniform">
						<div class="7u 12u$(small)">
							<input type="submit" value="Login" />
						</div>
					</div>
				</center>
		</div>
	</form>
	</section>
</div>
</div>
</div>
</form>
</div>
<div id="id02" class="modal">

	<form class="modal-content animate" action="Login/signUp.php" method='POST'>
		<div class="imgcontainer">
			<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
		</div>

		<div class="container">

			<section>
				<h3>SignUp</h3>
				<form method="post" action="Login/signUp.php">
					<center>
						<div class="row uniform">
							<div class="3u 12u$(xsmall)">
								<input type="text" name="name" pattern="[A-Z a-z]+" id="name" value="" placeholder="Name" required />
							</div>
							<div class="3u 12u$(xsmall)">
								<input type="text" name="uname" id="uname" value="" placeholder="UserName" required />
							</div>
						</div>
						<div class="row uniform">
							<div class="3u 12u$(xsmall)">
								<input type="text" name="mobile" pattern="[0-9]{10}" id="mobile" value="" placeholder="Mobile Number" required />
							</div>

							<div class="3u 12u$(xsmall)">
								<input type="email" name="email" id="email" value="" placeholder="Email" required />
							</div>
						</div>

						<div class="row uniform">
							<div class="3u 12u$(xsmall)">
								<input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="password" value="" placeholder="Password" required />
							</div>
							<div class="3u 12u$(xsmall)">
								<input type="password" name="pass" id="pass" value="" placeholder="Retype Password" required />
							</div>
						</div>
						<div class="row uniform">
							<div class="6u 12u$(xsmall)">
								<input type="text" name="addr" pattern="[A-Z a-z]+" id="addr" value="" placeholder="Address" style="width:80%" required />
							</div>
						</div>
						<div>
							<div class="row uniform">
								<p>
									<b>Category : </b>
								</p>
								<div class="3u 12u$(small)">
									<input type="radio" id="farmer" name="category" value="1" checked>
									<label for="farmer">Farmer</label>
								</div>

							</div>
						</div>
						<div class="row uniform">
							<div class="3u 12u$(small)">
								<input type="submit" value="Submit" name="submit" class="special" /></li>
							</div>
							<div class="3u 12u$(small)">
								<input type="reset" value="Reset" name="reset" /></li>
							</div>
						</div>
					</center>
				</form>
			</section>

		</div>
</div>
</form>
</div>
<div id="id04" class="modal">

	<form class="modal-content animate" action="Login/signUp.php" method='POST'>
		<div class="imgcontainer">
			<span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
		</div>

		<div class="container">

			<section>
				<h3>SignUp</h3>
				<form method="post" action="Login/signUp.php">
					<center>
						<div class="row uniform">
							<div class="3u 12u$(xsmall)">
								<input type="text" name="name" pattern="[A-Z a-z]+" id="name" value="" placeholder="Name" required />
							</div>
							<div class="3u 12u$(xsmall)">
								<input type="text" name="uname" id="uname" value="" placeholder="UserName" required />
							</div>
						</div>
						<div class="row uniform">
							<div class="3u 12u$(xsmall)">
								<input type="text" name="mobile" pattern="[0-9]{10}" id="mobile" value="" placeholder="Mobile Number" required />
							</div>

							<div class="3u 12u$(xsmall)">
								<input type="email" name="email" id="email" value="" placeholder="Email" required />
							</div>
						</div>

						<div class="row uniform">
							<div class="3u 12u$(xsmall)">
								<input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="password" value="" placeholder="Password" required />
							</div>
							<div class="3u 12u$(xsmall)">
								<input type="password" name="pass" id="pass" value="" placeholder="Retype Password" required />
							</div>
						</div>
						<div class="row uniform">
							<div class="6u 12u$(xsmall)">
								<input type="text" name="addr" pattern="[A-Z a-z]+" id="addr" value="" placeholder="Address" style="width:80%" required />
							</div>
						</div>
						<div>
							<div class="row uniform">
								<p>
									<b>Category : </b>
								</p>

								<div class="3u 12u$(small)">
									<input type="radio" id="buyer" name="category" value="0" checked>
									<label for="buyer">Buyer</label>
								</div>
							</div>
						</div>
						<div class="row uniform">
							<div class="3u 12u$(small)">
								<input type="submit" value="Submit" name="submit" class="special" /></li>
							</div>
							<div class="3u 12u$(small)">
								<input type="reset" value="Reset" name="reset" /></li>
							</div>
						</div>
					</center>
				</form>
			</section>

		</div>
</div>
</form>
</div>



<script>
	// Get the modal
	var modal = document.getElementById('id01');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}

	var modal1 = document.getElementById('id02');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal1) {
			modal1.style.display = "none";
		}
	}
</script>


</body>

</html>