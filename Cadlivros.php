
<?php include_once("conexao.php"); 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>

  <?php
    if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    ?>
    <form method="POST" action="processa.php">
  <body>
<div class="login-box">
  <h1>Resgistro Livros</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="user" maxlength="50" placeholder="Seu email" required>
  </div>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="autor" maxlength="50" placeholder="Autor" required>
  </div>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="titulo" maxlength="50" placeholder="Título" required>
  </div>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="editora" maxlength="20" placeholder="Editora" required>
  </div>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="imgurl" placeholder="URL da imagem de capa" maxlength="1000" required>
  </div>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="sinopse" maxlength="2000" placeholder="Sinopse do livro" required>
  </div>
  <input type="submit" class="btn" value="Cadastrar">
<h4>Se o email estiver incorreto, os interessados não poderão te contatar.</h4>
  </form>
  
</div>
  </body>
</html>
