<?php
	require 'db.php';
  
		 if($_SESSION['Category']!=2){
                $sql2 = "SELECT * FROM transaction where pid in (select pid from fproduct where fid=".$_SESSION['id'].")";
				
					      $result = mysqli_query($conn, $sql2);
              }
        			
else {
					      $sql = "SELECT * FROM transaction";
				
					$result = mysqli_query($conn, $sql);
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
  text-align: center;
}
th{
  font-weight: bold;
  color: #000000;
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
				<div class="container">
						<h2>Transactions</h2>
        <div onclick="document.getElementById('a1').style.display='none'" style="margin-left:80%; color:white; background-color:red">CLOSE</div>

				
                    <!-- CSS Code: Place this code in the document's head (between the 'head' tags) -->


<!-- HTML Code: Place this code in the document's body (between the 'body' tags) where the table should appear -->
<table class="GeneratedTable">
  <thead>
    <tr>
      <th>Txn id</th>
      <th>Name</th>
      <th>Quantity</th>
      <th>Amount</th>
      <th>Email</th>
      <th>TXN DATE</th>
    </tr>
  </thead>
  <tbody>

      <?php 
      $sum=0;
      while($row=$result->fetch_array()){
          $tid=$row['tid'];
          $name=$row['name'];
          $quantity=$row['quantity'];
          $amount=$row['amount'];
          $time=$row['TXNTIME'];
          $email=htmlspecialchars($row['email']);
          $sum += $amount;
          echo '<tr>
          <td>'.$tid.'</td>
          <td>'.$name.'</td>
          <td>'.$quantity.'</td>
          <td>'.$amount.'</td>
          <td>'.$email.'</td>
          <td>'.$time.'</td>

          <td><a href="print.php?id='.$tid.'">print</a></td>

          </tr>';
      } ?>

  </tbody>
</table>
<h3>Total sales: Rs.<?= $sum?>/-</h3>
<!-- Codes by Quackit.com -->


                </div></section>
	</body>
</html>
