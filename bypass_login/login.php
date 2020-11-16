<?php
// $ses_id = session_create_id();
// session_id($ses_id);
session_start();
// echo $ses_id . "<br>";
// echo session_id();
if (isset($_POST['login'])) {
	setrawcookie("user", $_POST['username']);
	// setrawcookie("PHPSESSID", session_id() );
	$_SESSION['user'] = $_POST['username'];
	header("Location:welcome.php"); return;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
	<style type="text/css">
		.pill{
			border-radius: 50px;
			/*background-color: black;*/
		}
		.btn{
			color: white;
			background-color: black;
		}
		.err{
			color: red;
		}

	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 text-center mb-3">
				<h3>Login to continue</h3>
				<p class="err text-center">
					<?php
					if (isset($_SESSION['error'])) {
						echo $_SESSION['error'];
						unset($_SESSION['error']);
					}
					?>
				</p>
			</div>
			<div class="col-12 col-md-8 offset-md-1 mt-10">
				<form method="post" id="loginform">
					<div class="form-group row">
						<label for="username" class="col-md-6 col-form-label text-lg-right">Username:</label>
						<div class="col-md-5">
							<input type="text" class="form-control pill" id="username" name="username" placeholder="">
						</div>
					</div>
					<div class="form-group row">
						<label for="password" class="col-md-6 col-form-label text-lg-right">Password:</label>
						<div class="col-md-5">
							<input type="password" class="form-control pill" id="password" name="password" placeholder="">
						</div>
					</div>
				</form>
			</div>
			<div class="col-12 text-center mt-3">                
				<button type="submit" form="loginform" name="login" value="login" class="btn pill">
					&nbsp;Submit&nbsp;
				</button>
			</div>
		</div>
	</div>
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script> -->
</body>
</html>