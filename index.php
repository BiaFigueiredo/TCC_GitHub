<?php
include_once "conexao.php";
session_start();
?>
<html>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LIVROS</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" type="text/css" href="TCCCSS.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<!---------------------------------------- NAVBAR ------------------------------------------------!-->
<nav>
  <div class="logo">
    LIVROS
  </div>
  <input type="checkbox" id="click">
  <label for="click" class="menu-btn">
    <i class="fas fa-bars"></i>
  </label>
  <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="perfil.php">Perfil</a></li>
        <li><a href="chat.php">Chat</a></li>
        <?php
        if(isset($_SESSION['email'])):
          ?>
            <li><a href='Cadlivros.php'>Cadastrar Livro</a></li>
            <li><a href='logout.php'>Logout</a></li>
        <?php
            else:
        ?>
            <li><a href='formcadastro.php'>Cadastro</a></li> 
            <li><a href='formlogin.php'>Login</a></li>
        <?php
          endif;
        ?>
        </ul>
</nav>
<!---------------------------------------- BANNER ------------------------------------------------!-->
<div class="bannerimage"><h4>LIVROS</h4></div>
<!---------------------------------------- TEXTO1 ------------------------------------------------!-->
<!-- MEIO DO SITE -->
<div class="album py-5" style="background-color:white">
  <div class="container">
    <h2 class="Centro Titulo2">LIVROS DISPONIVEIS (mais recentes primeiro)</h2><br><br>
    <div class="row">
        <?php
        $result = $conexao->query('SELECT * from livrosc order by id desc ');
        for ($i=0; $i < $result->num_rows; $i++) {
          $livro = $result->fetch_array(MYSQLI_ASSOC);
        ?>
          <div class="col-md-3">
            <div class="card mb-4 box-shadow">
              <img src="<?php echo $livro['imgurl'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <ul>
                  <li><?php echo utf8_encode($livro['titulo']) ?></li>
                  <li><h6 style="margin-bottom: 0; margin-top: 10px;">Autor:</h6><?php echo utf8_encode($livro['autor']) ?></li>
                  <li><h6 style="margin-bottom: 0; margin-top: 10px;">Editora:</h6><?php echo utf8_encode($livro['editora'])?></li>
                </ul>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
    </div>
    <?php if(isset($_SESSION['email'])):?>
    <h2 class="Centro Titulo2"><a href="Cadlivros.php"> Cadastre seu livro aqui </a></h2><br><br>
    <?php endif; ?>
  </div>
</div>

<!---------------------------------------- CONTEUDO2 ------------------------------------------------!-->
<div style="background-color:#FFCC00; padding-bottom: 70px;">
  <div class="conteudo container">
    <div class='some-page-wrapper'>
      <div class='row'>
        <div class='column'>
          <div class='green-column'>
            <br><br>
            <img class="Imagem1"
                 src="https://cdn.discordapp.com/attachments/428298467123658762/751146650243694592/h16jKYuz2x7x5YDX5AOX8SkrZPMXjUSoy6YLFcDnepxkDqB7EHOzSEmm7sUQegYbqsNBDi4qOYzvHQlDchB1ofVEZs5cv3ku5W5g.png">
          </div>
        </div>
        <div class='column'>
          <div class='blue-column'>
            <h1>O que fazemos</h1>
            <p>Nossa plataforma tem o objetivo de realizar doações e trocas de material de leitura entre os usuários,
              que serão combinadas por chat. Assim, faremos livros em boas condições chegarem a pessoas e instituições
              de baixa renda, para que essas possam ter acesso frequente à literatura.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!---------------------------------------- FOOTER ------------------------------------------------!-->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<footer>
  <div class="main-content">
    <div class="left box">
      <h2>Sobre nós</h2>
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
      <h2>Contato</h2>
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
      <h2>Ajuda</h2>
      <div class="content">
        <form action="#">
          <div class="email">
            <div class="text">Email *</div>
            <input type="email" value="Exemplo@gmail.com">
            <a class="linkrodape" href="perguntasfrequentes">FAQ</a>
          </div>
          <div class="bottom">
            <center>
              <span class="credit">distribuído por <a href="#">Livros</a> | </span>
              <span class="far fa-copyright"></span> 2020 Todos os direitos reservados.
            </center>
          </div>
        </form>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
