<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Francisvan Oliveira</title>
  <meta name="description" content="Desenvolvedor Front End e Wordpress Localizado em Manaus Amazonas">
  <meta name="google-site-verification" content="c7CEMKXXmokL32i7OCPuBqagwRwyOnvil5qbnJlz8NM" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo INCLUDE_PATH; ?>icone/favicon-16x16.png" />
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>./css/style.css">
</head>

<body>
  <header class="header" id="home">
    <a href="<?php echo INCLUDE_PATH; ?>"><img src="<?php echo INCLUDE_PATH; ?>./img/Francisvan.jpg" alt="Lobo" width="304" height="38"></a>
    <nav>
      <ul class="header-menu">
        <li><a href="<?php echo INCLUDE_PATH; ?>#experiencia">Experiência</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>#formacao">Formação</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>#contato">Contato</a></li>
      </ul>
    </nav>
  </header>

  <?php

      $url=isset($_GET['url']) ? $_GET['url'] : 'home';

      if(file_exists('pages/'.$url.'.php')){
          include('pages/'.$url.'.php');
      }else{
          include('pages/404.php');
      }

  ?>

  <footer class="footer" id="contato">
    <div class="footer-container">
      <!--<p class="footer-texto">Estou disponível para novos projetos no momento. Entre em contato comigo e marcamos uma conversa 👋</p>-->
      <ul class="footer-contato">
        <li>francisvan.oliveira@francisvan.com.br</li>
        <li>+55 92 99276-8775</li>
        <li><a href="<?php echo INCLUDE_PATH; ?>https://www.instagram.com/francisvan_oliveira/">Instagram @francisvan_oliveira</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>https://github.com/francisvanoliveira">Github /francisvanoliveira</a></li>
      </ul>
      <p class="footer-copy">Francisvan Oliveira. Todos os direitos reservados.</p>
    </div>
  </footer>

  <a href="#home" id="link-topo">
    <i class="fas fa-arrow-up"></i>
  </a>

</body>

</html>