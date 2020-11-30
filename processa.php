<?php
session_start();
include_once("conexao.php");

if(empty($_POST['autor']) || empty($_POST['titulo']) || empty($_POST['user']) || empty($_POST['editora']) || empty($_POST['imgurl'])){
	$_SESSION['msg'] = "<p style='color:red;'>Livro não foi cadastrado com sucesso</p>";
	header('Location: Cadlivros.php');
exit();
}

$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
$autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$editora = filter_input(INPUT_POST, 'editora', FILTER_SANITIZE_STRING);
$imgurl = filter_input(INPUT_POST, 'imgurl', FILTER_SANITIZE_STRING);
$sinopse = filter_input(INPUT_POST, 'sinopse', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO livrosc (user, autor, titulo, editora, imgurl, sinopse) VALUES ('$user', '$autor', '$titulo', '$editora','$imgurl', '$sinopse' )";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

if(mysqli_insert_id($conexao)){
	$_SESSION['sucesso'] = true;
	header("Location: perfil.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Livro não foi cadastrado com sucesso</p>";
	header("Location: Cadlivros.php");
}
unset($_SESSION['msg']);
