<?php
session_start();
include_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EDITAR</title>
    <link rel="stylesheet" href="Cadastro.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    
    <div class="container">
      <header>Editar</header>
      <form action="editar.php" method="POST">
      <div class="input-field">
          <input name="emailantigo" type="email" maxlength="50" required>
          <label>Email já cadastrado</label>
        </div>
        <div class="input-field">
          <input name="email" type="email" maxlength="50" required>
          <label>Novo email</label>
        </div>
<div class="input-field">
          <input name="senha" class="pswrd" type="password" minlength="5" maxlength="16" required>
          <label>Nova senha</label>
        </div>
        <div class="input-field">
          <select name=pessoa>
            <option>Pessoa Física</option>
            <option>Instituição</option>
          </select>
          <span class="show">SHOW</span>
        </div>

<div class="button">
          <div class="inner">
</div>
<button type="submit">EDITAR</button>
        </div>
</form>
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
