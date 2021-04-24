<?php
session_start();
if (!isset($_SESSION['lang'])){
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $_SESSION['lang'] = $lang;
}
if(isset($_GET['lang'])){
    $_SESSION['lang']= $_GET['lang'];
}
?>
<!DOCTYPE html><!--  The overall layout of this site was created in Webflow. http://www.webflow.com  -->
<html data-wf-page="600df864eba1461ff9728b1f" data-wf-site="5f8d56e9ffb4fdc6eb2fe4d0" lang="<?=$_SESSION['lang']?>">
<head>
    <meta charset="utf-8">
    <title>Language</title>
    <meta content="Language" property="og:title">
    <meta content="Language" property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/webflow.css" rel="stylesheet" type="text/css">
    <link href="css/Tibetan.css" rel="stylesheet" type="text/css">
    <!-- [if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"
            type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function (o, c) {
            var n = c.documentElement, t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);</script>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body class="website_theme">
<div class="header_wrapper">
    <div class="banner_wrapper"><img src="images/Bdenpa-WEB.jpg" loading="eager" width="1706" sizes="100vw"
                                     srcset="images/Bdenpa-WEB-p-500.jpeg 500w, images/Bdenpa-WEB-p-800.jpeg 800w, images/Bdenpa-WEB-p-1080.jpeg 1080w, images/Bdenpa-WEB.jpg 1500w"
                                     alt="" class="banner_image"></div>
</div>
<div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navbar_wrapper w-nav">
    <div class="navbar w-clearfix">
        <div class="menu-button w-nav-button">
            <div class="icon w-icon-nav-menu"></div>
        </div>
        <nav role="navigation" class="nav-menu-2 w-nav-menu">
            <div class="navlink_wrapper">
                <a href="home.php" class="navlink1 w-inline-block">
                    <div class="nav_link_content_wrapper">
                        <div class="text-block-4"><?php if($_SESSION['lang'] == 'en'){echo "Home";}elseif($_SESSION['lang'] == 'ch'){echo "家";}else {echo "ཧོམེ";}?></div>
                        <img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg"
                             loading="lazy" alt="" class="image-2">
                    </div>
                </a>
            </div>
            <div class="navlink_wrapper">
                <a href="scripture.php" class="navlink1 w-inline-block">
                    <div class="nav_link_content_wrapper">
                        <div class="text-block-4"><?php if($_SESSION['lang'] == 'en'){echo "Scripture";}elseif($_SESSION['lang'] == 'ch'){echo "圣经";}else{echo "སཅྲིཔཏུརེ";}?></div>
                        <img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg"
                             loading="lazy" alt="" class="image-2">
                    </div>
                </a>
            </div>
            <div class="navlink_wrapper">
                <a href="audio.php" class="navlink1 w-inline-block">
                    <div class="nav_link_content_wrapper">
                        <div class="text-block-4"><?php if($_SESSION['lang'] == 'en'){echo "Audio";}elseif($_SESSION['lang'] == 'ch'){echo "声音的";}else{echo "ཨཽདིཨོ";}?></div>
                        <img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg"
                             loading="lazy" alt="" class="image-2">
                    </div>
                </a>
            </div>
<!--            <div class="navlink_wrapper">-->
<!--                <a href="video.php" class="navlink1 w-inline-block">-->
<!--                    <div class="nav_link_content_wrapper">-->
<!--                        <div class="text-block-4">--><?php //if($_SESSION['lang'] == 'en'){echo "Video";}elseif($_SESSION['lang'] == 'ch'){echo "视频";}else{echo "བི༹དེཨོ";}?><!--</div>-->
<!--                        <img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg"-->
<!--                             loading="lazy" alt="" class="image-2">-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
            <div class="navlink_wrapper">
                <a href="language.php" aria-current="page" class="navlink1 w-inline-block w--current">
                    <div class="nav_link_content_wrapper">
                        <div class="text-block-4"><?php if($_SESSION['lang'] == 'en'){echo "Language";}elseif($_SESSION['lang'] == 'ch'){echo "语言";}else{echo "ལངུཨགེ";}?></div>
                        <img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg"
                             loading="lazy" alt="" class="image-2">
                    </div>
                </a>
            </div>
        </nav>
    </div>
</div>
<div class="language_main_content">
    <div class="language_wrapper">
        <a href="#" class="language w-inline-block" onclick="set_session('en')">
            <div class="lang_select_wrapper">
                <h1 class="heading-8">English</h1>
                <p class="paragraph-2">This is a paragraph in english. Choose this option if you wish to see the website
                    in english. Some languages may have more content available to them due to lack of resources on our
                    end</p>
            </div>
        </a>
        <a href="#" class="language w-inline-block" onclick="set_session('ch')">
            <div class="lang_select_wrapper">
                <h1 class="heading-8">中国人</h1>
                <p class="paragraph-2">这是中文的一段。如果您希望以中文查看网站，请选择此选项。由于我们缺乏资源，某些语言可能有更多可用的内容</p>
            </div>
        </a>
        <a href="#" class="language w-inline-block" onclick="set_session('bo')">
            <div class="lang_select_wrapper">
                <h1 class="heading-8">ཊིབེཏན</h1>
                <p class="paragraph-2">ཋིས་ཨིས་ཨ་པརགྲཕ་ཨིན་ཊིབེཏན་ཧོཨོསེ་ཐིས་ཨོཔཏིཨོན་ཨིཕ༹་ཡོཨུ་ཝིཤ་ཏོ་སེཨེ་ཐེ་ཝེབསིཏེ་ཨིན་ཊིབེཏན་ཨོམེ་ལངུཨགེས་མཡ་ཧབེ༹་མོརེ་ཅོནཏེནཏ་ཨབཻ༹ལབླེ་ཏོ་ཐེམ་དུཨེ་ཏོ་ལཅཀ་ཨོཕ༹་རེསོཨུརཅེས་ཨོན་ཨོཨུར་ཨེནད</p>
            </div>
        </a>
    </div>
</div>
<div class="footer"></div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5f8d56e9ffb4fdc6eb2fe4d0"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
<script src="js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<script type="text/javascript">
    function set_session(lang){
        window.location.href="language.php?lang="+lang;
    }
</script>
</body>
</html>