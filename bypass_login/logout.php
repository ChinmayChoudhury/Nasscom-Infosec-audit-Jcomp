<?php
session_id($_COOKIE['PHPSESSID']);
session_start();
session_unset();
session_destroy();
// setrawcookie('auth')
header("Location: index.php"); return;
?>