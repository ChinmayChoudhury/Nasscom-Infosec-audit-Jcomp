<?php
	session_start();
	$students = [
	'1'=> 'Student 1',
	'2'=>'Student 2',
	'3'=>'Student 3',
	'4'=>'Student 4'
];

$counter = 4;
	// include_once 'data.php';
	if (!isset($_COOKIE['auth'])) {
		$_SESSION['error'] = "please login to continue";
		header("Location: index.php"); return;
	}
	if ($_COOKIE['status'] <1) {
		$_SESSION['error'] = 'access restricted to only admins';
		header("Location: index.php"); return;
	}
	if (isset($_POST['add'])) {
		$namevar = $_POST['name'];
		header("Location: action.php?act=add&sname=$namevar");
	}
	if (isset($_POST['del'])) {
		$sidvar = $_POST['sid'];
		header("Location: action.php?act=del&sid=$sidvar");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<h1>Manage your class</h1>
	<a href="logout.php">Logout</a><br>
	<h4>Add a student</h4>
	<form method="post" id="form">
		<label for="name">Name: </label>
		<input type="text" name="name" id="name">
	</form><br>
	<button form="form" name="add">Add</button>&nbsp;
<br><br>
	<?php
			echo "<table>";
			echo "<tr><th>Student ID</th><th>Name</th><th>Action</th></tr>";
		foreach ($students as $key => $value) {
			# code...
			echo "<tr>";
			

			echo "<td>" . $key ."</td>";
			echo "<td>" . $value . "</td>";
			echo "<td> 
					<form method='post' id='delform'>
						<input type='hidden' name='sid' id='sid' value = '$key'>
					</form>
					<button form='delform' name='del'>Remove</button>
			</td>";
			
			echo "</tr>";
		}
			echo "</table>";
		if (isset($_POST['logout'])) {
			session_unset();
			session_destroy();
			header("Location: login.php");
		}
	?>
</body>
</html>