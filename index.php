<?php
// para os menus
$page = (isset($_GET['page'])) ? $_GET['page'] : "home";

// monta os menus
$array_menu = array(
  // "home" => "Home",
  "sobre" => "About",
  "portfolio" => "Portfolio",
  // "clientes" => "Clientes",
  "contato" => "Contact"
);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>João Paulo | IT Front-end Developer and Designer from Curitiba - Brazil</title>
  <!-- <title>Desenvolvedor Front End e Designer Freelancer de Curitiba - Brasil</title> -->
  <!-- <meta name="keywords" content="desenvolvimento, desenvolvedor, designer, gráfico, programador, front-end, joão paulo cordeiro de meira fricks, freelancer, interface, web, portfolio, front end, curitiba, parana, brasil"> -->
  <!-- <meta name="description" content="Portfolio de João Paulo Cordeiro de Meira Fricks. Designer Gráfico e Desenvolvedor Front End Freelancer de Curitiba - Brasil."> -->
  <meta name="description" content="IT Front-end Developer and Designer from Curitiba - Brazil">

  <!-- manifest -->
  <link rel="manifest" href="manifest.json">

  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="application-name" content="João Paulo | IT Front-end Developer and Designer">
  <meta name="apple-mobile-web-app-title" content="João Paulo | IT Front-end Developer and Designer">
  <meta name="msapplication-starturl" content="/index.php">

  <!-- google -->
  <meta name="google-site-verification" content="BuuNIbzIxyitMc69-xgr7c-oIM3u05CpaWLfSuizcA8">
  <meta name="author" content="João Paulo Cordeiro de Meira Fricks">
  <meta name="Robots" content="all">
  <link rel="canonical" href="http://www.joaolabs.tk">

  <!-- twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:url" content="http://www.joaolabs.tk">
  <meta name="twitter:title" content="João Paulo | IT Front-end Developer and Designer from Curitiba - Brazil">
  <meta name="twitter:description" content="IT Front-end Developer and Designer from Curitiba - Brazil">
  <meta name="twitter:image" content="http://www.joaolabs.tk/img500x500.png">

  <!-- facebook -->
  <meta property="fb:admins" content="">
  <meta property="og:url" content="http://www.joaolabs.tk">
  <meta property="og:title" content="João Paulo | IT Front-end Developer and Designer from Curitiba - Brazil">
  <meta property="og:image" content="http://www.joaolabs.tk/img500x500.png">
  <meta property="og:site_name" content="João Paulo | IT Front-end Developer and Designer from Curitiba - Brazil">
  <meta property="og:description" content="IT Front-end Developer and Designer from Curitiba - Brazil">

  <!-- google+ schema.org -->
  <meta itemprop="name" content="João Paulo | IT Front-end Developer and Designer from Curitiba - Brazil">
  <meta itemprop="description" content="IT Front-end Developer and Designer from Curitiba - Brazil">
  <meta itemprop="image" content="http://www.joaolabs.tk/img500x500.png">

  <!-- favicon-->
  <link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
  <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="theme-color" content="#ffffff">

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
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-1624952-19', 'auto');
    ga('send', 'pageview');

    </script>

  <div class="wrap">
    <div class="loader"></div>
    <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
      <div class="hide-content">
        <a href="/"><img src="assets/images/profile.png" alt="João Paulo" class=""></a>
        <!-- <a class="navmenu-brand" href="index.php">João Paulo Fricks</a> -->
        <p class="nome">João Paulo</p>
        <p class="funcao">IT Front-end Developer and Designer</p>
        <!-- <p class="funcao">Designer e Desenvolvedor Front End Freelancer</p> -->
        <ul class="nav navmenu-nav">
          <?php foreach($array_menu as $key => $value): ?>
            <?php $current = ($key == $page) ? "
            current" : ""; ?>
            <li><a class="<?php echo $current; ?>" href="index.php?page=<?php echo $key;?>"><?php echo $value; ?></a></li>
          <?php endforeach; ?>
        </ul>
        <ul class="social-list list-inline">
          <li class=""><a href="mailto:hire@joaolabs.tk?subject=Hello João Paulo" target="_blank"><i class="fa fa-paper-plane"></i></a></li>
          <li class=""><a href="//br.linkedin.com/in/joaopaulo80" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
          <li class=""><a href="//twitter.com/jpcmf80" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li class=""><a href="//github.com/jpcmf" target="_blank"><i class="fa fa-github-alt"></i></a></li>
          <li class=""><a href="//pt.stackoverflow.com/users/8050/jpcmf80" target="_blank"><i class="fa fa-stack-overflow"></i></a></li>
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
        <div class="container-fluid" style="height:100%;">
          <?php
          $page = $_GET['page'];
          $pages = array('home', 'sobre', 'portfolio', 'contato');
          if (!empty($page)) {
              if(in_array($page,$pages)) {
                  $page .= '.php';
                  include($page);
              }
              else {
                echo '<div class="content-error"><img src="assets/images/john_travolta_404.gif" alt=""><p>Página não encontrada. Retorne para
                <a href="index.php">Home</a>.</p></div>';
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
      <p>&copy; 2000 - 2018 - João Paulo <small>|</small> IT Front-end Developer and Designer <!-- <small>|</small> <a href="//www.joaolabs.tk">www.joaolabs.tk</a>--></p>
      <!-- <p>&copy; 2000 - 2018 - João Paulo <small>|</small> Designer e Desenvolvedor Front End Freelancer <small>|</small> <a href="//www.joaolabs.tk">www.joaolabs.tk</a> </p> -->
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
