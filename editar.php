
<?php
session_start();
include('conexao.php');

//Armazenando os dados em variáveis 
$email = filter_input(INPUT_POST, 'emailantigo', FILTER_VALIDATE_EMAIL);
$novoemail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$novasenha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$novapessoa = filter_input(INPUT_POST,'pessoa');

//Inserindo os dados no banco de dados (incluíndo a data de edição)
$sql = "UPDATE usuario SET email = '$novoemail', senha = 'md5($novasenha)', pessoa = '$novapessoa', editado = NOW()) WHERE email = '$email'";

if($conexao->query($sql) === TRUE) {
    $_SESSION ['status_cadastro'] = true;
}   $conexao->close();
    header('Location: perfil.php');
    exit;
?>