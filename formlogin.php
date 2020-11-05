<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="cadastro.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
  <div class="container">
      <header>Login</header>
    <?php
      if(isset($_SESSION['nao_autenticado'])):
    ?>
    <div style="background-color: rgb(225,0,0);">
    <p>ERRO: Usuário ou senha inválidos.</p>
    </div>
    <?php
      endif;
      unset($_SESSION['nao_autenticado']);
    ?>
      <form action="login.php" method="post">
        <div class="input-field">
          <input name="email" type="email" id="email" required>
          <label for="email">Email</label>
        </div>
<div class="input-field">
          <input name="senha" class="pswrd" type="password" id="senha" required>
          <span class="show">SHOW</span>
          <label for="senha">Senha</label>
        </div>
<div class="button">
          <div class="inner">
</div>
<button type="submit">LOGIN</button>
        </div>
</form>
<div class="signup">
        Não é cadastrado? <a href="formcadastro.php">Cadastre-se</a>
      </div>
      <div class="signup">
        <a href="index.php">Voltar à pagina inicial</a>
      </div>
</div>
<script>
      var input = document.querySelector('.pswrd');
      var show = document.querySelector('.show');
      show.addEventListener('click', active);
      function active(){
        if(input.type === "password"){
          input.type = "text";
          show.style.color = "#1DA1F2";
          show.textContent = "HIDE";
        }else{
          input.type = "password";
          show.textContent = "SHOW";
          show.style.color = "#111";
        }
      }
    </script>

  </body>
</html>

