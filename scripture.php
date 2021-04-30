<?php
session_start();
if (!isset($_SESSION['lang'])){
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $_SESSION['lang'] = $lang;
}
$audio_get= $_GET['Book'] ?? "books/Mark.pdf";
$book_get_name = pathinfo($audio_get,PATHINFO_FILENAME);
?>
<!DOCTYPE html><!--  The overall layout of this site was created in Webflow. http://www.webflow.com  -->
<html data-wf-page="5f90b38a56a082da34349da5" lang="<?=$_SESSION['lang']?>">
<head>
  <meta charset="utf-8">
  <title>Scripture</title>
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
          <a href="index.php" class="navlink1 w-inline-block">
            <div class="nav_link_content_wrapper">
              <div class="text-block-4"><?php if($_SESSION['lang'] == 'en'){echo "Home";}elseif($_SESSION['lang'] == 'ch'){echo "家";}else {echo "ཧོམེ";}?></div><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2">
            </div>
          </a>
        </div>
        <div class="navlink_wrapper">
          <a href="scripture.php" aria-current="page" class="navlink1 w-inline-block w--current">
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
<!--              <div class="text-block-4">Video</div><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2">-->
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
  <div class="scripture_contents_wrapper">
    <h1 class="heading-6"><?php if($_SESSION['lang'] == 'en'){echo "Scripture";}elseif($_SESSION['lang'] == 'ch'){echo "圣经";}else{echo "སཅྲིཔཏུརེ";}?></h1>
    <div class="file_select_wrapper">
      <div class="ssform_wrapper w-form">
        <form action="scripture.php" id="Book_Selector" name="Book_Selector" data-name="Book_Selector" method="get"  class="ssform">
            <select id="Book" name="Book" form="Book_Selector" class="custom_select_1 w-select">
                <option value=""><?php if($_SESSION['lang'] == 'en'){echo "Select a book...";}elseif($_SESSION['lang'] == 'ch'){echo "选择一本书...";}else{echo "སེལེཅཏ་ཨ་བོཨོཀ...";}?></option>s
                <?php
                $books = glob("books/*.pdf");
                foreach ($books as $book){
                    $book_name = pathinfo($book,PATHINFO_FILENAME);
                    ?>
                    <option value="<?=$book?>" <?php if($audio_get === $book){echo "Selected";}?>><?=$book_name?></option>
                    <?php
                }?>
          </select>
            <input type="submit" value="<?php if($_SESSION['lang'] == 'en'){echo "Submit";}elseif($_SESSION['lang'] == 'ch'){echo "提交";}else{echo "སུབམིཏ";}?>" class="custom_submit_1 w-button">
        </form>
      </div>
    </div>
    <div class="pdf_wrapper">
      <h1 class="heading-4"><?php if($_SESSION['lang'] == 'en'){echo "The book of";}elseif($_SESSION['lang'] == 'ch'){echo "的书";}else{echo "ཐེ་བོཨོཀ་ཨོཕ༹";}?> <?=$book_get_name?></h1>
      <div class="html-embed w-embed">
        <a href="<?= $audio_get ?>"><embed type="application/pdf" style="width:100%; height:100%;" scrollbar="1" src="<?=$audio_get?>"></a>
      </div>
    </div>
  </div>
  <div class="footer"></div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5f8d56e9ffb4fdc6eb2fe4d0" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
