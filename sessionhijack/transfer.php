<?php
	if (isset($_POST['transfer'])) {
		header("Location: success.php"); return;
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Transfer Money</title>
</head>
<body>
	<h1>Transfer Money easily...</h1>

	<form method="post" id="form">
		<label for="accno">To: </label>
		<input type="text" name="accno" id="accno">
		<label for="amount">Amount: </label>
		<input type="text" name="amount" id="amount">
	</form><br><br>
	<button form="form" name="transfer">Transfer</button>&nbsp;
</body>
</html>