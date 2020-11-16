<?php
include_once 'pdo.php';
$stmt = $pdo->prepare('SELECT * FROM `details` WHERE `usern`=:uservar');
$stmt->execute(array(":uservar"=>"testuser"));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row) {
	if($row['sessID']){
		echo $row['sessID'];
	}
	else{
		echo " no sess";
	}
}
?>