<?php
session_start();
include("conexao.php");
//Verificando se os campos estão vazios
if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: formlogin.php');
	exit();
}
//Armazenando dados inseridos no formulário de login
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
//Confirmando se os dados existem no banco de dados
$query = "select email from usuario where email = '{$email}' and senha = md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
//Prosseguindo caso sejam encontrados resultados
if($row == 1) {
	$_SESSION['email'] = $email;
	header('Location: perfil.php');
	exit();
} // Voltando ao formulário caso o email e/ou a senha sejam inválidos
else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: formlogin.php');
	exit();
}
?>

