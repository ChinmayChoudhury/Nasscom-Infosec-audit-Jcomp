<?php 
	session_start();
	include_once 'prices.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<style type="text/css">
		table{
			border: 1px solid black;
			border-collapse: collapse;
		}
		th,td{
			padding: 5px;
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<h2>Cart</h2>
	<h4>Select item to buy</h4>
	<table>
		<tr><th>ID</th><th>Item</th><th>Price</th><th>Buy</th></tr>
	<?php

		foreach ($prices as $id => $data) {
			echo "<tr>";
			echo "<td>".$id."</td><td>".$data[0]."</td><td>".$data[1]."</td>";
			//last column
			echo "<td><form method='post'><input type='hidden' name='item' value='".$data[0]."'>
				<input type='hidden' name='price' value='".$data[1]."'><input type='submit' name='buy' value='buy'></form></td>";
			echo "</tr>";
		}
	?>
	</table>

	<h3>Billing</h3>
	<?php
		if (isset($_POST['buy'])) {
			$_SESSION['item'] = $_POST['item'];
			$_SESSION['total'] =$_POST['price'];
			echo "Item :" . $_POST['item'];
			echo "<br>";
			echo "Total: ". $_POST['price'];
			echo "<br><br>";
			echo "<a href='bill.php'>Go to billing</a>";
		}
	?>

</body>
</html>