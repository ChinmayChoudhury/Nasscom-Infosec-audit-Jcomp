<?php
		if (isset($_POST['login'])) {
			setcookie("user", $_POST['username']);
		}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Plaintext sign in</title>
</head>
<body>
	<h2> Plaintext sign in with POST method</h2>
	<form method="post" id="form">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username">
		<label for="Password">Password:</label>
		<input type="text" name="Password" id="Password">
	</form>
	<button form="form" name="login">Submit</button>
	<br><br>
	<?php
		if (isset($_COOKIE['user'])) {
			echo "Hello" . $_COOKIE['user']; 
		}
	?>
</body>
</html>