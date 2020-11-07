<?php
include('conexao.php');
//Verifica se o usuário está logado
session_start();
if(!$_SESSION['email']) {
	header('Location: formlogin.php');
	exit();
}
?>