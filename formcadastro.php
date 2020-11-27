<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CADASTRE-SE</title>
    <link rel="stylesheet" href="Cadastro.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    
    <div class="container">
      <header>Cadastro</header>
      <?php
        if(isset($_SESSION['senhas'])):
      ?>
      <div style="color:RGB(220,0,0)">
        <p>As senhas inseridas não conferem. Por favor tente novamente.</p>
      </div>
      <?php
        endif;
        unset($_SESSION['senhas']);
      ?>
      <?php
        if(isset($_SESSION['usuario_cadastrado'])):
      ?>
      <div style="color:RGB(220,0,0)">
        <p>O email inserido já está cadastrado. Informe outro e tente novamente.</p>
      </div>
      <?php
        endif;
        unset($_SESSION['usuario_cadastrado']);
      ?>
      <form action="cadastro.php" method="POST">
        <div class="input-field">
          <input name="usuario" type="text" maxlength="50" required>
          <label>Nome</label>
        </div>
        <div class="input-field">
          <input name="email" type="email" maxlength="50" required>
          <label>Email</label>
        </div>
<div class="input-field">
          <input name="senha" class="pswrd" type="password" minlength="5" maxlength="16" required>
          <span class="show">SHOW</span>
          <label for="senha">Senha</label>
        </div>
        <div class="input-field">
          <input name="confirmsenha" class="pswrd" type="password" minlength="5" maxlength="16" required>
          <label for="confirmsenha">Confirmar senha</label>
        </div>
        <div class="input-field">
          <select name=pessoa>
            <option>Pessoa Física</option>
            <option>Instituição</option>
          </select>
        </div>

<div class="button">
          <div class="inner">
</div>
<button type="submit">CADASTRAR</button>
        </div>
</form>
<div class="signup">
        Já possui cadastro? <a href="formlogin.php">Faça login aqui</a>
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
