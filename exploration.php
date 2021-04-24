<?php
session_start();
if (!isset($_SESSION['lang'])){
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $_SESSION['lang'] = $lang;
}
?>
<!DOCTYPE html><!--  The overall layout of this site was created in Webflow. http://www.webflow.com  -->
<html data-wf-page="5fb59e357357c6e59915ace4" data-wf-site="5f8d56e9ffb4fdc6eb2fe4d0" lang="<?=$_SESSION['lang']?>">
<head>
  <meta charset="utf-8">
  <title>Exploration</title>
  <meta content="Exploration" property="og:title">
  <meta content="Exploration" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/Tibetan.css" rel="stylesheet" type="text/css">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body class="website_theme">
  <div class="banner_wrapper"><img src="images/Bdenpa-WEB.jpg" loading="eager" width="1706" sizes="100vw" srcset="images/Bdenpa-WEB-p-500.jpeg 500w, images/Bdenpa-WEB-p-800.jpeg 800w, images/Bdenpa-WEB-p-1080.jpeg 1080w, images/Bdenpa-WEB.jpg 1500w" alt="" class="banner_image"></div>
  <div class="div-block-9">
    <div data-collapse="medium" data-animation="default" data-duration="400" data-doc-height="1" role="banner" class="navbar_wrapper w-nav">
      <div class="navbar w-clearfix">
        <div class="menu-button w-nav-button">
          <div class="w-icon-nav-menu"></div>
        </div>
        <nav role="navigation" class="nav-menu-2 w-nav-menu">
          <a href="home.php" class="navlink1 w-inline-block">
            <div class="text-block-4">Home</div><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2">
          </a>
          <a href="scripture.php" class="navlink1 w-inline-block">
            <div class="text-block-4">Scripture</div><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2">
          </a>
          <a href="audio.php" class="navlink1 w-inline-block">
            <div class="text-block-4">Audio</div><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2">
          </a>
          <a href="video.php" class="navlink1 w-inline-block">
            <div class="text-block-4">Video</div><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2">
          </a>
          <a href="exploration.php" aria-current="page" class="navlink1 w-inline-block w--current">
            <div class="text-block-4">Exploration</div><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2">
          </a>
          <a href="home.php" class="navlink1 w-inline-block">
            <div class="text-block-4">Language</div><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2">
          </a>
        </nav>
      </div>
    </div>
    <ul role="list" class="list w-list-unstyled">
      <li>
        <a href="home.php" class="link-block w-inline-block">
          <div class="w-row">
            <div class="w-col w-col-2"><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt=""></div>
            <div class="w-col w-col-10">
              <h1 class="heading-3">Home</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
            </div>
          </div>
        </a>
      </li>
      <li>
        <a href="scripture.php" class="link-block w-inline-block">
          <div class="w-row">
            <div class="w-col w-col-2"><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt=""></div>
            <div class="w-col w-col-10">
              <h1 class="heading-3">Scripture</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
            </div>
          </div>
        </a>
      </li>
      <li>
        <a href="audio.php" class="link-block w-inline-block">
          <div class="w-row">
            <div class="w-col w-col-2"><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt=""></div>
            <div class="w-col w-col-10">
              <h1 class="heading-3">Audio</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
            </div>
          </div>
        </a>
      </li>
      <li>
        <a href="video.php" class="link-block w-inline-block">
          <div class="w-row">
            <div class="w-col w-col-2"><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt=""></div>
            <div class="w-col w-col-10">
              <h1 class="heading-3">Video</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
            </div>
          </div>
        </a>
      </li>
      <li>
        <a href="home.php" class="link-block w-inline-block">
          <div class="w-row">
            <div class="w-col w-col-2"><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt=""></div>
            <div class="w-col w-col-10">
              <h1 class="heading-3">Language</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
            </div>
          </div>
        </a>
      </li>
    </ul>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5f8d56e9ffb4fdc6eb2fe4d0" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>