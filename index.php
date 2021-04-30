<?php
session_start();
if (!isset($_SESSION['lang'])){
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $_SESSION['lang'] = $lang;
}
?>
<!DOCTYPE html><!--  The overall layout of this site was created in Webflow. http://www.webflow.com  -->
<html data-wf-page="5f8d56e9ffb4fd69a82fe4d1" data-wf-site="5f8d56e9ffb4fdc6eb2fe4d0" lang="<?=$_SESSION['lang']?>">
<head>
  <meta charset="utf-8">
  <title>Home</title>
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
  <div class="header_wrapper">
    <div class="banner_wrapper"><img src="images/Bdenpa-WEB.jpg" loading="eager" width="1706" sizes="100vw" srcset="images/Bdenpa-WEB-p-500.jpeg 500w, images/Bdenpa-WEB-p-800.jpeg 800w, images/Bdenpa-WEB-p-1080.jpeg 1080w, images/Bdenpa-WEB.jpg 1500w" alt="" class="banner_image"></div>
  </div>
  <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navbar_wrapper w-nav">
    <div class="navbar w-clearfix">
      <div class="menu-button w-nav-button">
        <div class="icon w-icon-nav-menu"></div>
      </div>
      <nav role="navigation" class="nav-menu-2 w-nav-menu">
        <div class="navlink_wrapper">
          <a href="index.php" aria-current="page" class="navlink1 w-inline-block w--current">
            <div class="nav_link_content_wrapper">
              <div class="text-block-4"><?php if($_SESSION['lang'] == 'en'){echo "Home";}elseif($_SESSION['lang'] == 'ch'){echo "家";}else {echo "ཧོམེ";}?></div><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2">
            </div>
          </a>
        </div>
        <div class="navlink_wrapper">
          <a href="scripture.php" class="navlink1 w-inline-block">
            <div class="nav_link_content_wrapper">
              <div class="text-block-4"><?php if($_SESSION['lang'] == 'en'){echo "Scripture";}elseif($_SESSION['lang'] == 'ch'){echo "圣经";}else{echo "སཅྲིཔཏུརེ";}?></div><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2">
            </div>
          </a>
        </div>
        <div class="navlink_wrapper">
          <a href="audio.php" class="navlink1 w-inline-block">
            <div class="nav_link_content_wrapper">
              <div class="text-block-4"><?php if($_SESSION['lang'] == 'en'){echo "Audio";}elseif($_SESSION['lang'] == 'ch'){echo "声音的";}else{echo "ཨཽདིཨོ";}?></div><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2">
            </div>
          </a>
        </div>
<!--        <div class="navlink_wrapper">-->
<!--          <a href="video.php" class="navlink1 w-inline-block">-->
<!--            <div class="nav_link_content_wrapper">-->
<!--              <div class="text-block-4">--><?php //if($_SESSION['lang'] == 'en'){echo "Video";}elseif($_SESSION['lang'] == 'ch'){echo "视频";}else{echo "བི༹དེཨོ";}?><!--</div><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2">-->
<!--            </div>-->
<!--          </a>-->
<!--        </div>-->
        <div class="navlink_wrapper">
          <a href="language.php" class="navlink1 w-inline-block">
            <div class="nav_link_content_wrapper">
              <div class="text-block-4"><?php if($_SESSION['lang'] == 'en'){echo "Language";}elseif($_SESSION['lang'] == 'ch'){echo "语言";}else{echo "ལངུཨགེ";}?></div><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2">
            </div>
          </a>
        </div>
      </nav>
    </div>
  </div>
  <div class="home_page_content">
    <div class="content_wrapper">
      <div class="home_page_text_wrapper">
        <h1 class="heading-9"><?php if($_SESSION['lang'] == 'en'){echo "Welcome!";}elseif($_SESSION['lang'] == 'ch'){echo "网站介绍:";}?></h1>
          <?php
          if($_SESSION['lang'] == 'bo'){ ?>
          <p>དམ་པའི་གསུང་རབ་ནི་འཛམ་གླིང་གི་སྐད་རིགས་སྣ་ཚོགས་ལ་བསྒྱུར་ཡོད།  ཐོག་མར་ཨིབ་རི་པའི་སྐད་དང་གྷི་རི་སིའི་སྐད་གཉིས་ཀྱི་ལམ་ནས་བྲིས་ཡོད་པ་དང་།  ད་ལྟ་བོད་ཡིག་ལའང་བསྒྱུར་ཡོད།</p><br/><p>སྐྱབས་མགོན་ཡེ་ཤུས་འདི་སྐད་དུ།  བདག་ནི་ཐར་བའི་ལམ་དང་།  བདེན་པ་ཉིད་དང་།  ཚེ་སྲོག་བཅས་ཡིན་ནོ།།  ང་རང་མ་བརྒྱུད་པར་མི་སུའང་ཡབ་དཀོན་མཆོག་གི་དྲུང་དུ་འགྲོ་མི་ཐུབ་བོ་ཞེས་གསུངས་སོ།།</p><br/><p>བདེན་པ་ཞེས་པའི་དྲ་ཚིགས་འདི་བསྒྲུབས་དོན་ནི།  དམ་པའི་གསུང་རབ་ཀློག་པ་དང་ཉན་རྒྱུར་དགའ་བའི་མི་རྣམས་ཀྱིས་དཀོན་མཆོག་གི་བདེན་པའི་ལམ་འཚོལ་ཐུབ་པའི་ཆེད་དུ་ཡིན།</p><br/><p>ཁྱེད་ཀྱིས་དཀོན་མཆོག་གི་བཀའ་རྣམས་ཀློག་དུས་དཀོན་མཆོག་གིས་ཁྱེད་ལ་བྱིན་རླབས་གནང་བར་ཤོག</p>
          <?php
          }elseif($_SESSION['lang'] == 'ch'){ ?>
          <p>圣经被译为多种语言，而且在世界上广泛流传。尽管最初是由古老的希伯来文和希腊文写成，但现在已经有很多部份翻译成了藏文，这里的资源都是来自安多藏区的藏文。</p><br/><p>耶稣说：“我就是道路、真理、生命，若不借着我，没有人可以到父那里去。”Bdenpa.org 是为了提供上帝的真理给那些愿意来聆听和了解 祂 话语的人们。</p><br/><p>上帝祝福你！</p>
          <?php
          }else{ ?>
              <p>The Bible is widely available in many languages around the world. Though it was originally written in Hebrew and Greek, portions of it are now translated into Tibetan. The books found on this site are intended for readers of Tibetan from Amdo areas of the Tibetan plateau.<br><br>Jesus said, &quot;I am the way, and the truth, and the life. No one comes to the Father except through me.” Bdenpa.org exists to provide access to God’s truth for people who wish to read, listen, or watch resources that are based on God’s Holy Scripture.<br><br>May God bless you as you read His Word!</p>
              <?php
          } ?>
      </div>
      <div class="front_page_video_wrapper">
        <div class="front_page_video">
          <div class="html-embed-3 w-embed"><video style="width:100%; height:100%;" src="videos/Lotus_Storyboards.mp4" controls="" autoplay="">
              Your browser does not support the video tag.
            </video></div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer"></div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5f8d56e9ffb4fdc6eb2fe4d0" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
