
<?php
session_start();
include("conexao.php");

//Verificando se os campos estão vazios
if(empty($_POST['email']) || empty($_POST['senha']) || empty($_POST['usuario']) || empty($_POST['confirmsenha'])){
    header('Location: formcadastro.php');
    exit();
}

//Armazenando os dados em variáveis 
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$confirmsenha = mysqli_real_escape_string($conexao, trim(md5($_POST['confirmsenha'])));
$pessoa = mysqli_real_escape_string($conexao, trim($_POST['pessoa']));

//Confirmando se as senhas informadas são iguais
if($senha != $confirmsenha){
    $_SESSION['senhas'] = true;
    header('Location: formcadastro.php');
	exit();
}

//Garantindo, pelo php, que não haja mais de uma conta com o mesmo email
$sql = "select count(*) as total from usuario where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_cadastrado'] = true;
    header('Location: formcadastro.php');
    exit;
}
//Inserindo os dados no banco de dados (incluíndo a data de cadastro)
$sql = "INSERT INTO usuario (usuario, email, pessoa, senha, data_cadastro) values ('$usuario', '$email', '$pessoa', '$senha', NOW())";

if($conexao->query($sql) === TRUE) {
    $_SESSION ['status_cadastro'] = true;
    $conexao->close();
    header('Location: login.php');
    exit;
}
else {
    die;
}
?>