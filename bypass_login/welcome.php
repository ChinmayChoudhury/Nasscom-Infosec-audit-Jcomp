<?php
	session_id($_COOKIE['PHPSESSID']);
	// session_id('9619lu6u97vmc8qpbt38cafjsa');

	session_start();
	// print_r($_COOKIE);
	if (!isset($_SESSION['user'])) {
		$_SESSION['error'] = "please login first";
		header("Location: index.php"); return;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<style type="text/css">
		.text-center{
			width: 100%;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php //session_id() . "<br>" . $_COOKIE['PHPSESSID']."<br>" ?>
		<h2 class="text-center">Welcome to the matrix</h2>
		<p class="text-center">
			<?php
				if (isset($_COOKIE['user'])) {
					echo "Welcome " . $_SESSION['user'];
				}
			?>
		</p>
		<a href="/bypass_login/logout.php">Logout</a>
	</div>


</body>
</html>