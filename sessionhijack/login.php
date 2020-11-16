<?php
	include_once 'data.php';
	// print_r($data);
	if(isset($_POST['login'])){
		if ($_POST['password'] == $data[$_POST['username']][0]) {
			$user = $_POST['username'];
			// echo "Success" . $user;
			header("Location: 2fa.php?user=$user"); return;
		}
		else{
			echo "incorrect password";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Loggin in as another user</title>
</head>
<body>
	<h4>Loggin in as another user</h4>
	<form method="post" id="form">
		<label for="username">Username: </label>
		<input type="text" name="username" id="username"><br><br>
		<label for="password">Password: </label>
		<input type="text" name="password" id="password"><br><br>
	</form>
	<button form="form" name="login">Submit</button>
</body>
</html>