<?php
session_start();
// print_r($_SERVER['REMOTE_ADDR']);
// print_r($_SESSION);
if ($_SESSION['errcode']==10001) {
	
	echo "<h2>Account is accessed from multiple browsers/tab</h2>
	<p>Malicious activity suspected please <a href='logout.php'>login</a> again</p>
	";
}
if ($_SESSION['errcode']==10002) {
	
	echo "<h2>A change in IP address is detected</h2>
	<p>Malicious activity suspected please <a href='logout.php'>login</a> again</p>
	";
}
if ($_SESSION['errcode'] == 10003) {
	echo "<h2>Multiple session found for the same user</h2>
	<p>Malicious activity suspected please <a href='logout.php'>login</a> again</p>
	";
}
if ($_SESSION['errcode'] == 10004) {
	echo "<h2>Session hijacking detected.</h2>
	<p>Malicious activity suspected please <a href='logout.php'>login</a> again</p>
	";
}

?>