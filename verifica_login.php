<?php
session_start();
if(!$_SESSION['email']) {
	header('Location: formlogin.php');
	exit();
}
?>