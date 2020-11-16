<?php
	session_start();
	include_once 'data.php';
	// print_r($data);
	if(isset($_POST['login']) && !(strlen($_POST['username'])<1) ){
		// print_r($_POST);
		if ($_POST['password'] == $data[$_POST['username']][0]) {
			$_SESSION['user'] = $_POST['username'];
			header("Location: 2fa.php"); return;
		}
		else{
			$_SESSION['error'] = 'Incorrect password or username';
			header("Location: index.php"); return;
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Loggin in as another user</title>
</head>
<body>
	<h1>Maze Bank</h1>
	<h4>Log in before continuing</h4>
	<p style="color: red">
	<?php
		if (isset($_SESSION['error'])) {
			echo $_SESSION['error'];
			unset($_SESSION['error']);
		}
	?>
	</p>
	<form method="post" id="form">
		<label for="username">Username: </label>
		<input type="text" name="username" id="username"><br><br>
		<label for="password">Password: </label>
		<input type="text" name="password" id="password"><br><br>
	</form>
	<button form="form" name="login">Submit</button>
</body>
</html>