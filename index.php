<?php

    // para os menus
    $page = (isset($_GET['page'])) ? $_GET['page'] : "home";

    // monta os menus
  	$array_menu = array(
        // "home" => "Home",
        "sobre" => "Sobre",
        "portfolio" => "Portfolio",
        // "clientes" => "Clientes",
        "contato" => "Contato"
    );
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>João Paulo Fricks | Desenvolvedor Front End e Designer Gráfico | Curitiba</title>
    <meta name="keywords" content="desenvolvedor front-end, joão paulo fricks, freelancer, programador, interface, web, portfolio, front end, curitiba, parana, brasil" />
    <meta name="description" content="Portfolio de João Paulo Fricks. Desenvolvedor Front End e Designer Gráfico Freelancer de Curitiba.">

    <!-- google -->
    <meta name="google-site-verification" content="BuuNIbzIxyitMc69-xgr7c-oIM3u05CpaWLfSuizcA8" />
    <meta name="author" content="João Paulo Fricks">
    <meta name="Robots" content="all">
    <link rel="canonical" href="http://www.fricks.com.br">

    <!-- twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="http://www.fricks.com.br">
    <meta name="twitter:title" content="João Paulo Fricks | Desenvolvedor Front End e Designer Gráfico | Curitiba">
    <meta name="twitter:description" content="Portfolio de João Paulo Fricks. Desenvolvedor Front End e Designer Gráfico Freelancer de Curitiba.">
    <meta name="twitter:image" content="http://www.fricks.com.br/img500x500.png">

    <!-- facebook -->
    <meta property="fb:admins" content="" />
    <meta property="og:url" content="http://www.fricks.com.br">
    <meta property="og:title" content="João Paulo Fricks | Desenvolvedor Front End e Designer Gráfico | Curitiba">
    <meta property="og:image" content="http://www.fricks.com.br/img500x500.png">
    <meta property="og:site_name" content="João Paulo Fricks | Desenvolvedor Front End e Designer Gráfico | Curitiba">
    <meta property="og:description" content="Portfolio de João Paulo Fricks. Desenvolvedor Front End e Designer Gráfico Freelancer de Curitiba.">

    <!-- google+ schema.org -->
    <meta itemprop="name" content="João Paulo Fricks | Desenvolvedor Front End e Designer Gráfico | Curitiba"/>
    <meta itemprop="description" content="Portfolio de João Paulo Fricks. Desenvolvedor Front End e Designer Gráfico Freelancer de Curitiba.">
    <meta itemprop="image" content="http://www.fricks.com.br/img500x500.png"/>

    <!-- favicon-->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="http://jasny.github.io/bootstrap/examples/navmenu-push/navmenu-push.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- google analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-1624952-8', 'auto');
    ga('send', 'pageview');

    </script>

    <div class="wrap">

        <div class="loader"></div>

        <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
            <div class="hide-content">
                <img src="assets/images/profile.png" alt="João Paulo Fricks" class="">
                <a class="navmenu-brand" href="index.php">João Paulo Fricks</a>
                <p>Designer & Desenvolvedor Front End</p>
                <ul class="nav navmenu-nav">
                    <?php foreach($array_menu as $key => $value): ?>
                        <?php $current = ($key == $page) ? "
                        current" : ""; ?>
                        <li><a class="<?php echo $current; ?>" href="index.php?page=<?php echo $key;?>"><?php echo $value; ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <ul class="social-list list-inline">
                    <li class=""><a href="mailto:jpfricks@gmail.com?subject=Olá João Paulo Fricks" target="_blank"><i class="fa fa-envelope-o"></i></a></li>
                    <li class=""><a href="//br.linkedin.com/in/joaopaulofricks" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                    <li class=""><a href="//twitter.com/JoaoPauloFricks" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li class=""><a href="//github.com/fricks" target="_blank"><i class="fa fa-github-alt"></i></a></li>
                    <li class=""><a href="//pt.stackoverflow.com/users/8050/fricks" target="_blank"><i class="fa fa-stack-overflow"></i></a></li>
                </ul>
            </div>
      </div> <!-- end -->
      <div class="navbar navbar-default navbar-fixed-top">
          <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
      </div> <!-- end -->
      <div class="center-row">
          <div class="center-container">
              <div class="container-fluid">
                  <?php
                  $page = $_GET['page'];
                  $pages = array('home', 'sobre', 'portfolio', 'contato');
                  if (!empty($page)) {
                      if(in_array($page,$pages)) {
                          $page .= '.php';
                          include($page);
                      }
                      else {
                          echo 'Página não encontrada. Retorne para
                          <a href="index.php">Home</a>.';
                      }
                  }
                  else {
                      include('home.php');
                  }
                  ?>
              </div> <!-- container -->
          </div>
      </div> <!-- end -->
      <footer>
          <p>&copy; 2000 - 2016 - João Paulo Fricks <small>|</small> Designer e Desenvolvedor Front End <!-- <small>|</small> <a href="//www.fricks.com.br">www.fricks.com.br</a>--></p>
          <ul class="list-inline">
              <?php foreach($array_menu as $key => $value): ?>
                  <?php $current = ($key == $page) ? "
                  current" : ""; ?>
                  <li><a class="<?php echo $current; ?>" href="index.php?page=<?php echo $key;?>"><?php echo $value; ?></a></li>
              <?php endforeach; ?>
          </ul>
      </footer> <!-- end -->
  </div>

  <!-- js -->
  <script src="assets/js/scripts.js"></script>

</body>
</html>
