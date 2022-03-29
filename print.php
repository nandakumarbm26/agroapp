<?php 
    session_start();
	require 'db.php';
    $id=$_GET['id'];

    $sql = "SELECT * FROM transaction where tid=".$id."";
	$result = mysqli_query($conn, $sql);
    $row=$result->fetch_array();
     $sql1 = "SELECT * FROM buyer where bid=".$row['bid']."";
	$re = mysqli_query($conn, $sql1);
    $buyrow=$re->fetch_array();
    $sql2 = "SELECT * FROM fproduct where pid=".$row['pid']."";
	$r = mysqli_query($conn, $sql2);
    $prorow=$r->fetch_array();
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
  background-color: #ffffff60;

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
  text-decoration: solid;
  font-weight: bold;
}


table.GeneratedTable thead {
  background-color: #ffcc00;
}
</style>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class>
        <div >
            <section id="one" class="wrapper style1 align">
    <button style="margin-left: 15%;" onclick="window.print()">Print</button>

            <div class="inner" style="display: flex; justify-content:center; padding:10px;margin:5px">

                <div class="box">

                <header>
                    <center>
                        <h2>FarmFriend Inc</h2>
                        <h2>Transaction Recipt</h2>
                    </center>
                </header>
                   

<table class="GeneratedTable">
    
  <tbody>
    
    <tr>
      <td>Name </td>
      <td><?php echo $row['name']?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $row['email']?></td>
    </tr>
    <tr>
      <td>Phone</td>
      <td><?php echo $row['mobile']?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><?php echo $row['addr']?></td>
    </tr><tr>
      <td>City</td>
      <td><?php echo $row['city']?></td>
    </tr><tr>
      <td>Pincode</td>
      <td><?php echo $row['pincode']?></td>
    </tr>
    <tr>
      <td>Product </td>
      <td><?php echo $prorow['product']?></td>
    </tr>
    <tr>
      <td>Farmer FFID</td>
      <td><?php echo $prorow['fid']?></td>
    </tr>
    <tr>
      <td>GSTIN</td>
      <td><?php echo $buyrow['id']?></td>
    </tr>
    <tr>
      <td>TxnDate</td>
      <td><?php echo $row['TXNTIME']?></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><?php echo ($row['quantity']*100).' Kg'?></td>
    </tr>
    <tr>
      <td>Price per kg</td>
      <td><?php echo 'Rs.'.($prorow['price']/100).'/-'?></td>
    </tr>
    <tr>
      <td>Purchase Amount</td>
      <td><?php echo 'Rs.'.$row['amount'].'/-'?></td>
    </tr>
    <tr>
      <td>Final Amount*</td>
      <td><?php echo 'Rs.'.($row['amount']+($row['amount']*0.002)).'/-'?></td>
    </tr>
  </tbody>
</table>
    
 
                   
                    
                </div>
                
            </div>
            <div style="justify-content:left;margin-left:60%;margin-top:-50px;">
        <div>sd\-</div>
        <div>Manager Sales</div>
        <div>FarmFriend Inc</div>
    </div>
    <br/>

    <div style="justify-content:center;text-align:center">this is computer generated recipt and signature is not required.</div>
    <div style="justify-content:center;text-align:center">*0.2% service charges per txn.</div>

        </section>
        </div>

	</body>
</html>
