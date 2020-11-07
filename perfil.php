<?php
include('verifica_login.php');
include('conexao.php');
?>
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>PERFIL</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <!---------------------------------------- NAVBAR ------------------------------------------------!-->
    <nav>
      <div class="logo">
LIVROS</div>
<input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="recentes.php">Livros Recentes</a></li>
        <li><a href="perfil.php">Perfil</a></li>
        <li><a href="chat.php">Chat</a></li>
        <li><a href="formcadastro.php">Cadastro</a></li>
        <li><a href="formlogin.php">Login</a></li>
        </ul>
</nav>
    <!---------------------------------------- BANNER ------------------------------------------------!-->
<div class="bannerimage"><h4>USUÁRIO</h4></div>
    <!---------------------------------------- TEXTO1 ------------------------------------------------!-->
     <div style=" padding-bottom: 70px;">
                            <div class="conteudo container" >
                                <div class='some-page-wrapper'>
                                  <div class='row'>
                                    <div class='column'>
                                      <div class='green-column'>
                                        <br>
                                      </div>
                                    </div>
                                      <div class='column'>
                                      <div class='blue-column'>
                                        <h1>Dados do perfil</h1>
                                     <div class="Lista01">       
                                       <br>
                                       <ul>
                                        <li><?php echo $_SESSION['email'];?></li>
                                        <li><?php echo $_SESSION['usuario'];?></li>
                                        <br><br>
                                        <h2><a href="logout.php">Sair</a></h2>
                                        </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div></div>
                            <!---------------------------------------- TEXTO1 ------------------------------------------------!-->

<div class="jumbotron jumbo2" style="background-color: #FFCC00;">

  <div class="container">
  <form class="formulario">
<h1> Fale Conosco <a name= "faq"></a></h1>
<br>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="exemplo@email.com" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nome</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Fale conosco</label>
    <select multiple class="form-control option" id="exampleFormControlSelect2" required>
      <option>Esqueci a senha </option>
      <option>Mudar a senha </option>
      <option>Reportar bug</option>
      <option>Outros</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mensagem </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">&nbsp;&nbsp;Enviar&nbsp;&nbsp;</button>
</form>
</div>
  <hr class="my-4"></div>

<!---------------------------------------- FOOTER ------------------------------------------------!-->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
<footer>
      <div class="main-content">
        <div class="left box">
          <h2>
Sobre nós</h2>
<div class="content">
            <p>Este é um projeto realizado como trabalho de conclusão de curso de: Beatriz Figueiredo, Beatriz Menezes, Guilherme Kina, Leonardo Akahoshi, Paulo Gabriel e Pedro Miranda.</p>
<div class="social">
              <a href="https://facebook.com"><span class="fab fa-facebook-f"></span></a>
              <a href="https://twitter.com"><span class="fab fa-twitter"></span></a>
              <a href="https://instagram.com"><span class="fab fa-instagram"></span></a>
              <a href="https://youtube.com"><span class="fab fa-youtube"></span></a>
            </div>
</div>
</div>
<div class="center box">
          <h2>
Contato</h2>
<div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Etec PJ</span>
            </div>
<div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">9-9999-9999</span>
            </div>
<div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">Exemplo@gmail.com</span>
            </div>
</div>
</div>
<div class="right box">
          <h2>
Ajuda</h2>
<div class="content">
            <form action="#">
              <div class="email">
                <div class="text">
Email *</div>
<input type="email" value="Exemplo@gmail.com">
                <a class="linkrodape" href="#faq">FAQ</a>

              </div>
<div class="bottom">
<center>
          <span class="credit">distribuído por <a href="#">Livros</a> | </span>
          <span class="far fa-copyright"></span> 2020 Todos os direitos reservados.
        </center>
</div>


</body>
</html>
