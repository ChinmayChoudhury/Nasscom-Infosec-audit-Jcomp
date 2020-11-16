<?php
	session_start();
	$students = [
	'1'=> 'Student 1',
	'2'=>'Student 2',
	'3'=>'Student 3',
	'4'=>'Student 4'
];

$counter = 4;
	include_once 'data.php';
	include_once 'codes.php';
	if (!isset($_SESSION['user'])) {
		$_SESSION['error'] = "Please login";
		header("Location: index.php"); return;
	}
	if (isset($_POST['login'])) {
		if ($_POST['code'] == $codes[$_SESSION['user']]) {
			$_SESSION['authuser'] = $_POST['user'];
			header("Location: welcome.php"); return;		
		}
		else{
			echo "Incorrect Code";
		}
	}
	if (isset($_POST['logout'])) {
		header("Location: logout.php"); return;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Enter code</title>
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

	<h4>Welcome <?= $_SESSION['user'] ?> <br> Please enter your security code:</h4>
	<form method="post" id="form">
		<input type="hidden" name="user" value="<?= $_SESSION['user']?>">
		<label for="code">Code: </label>
		<input type="text" name="code" id="code">
	</form><br><br>
	<button form="form" name="login">Login</button>&nbsp;
	<button form="form" name="logout">Logout</button>
	<br><br><br>
</body>
</html>