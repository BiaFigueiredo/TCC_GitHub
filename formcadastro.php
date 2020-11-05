
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CADASTRE-SE</title>
    <link rel="stylesheet" href="cadastro.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    
    <div class="container">
      <header>Cadastro</header>
      <form action="cadastro.php" method="post">
        <div class="input-field">
          <input type="text" maxlength="50" required>
          <label>Nome</label>
        </div>
        <div class="input-field">
          <input type="email" maxlength="50" required>
          <label>Email</label>
        </div>
<div class="input-field">
          <input class="pswrd" type="password" minlength="5" maxlength="16" required>
          <span class="show">Mostrar</span>
          <label>Senha</label>
        </div>
        <div class="input-field">
          <input class="pswrd" type="password" minlength="5" maxlength="16" required>
          <span class="show">Mostrar</span>
          <label>Confirmar senha</label>
        </div>

        <div class="input-field">
          <select>
            <option>Pessoa Física</option>
            <option>Instituição</option>
          </select>
          <span class="show">SHOW</span>
        </div>

<div class="button">
          <div class="inner">
</div>
<button>CADASTRAR</button>
        </div>
</form>
<div class="signup">
        Já possui cadastro? <a href="formlogin.php">Faça login aqui</a>
      </div>
      <div class="signup">
        <a href="index.php">Voltar a pagina inicial</a>
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
