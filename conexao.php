<?php
//Estabelecendo a conexão com o banco de dados
define ('HOST', '127.0.0.1');
define ('USUARIO', 'root');
define ('SENHA', '');
define ('DB', 'cadastro');
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Erro na conexao com o banco de dados');
?>
