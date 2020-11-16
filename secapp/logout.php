<?php
	session_start();
	session_regenerate_id();
	include_once 'pdo.php';
	$upstmt = $pdo->prepare("UPDATE `details` SET `sessID` = '', `curr_IP` = '', `agent`='' WHERE `userid`=:useridvar");
	$upstmt->execute(array(
		":useridvar"=>$_SESSION['userid'],
	));
	session_destroy();
	session_unset();
	header("Location: index.php");
	return;

?>