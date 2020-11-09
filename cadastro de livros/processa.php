<?php
session_start();
include_once("conexao.php");

$autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$editora = filter_input(INPUT_POST, 'editora', FILTER_SANITIZE_STRING);
$imgurl = filter_input(INPUT_POST, 'imgurl', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO livrosc (autor, titulo, editora, imgurl) VALUES ('$autor', '$titulo', '$editora','$imgurl' )";
$resultado_usuario = mysqli_query($conn, $result_usuario);

//echo "1: $autor <br>";
//echo "2: $titulo <br>";
//echo "3: $editora <br>";
//echo "4: $imgurl <br>";


if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Livro cadastrado com sucesso</p>";
	header("Location: Cadlivros.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Livro não foi cadastrado com sucesso</p>";
	header("Location: Cadlivros.php");
}
