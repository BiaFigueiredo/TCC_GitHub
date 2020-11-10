<?php
session_start();
include_once("conexao.php");

if(empty($_POST['autor']) || empty($_POST['titulo']) || empty($_POST['editora']) || empty($_POST['imgurl'])){
	$_SESSION['msg'] = "<p style='color:red;'>Livro não foi cadastrado com sucesso</p>";
	header('Location: Cadlivros.php');
exit();
}

$autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$editora = filter_input(INPUT_POST, 'editora', FILTER_SANITIZE_STRING);
$imgurl = filter_input(INPUT_POST, 'imgurl', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO livrosc (autor, titulo, editora, imgurl) VALUES ('$autor', '$titulo', '$editora','$imgurl' )";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

if(mysqli_insert_id($conexao)){
	$_SESSION['sucesso'] = true;
	header("Location: perfil.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Livro não foi cadastrado com sucesso</p>";
	header("Location: Cadlivros.php");
}
unset($_SESSION['msg']);
