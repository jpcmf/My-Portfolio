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
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>João Paulo | UI Designer and Front-end Developer from Curitiba - Brazil</title>
  <meta name="description" content="Welcome to my portfolio. I am a UI Designer and Front-end Developer from Curitiba - Brazil">
  <!-- <meta name="keywords" content="desenvolvimento, desenvolvedor, designer, gráfico, programador, front-end, joão paulo cordeiro de meira fricks, freelancer, interface, web, portfolio, front end, curitiba, parana, brasil"> -->

  <!-- manifest -->
  <link rel="manifest" href="manifest.json">

  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="application-name" content="João Paulo | UI Designer and Front-end Developer">
  <meta name="apple-mobile-web-app-title" content="João Paulo | UI Designer and Front-end Developer">
  <meta name="msapplication-starturl" content="/index.php">

  <!-- google -->
  <meta name="google-site-verification" content="BuuNIbzIxyitMc69-xgr7c-oIM3u05CpaWLfSuizcA8">
  <meta name="author" content="João Paulo Cordeiro de Meira Fricks">
  <meta name="Robots" content="all">
  <link rel="canonical" href="https://www.joaolabs.tk">

  <!-- twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:url" content="https://www.joaolabs.tk">
  <meta name="twitter:title" content="João Paulo | UI Designer and Front-end Developer from Curitiba - Brazil">
  <meta name="twitter:description" content="UI Designer and Front-end Developer from Curitiba - Brazil">
  <meta name="twitter:image" content="https://www.joaolabs.tk/img500x500.png">

  <!-- facebook -->
  <meta property="fb:admins" content="">
  <meta property="og:url" content="https://www.joaolabs.tk">
  <meta property="og:title" content="João Paulo | UI Designer and Front-end Developer from Curitiba - Brazil">
  <meta property="og:image" content="https://www.joaolabs.tk/img500x500.png">
  <meta property="og:site_name" content="João Paulo | UI Designer and Front-end Developer from Curitiba - Brazil">
  <meta property="og:description" content="UI Designer and Front-end Developer from Curitiba - Brazil">

  <!-- google+ schema.org -->
  <meta itemprop="name" content="João Paulo | UI Designer and Front-end Developer from Curitiba - Brazil">
  <meta itemprop="description" content="UI Designer and Front-end Developer from Curitiba - Brazil">
  <meta itemprop="image" content="https://www.joaolabs.tk/img500x500.png">

  <!-- favicon-->
  <link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
  <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="theme-color" content="#6b6053">

  <!-- css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Start of Async Drift Code -->
  <script>
  !function() {
    var t;
    if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0,
      t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
      t.factory = function(e) {
        return function() {
          var n;
          return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
        };
      }, t.methods.forEach(function(e) {
        t[e] = t.factory(e);
      }), t.load = function(t) {
        var e, n, o, i;
        e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"),
        o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js",
        n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
      });
    }();
    drift.SNIPPET_VERSION = '0.3.1';
    drift.load('t6w8hbfce4yc');
    </script>
    <!-- End of Async Drift Code -->

    <!-- register SW -->
    <script>
      if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('assets/js/sw.js')
        .then(reg => console.info('registered sw', reg))
        .catch(err => console.error('error registering sw', err));
      }
      // link to a image file
      var iconUrl = 'https://www.seeklogo.net/wp-content/uploads/2014/10/Google-Chrome-logo-vector-download.png';

      // create the <img> html element
      // on first load it will request the image
      // second time it will load it from cache directly thanks to the service worker
      var imgElement = document.createElement('img');
      imgElement.src = iconUrl;
    </script>
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
        <a href="/"><img src="assets/images/logo.png" alt="</joãopaulo>"></a>
        <!-- <a class="navmenu-brand" href="index.php">João Paulo Fricks</a> -->
        <!-- <p class="nome">João Paulo</p> -->
        <p class="funcao">UI Designer and Front-end Developer</p>
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
        </div>
      </div>
    </div> <!-- end -->
    <footer>
      <p>&copy; 2000 - 2018 - João Paulo <small>|</small> UI Designer and Front-end Developer <!-- <small>|</small> <a href="//www.joaolabs.tk">www.joaolabs.tk</a>--></p>
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
  <script src="https://cdn.rawgit.com/GoogleChrome/pwacompat/v1.0.3/pwacompat.min.js"></script>
  <script src="assets/js/scripts.js"></script>

</body>
</html>
