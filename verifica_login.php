<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: formlogin.php');
	exit();
}
?>