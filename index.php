<?php 
	include('config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Francisvan Oliveira</title>
        <link rel="icon" type="image/png" sizes="32x32" href="icone/favicon-16x16.png" />
        <link href="<?php echo INCLUDE_PATH; ?>css/teste.css" rel="stylesheet">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="c7CEMKXXmokL32i7OCPuBqagwRwyOnvil5qbnJlz8NM" />
    </head>
    <body>
        <!-- navbar  -->
        <nav class="navbar">
            <div class="container flex">
                <a href="<?php echo INCLUDE_PATH; ?>" class="site-brand">
                    Francisvan<span>Oliveira</span>
                </a>

                <button type="button" id="navbar-show-btn" class="flex">
                    <i class="fas fa-bars"></i>
                </button>
                <div id="navbar-collapse">
                    <button type="button" id="navbar-close-btn" class="flex">
                        <i class="fas fa-times"></i>
                    </button>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?php echo INCLUDE_PATH; ?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo INCLUDE_PATH; ?>galeria" class="nav-link">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo INCLUDE_PATH; ?>blog" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo INCLUDE_PATH; ?>sobre" class="nav-link">Sobre mim</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo INCLUDE_PATH; ?>contato" class="nav-link">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end navbar  -->

       <?php
       
            $url = isset($_GET['url']) ? $_GET['url'] : 'home';

            if(file_exists('pages/'.$url.'.php')){
                include('pages/'.$url.'.php');
            }else{
                include('pages/404.php');
            }

       ?>

        <!-- footer -->
        <footer class = "py-4">
            <div class = "container footer-row">
                <div class = "footer-item">
                    <a href = "<?php echo INCLUDE_PATH; ?>" class = "site-brand">
                        Francisvan<span>Oliveira</span>
                    </a>
                    <p class = "text">Estudante Dev</p>
                    <p class = "text">Manaus/AM - Brasil</p>
                </div>

                <div class = "footer-item">
                    <h2>Redes Sociais </h2>
                    <ul class = "social-links">
                        <li>
                            <a href="https://www.instagram.com/francisvan_oliveira/" target="_blank">
                                <i class = "fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/francisvanoliveira" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/francisvan-oliveira-547bab9a/" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h2>Menu</h2>
                    <ul>
                        <li><a href = "<?php echo INCLUDE_PATH; ?>">Home</a></li>
                        <li><a href = "<?php echo INCLUDE_PATH; ?>galeria">Galeria</a></li>
                        <li><a href = "<?php echo INCLUDE_PATH; ?>blog">Blog</a></li>
                        <li><a href = "<?php echo INCLUDE_PATH; ?>sobre">Sobre mim</a></li>
                        <li><a href = "<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                    </ul>
                </div>

                <div class = "subscribe-form footer-item">
                    <h2>E-mail</h2>
                    <p class = "text">francisvan.oliveira@francisvanoliveira.com.br</p>
                </div>
            </div>
            <div>
                <p class="text">Francisvan Oliveira 2023 - Todos os direitos reservados.</p>
            </div>
        </footer>
        <!-- end of footer -->

        <!-- js -->
        <script src = "<?php echo INCLUDE_PATH; ?>/js/script.js"></script>
    </body>
</html>