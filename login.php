<?php
session_start();
include("conexao.php");
//Verificando se os campos estão vazios
if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: formlogin.php');
	exit();
}
//Armazenando dados inseridos no formulário de login
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//Confirmando se os dados existem no banco de dados
$query = "SELECT email FROM usuario WHERE email = '{$email}' AND senha = md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$resultado = mysqli_fetch_array($result);
$row = mysqli_num_rows($result);

//Prosseguindo caso sejam encontrados resultados
if($row == 1) {
	$_SESSION['email'] = $email;
	$_SESSION['nome'] = $nome;
	header('Location: perfil.php');
	exit();
} // Voltando ao formulário caso o email e/ou a senha sejam inválidos
else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: formlogin.php');
	exit();
}
?>

