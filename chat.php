<?php session_start()?>
<link rel="stylesheet" type="text/css" href="Chat.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>CHAT</title>
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
<div class="bannerimage"><h4>Chat</h4></div>
<!---------------------------------------- CHAT ------------------------------------------------!-->
<script src="https://use.fontawesome.com/45e03a14ce.js"></script>
<div class="main_section">
   <div class="container">
      <div class="chat_container">
         <div class="col-sm-3 chat_sidebar"style="float: right;">
       <div class="row">
            <div id="custom-search-input">
               <div class="input-group col-md-12">
                  <input type="text" class="  search-query form-control" placeholder="Conversation" />
                  <button class="btn btn-danger" type="button">
                  <span class=" glyphicon glyphicon-search"></span>
                  </button>
               </div>
            </div>
            <div class="dropdown all_conversation ">
               <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fa fa-weixin" aria-hidden="true"></i>
               All Conversations
               <span class="caret pull-right"></span>
               </button>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <li><a href="#"> All Conversation </a>  <ul class="sub_menu_ list-unstyled">
                  <li><a href="#"> All Conversation </a> </li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
               </ul>
         </li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
               </ul>
            </div>
            <div class="member_list">
               <ul class="list-unstyled">
                  <li class="left clearfix">
                     <span class="chat-img pull-left">
                     <img src="https://pbs.twimg.com/profile_images/956541141683507200/yKiytA4J_400x400.jpg" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body clearfix">
                        <div class="header_sec">
                           <strong class="primary-font">Jack Sparrow</strong> <strong class="pull-right">
                           09:45AM</strong>
                        </div>
                        <div class="contact_sec">
                           <strong class="primary-font">(123) 123-456</strong> <span class="badge pull-right">3</span>
                        </div>
                     </div>
                  </li>
                  <li class="left clearfix">
                     <span class="chat-img pull-left">
                     <img src="https://pbs.twimg.com/profile_images/956541141683507200/yKiytA4J_400x400.jpg" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body clearfix">
                        <div class="header_sec">
                           <strong class="primary-font">Jack Sparrow</strong> <strong class="pull-right ">
                           09:45AM</strong>
                        </div>
                        <div class="contact_sec">
                           <strong class="primary-font">(123) 123-456</strong> <span class="badge pull-right">3</span>
                        </div>
                     </div>
                  </li>
                  <li class="left clearfix">
                     <span class="chat-img pull-left">
                     <img src="https://pbs.twimg.com/profile_images/956541141683507200/yKiytA4J_400x400.jpg" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body clearfix">
                        <div class="header_sec">
                           <strong class="primary-font">Jack Sparrow</strong> <strong class="pull-right">
                           09:45AM</strong>
                        </div>
                        <div class="contact_sec">
                           <strong class="primary-font">(123) 123-456</strong> <span class="badge pull-right">3</span>
                        </div>
                     </div>
                  </li>
                          <li class="left clearfix">
                     <span class="chat-img pull-left">
                     <img src="https://pbs.twimg.com/profile_images/956541141683507200/yKiytA4J_400x400.jpg" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body clearfix">
                        <div class="header_sec">
                           <strong class="primary-font">Jack Sparrow</strong> <strong class="pull-right">
                           09:45AM</strong>
                        </div>
                        <div class="contact_sec">
                           <strong class="primary-font">(123) 123-456</strong> <span class="badge pull-right">3</span>
                        </div>
                     </div>
                  </li>
                          <li class="left clearfix">
                     <span class="chat-img pull-left">
                     <img src="https://pbs.twimg.com/profile_images/956541141683507200/yKiytA4J_400x400.jpg" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body clearfix">
                        <div class="header_sec">
                           <strong class="primary-font">Jack Sparrow</strong> <strong class="pull-right">
                           09:45AM</strong>
                        </div>
                        <div class="contact_sec">
                           <strong class="primary-font">(123) 123-456</strong> <span class="badge pull-right">3</span>
                        </div>
                     </div>
                  </li>
                          <li class="left clearfix">
                     <span class="chat-img pull-left">
                     <img src="https://pbs.twimg.com/profile_images/956541141683507200/yKiytA4J_400x400.jpg" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body clearfix">
                        <div class="header_sec">
                           <strong class="primary-font">Jack Sparrow</strong> <strong class="pull-right">
                           09:45AM</strong>
                        </div>
                        <div class="contact_sec">
                           <strong class="primary-font">(123) 123-456</strong> <span class="badge pull-right">3</span>
                        </div>
                     </div>
                  </li>
                          <li class="left clearfix">
                     <span class="chat-img pull-left">
                     <img src="https://pbs.twimg.com/profile_images/956541141683507200/yKiytA4J_400x400.jpg" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body clearfix">
                        <div class="header_sec">
                           <strong class="primary-font">Jack Sparrow</strong> <strong class="pull-right">
                           09:45AM</strong>
                        </div>
                        <div class="contact_sec">
                           <strong class="primary-font">(123) 123-456</strong> <span class="badge pull-right">3</span>
                        </div>
                     </div>
                  </li>
               </ul>
            </div></div>
         </div>
         <!--chat_sidebar-->
     
     
         <div class="col-sm-9 message_section">
     <div class="row">
     <div class="new_message_head">
     <div class="pull-left"><button><i class="fa fa-plus-square-o" aria-hidden="true"></i> New Message</button></div><div class="pull-right"><div class="dropdown">
  <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-cogs" aria-hidden="true"></i>  Setting
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Profile</a></li>
    <li><a href="#">Logout</a></li>
  </ul>
