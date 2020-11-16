<?php
	if(isset($_POST['login'])){
		
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Hashed password login</title>
</head>
<body>
	<h2>Hashed password login</h2>
	<form method="post" id="hashform">
		<label for="username">Username: </label>
		<input type="text" name="username" id="username"><br>
		<label for="password">Password: </label>
		<input type="text" name="password" id="password"><br>
	</form>
	<button name="login" form="hashform">Login</button>
</body>
</html>