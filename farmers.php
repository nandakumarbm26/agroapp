<?php
	require 'db.php';
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
        <style>
table.GeneratedTable {
  width: 100%;
  background-color: #ffffff;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #ffcc00;
  border-style: solid;
  color: #000000;
}

table.GeneratedTable td, table.GeneratedTable th {
  border-width: 2px;
  border-color: #ffcc00;
  border-style: solid;
  padding: 3px;
  max-width: 15%;
text-align: center;
}

table.GeneratedTable thead {
  background-color: #ffcc00;
}
</style>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class>


		<!-- One -->
			<section id="main" class="wrapper style1 align-center" >
						<h2>Farmers</h2>
        <div onclick="document.getElementById('a2').style.display='none'" style="margin-left:80%; color:white; background-color:red">CLOSE</div>

				
				<?php
					$sql = "SELECT * FROM farmer";
				
					$result = mysqli_query($conn, $sql);
                    
                    
					?>
                    <!-- CSS Code: Place this code in the document's head (between the 'head' tags) -->


<!-- HTML Code: Place this code in the document's body (between the 'body' tags) where the table should appear -->
<table class="GeneratedTable">
  <thead>
    <tr>
      <th>FFID</th>
      <th>Name</th>
      <th>UserName</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Address</th>
      <th>Rating</th>
      <th>FRUITS ID</th>

    </tr>
  </thead>
  <tbody>
    
      <?php while($row=$result->fetch_array()){
          $fid=$row['fid'];
          $name=$row['fname'];
          $username=$row['fusername'];
          $email=htmlspecialchars($row['femail']);
          $mobile=$row['fmobile'];
          $address=$row['faddress'];
          $rating=$row['frating'];
          $fruitsid=$row['id'];

          echo '<tr>
          <td>'.$fid.'</td>
          <td>'.$name.'</td>
          <td>'.$username.'</td>
          <td>'.$email.'</td>
          <td>'.$mobile.'</td>
          <td>'.$address.'</td>
          <td>'.$rating.'</td>
          <td>'.$fruitsid.'</td>
          </tr>';
      } ?>
    
  </tbody>
</table>


                </div></section>
	</body>
</html>