</div></div>
     </div><!--new_message_head-->
     
     <div class="chat_area">
     <ul class="list-unstyled">
     <li class="left clearfix">
                     <span class="chat-img1 pull-left">
                     <img src="https://pbs.twimg.com/profile_images/956541141683507200/yKiytA4J_400x400.jpg" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body1 clearfix">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
            <div class="chat_time pull-right">09:40PM</div>
                     </div>
                  </li>
           <li class="left clearfix">
                     <span class="chat-img1 pull-left">
                     <img src="https://pbs.twimg.com/profile_images/956541141683507200/yKiytA4J_400x400.jpg" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body1 clearfix">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
            <div class="chat_time pull-right">09:40PM</div>
                     </div>
                  </li>
                     <li class="left clearfix">
                     <span class="chat-img1 pull-left">
                     <img src="https://pbs.twimg.com/profile_images/956541141683507200/yKiytA4J_400x400.jpg" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body1 clearfix">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
              <div class="chat_time pull-right">09:40PM</div>
                     </div>
                  </li>
          <li class="left clearfix admin_chat">
                     <span class="chat-img1 pull-right">
                     <img src="https://pbs.twimg.com/profile_images/956541141683507200/yKiytA4J_400x400.jpg" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body1 clearfix">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
            <div class="chat_time pull-left">09:40PM</div>
                     </div>
                  </li>
                  <li class="left clearfix admin_chat">
                     <span class="chat-img1 pull-right">
                     <img src="https://pbs.twimg.com/profile_images/956541141683507200/yKiytA4J_400x400.jpg" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body1 clearfix">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
              <div class="chat_time pull-left">09:40PM</div>
                     </div>
                  </li>
          
     </ul>
     </div><!--chat_area-->
          <div class="message_write">
       <textarea class="form-control" placeholder="type a message"></textarea>
     <div class="clearfix"></div>
     <div class="chat_bottom"><a href="#" class="pull-left upload_btn"><i class="fa fa-cloud-upload" aria-hidden="true"></i>
 Add Files</a>
 <a href="#" class="pull-right btn btn-success">
 Send</a></div>
     </div>
     </div>
         </div> <!--message_section-->
      </div>
   </div>
</div>



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