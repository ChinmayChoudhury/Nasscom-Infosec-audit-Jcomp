<?php
session_start();
	include_once 'data.php';
	include_once 'codes.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Maze Bank</title>
	<style type="text/css">
		.text-center{
			width: 100%;
			text-align: center;
		}
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
	<h3 class="text-center">Welcome to Maze Bank</h3><br>
	<p class="text-center">We care for your security...</p>
	<p><a href="logout.php">Logout</a></p>
	<?php
		// if (isset($_POST['login'])) {
				echo "The user in session is: " . $_SESSION['authuser'] . "<br>";
				echo " session variable: " ;var_dump($_SESSION['authuser']);
				echo "<br><br>";
				echo "<table>";
				echo "<tr><th>User</th><th>Account No</th><th>Balance</th></tr>";
				echo "<tr>";
				echo "<td>" . $_SESSION['authuser'] ."</td>";
				echo "<td>" . $data[$_SESSION['authuser']][1] . "</td>";
				echo "<td>" . $data[$_SESSION['authuser']][2] . "</td>";
				echo "</tr></table>";
			// }
			// else{
				// echo "Incorrect Code";
			// }
		// }
		if (isset($_POST['logout'])) {
			session_unset();
			session_destroy();
			header("Location: login.php");
		}
	?>
	<br>
	<p><a href="/sessionhijack/transfer.php">Transfer Money </a></p>
</body>
</html>