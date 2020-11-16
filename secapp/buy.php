<?php
session_start();
// print_r($_GET);

include_once 'pdo.php';

$stmt = $pdo->prepare('SELECT * FROM `items` WHERE `itemid`= :idvar');
$stmt->execute(array("idvar"=>$_GET['id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_GET['price'] != $row['price'] ) {
	$_SESSION['errcode'] = 10004;
	header("Location:err.php");
	return;
}

?>

<!DOCTYPE html>
<html>

<head>
	
<style type="text/css">
.container {
  padding-left: 20px;
  padding-bottom: 20px;
  margin: auto;
}	
input[type=text], input[type=password] {
  width: 30%;
  padding-left: 15px;
  margin: 5px 0 22px 0;
  display: block;
  border: none;
  background: #f1f1f1;
  height: 40px;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}	
.loginbtn {
  background-color: #0000ff;
  color: white;
  padding: 16px 20px;
  margin: 18 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.8;
  border-radius: 6px;
}
.loginbtn:hover {
  opacity:1;
}
</style>


</head>

<body>
	
<h1 style= "font-family: Cambria; color: blue; margin-left: 18px; margin-bottom: 0px"> CnC Commerce</h1>
<br>


<div class="container">
  <h3>Billing</h3>
  <span><h5>Item: </h5><?= $row['itemname'] ?></span><br>
  <span><h5>Amount: </h5><?= $row['price'] ?></span><br>
</div>
</body>
</html>