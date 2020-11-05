<?php
session_start();
include ('conexao.php');
//Armazenando dados inseridos no formulário de login
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
//Confirmando se os dados existem no banco de dados
$query = "select Usuario_id, usuario from usuario where email = '{$email} and senha = md5({$senha})";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
//Prosseguindo caso sejam encontrados resultados
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: painel.php');
    exit();}
//Voltando ao formulário caso os dados estejam incorretos    
else {
    $_SESSION['nao_autenticado'] = true;
	header('Location: formlogin.php');
	exit();
}
?>