
<?php
session_start();
include('conexao.php');

//Armazenando os dados em variáveis 
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$pessoa = mysqli_real_escape_string($conexao, trim($_POST['pessoa']));

//Inserindo os dados no banco de dados (incluíndo a data de edição)
$sql = "UPDATE usuario SET usuario = '$usuario', email = '$email', senha = '$senha', editado = NOW()) WHERE id = '1'";

if($conexao->query($sql) === TRUE) {
    $_SESSION ['status_cadastro'] = true;
}   $conexao->close();
    header('Location: perfil.php');
    exit;
?>