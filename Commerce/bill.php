<?php
	session_start();
	echo "<h1>Bill</h1>";
	echo "<h3>Item: ". $_SESSION['item'] ."</h3>";
	echo "<h3>To pay: ". $_SESSION['total'] ."</h3>";

?>