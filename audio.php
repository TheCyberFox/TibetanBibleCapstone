<?php
session_start();
if (!isset($_SESSION['lang'])){
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $_SESSION['lang'] = $lang;
}
$audio_get = "";
if (isset($_GET['Song'])) {
    $audio_get = $_GET['Song'];
}
if (isset($_GET['Book'])) {
    $audio_get = $_GET['Book'];
}
if (isset($_GET['Story'])) {
    $audio_get = $_GET['Story'];
}
$audio_type = $_GET['audio_type'] ?? 1;
$audio_get_name = pathinfo($audio_get, PATHINFO_FILENAME);
?>
<!DOCTYPE html><!--  The overall layout of this site was created in Webflow. http://www.webflow.com  -->
<html data-wf-page="5fa31ef7df77d76f07886102" data-wf-site="5f8d56e9ffb4fdc6eb2fe4d0" lang="<?=$_SESSION['lang']?>">
<head>
    <meta charset="utf-8">
    <title>Audio</title>
    <meta content="Audio" property="og:title">
    <meta content="Audio" property="twitter:title">
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
    <div class="banner_wrapper"><img src="images/Bdenpa-WEB.jpg" width="1706" sizes="100vw" srcset="images/Bdenpa-WEB-p-500.jpeg 500w, images/Bdenpa-WEB-p-800.jpeg 800w, images/Bdenpa-WEB-p-1080.jpeg 1080w, images/Bdenpa-WEB.jpg 1500w" alt="" class="banner_image"></div>
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
                <a href="audio.php" aria-current="page" class="navlink1 w-inline-block w--current">
                    <div class="nav_link_content_wrapper">
                        <div class="text-block-4"><?php if($_SESSION['lang'] == 'en'){echo "Audio";}elseif($_SESSION['lang'] == 'ch'){echo "声音的";}else{echo "ཨཽདིཨོ";}?></div><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2">
                    </div>
                </a>
            </div>
<!--            <div class="navlink_wrapper">-->
<!--                <a href="video.php" class="navlink1 w-inline-block">-->
<!--                    <div class="nav_link_content_wrapper">-->
<!--                        <div class="text-block-4">Video</div><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2">-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
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
<div class="audio_page_contents_wrapper">
    <h1 class="heading-5"><?php if($_SESSION['lang'] == 'en'){echo "AUDIO";}elseif($_SESSION['lang'] == 'ch'){echo "声音的";}else{echo "ཨཽདིཨོ";}?></h1>
    <form method="get" action="#">
        <label for="audio_type">Audio type:</label><select class="audio_type" id="audio_type" name="audio_type" onchange="this.form.submit()">
            <?php
            $selected = ["1"=>"", "2"=>"", "3"=>""];
            if($audio_type == 1){
                $selected["1"] = "selected=\"selected\"";
            } elseif($audio_type == 2){
                $selected["2"] = "selected=\"selected\"";
            }elseif($audio_type == 3){
                $selected["3"] = "selected=\"selected\"";
            }
            ?>
            <option value="1" <?=$selected["1"]?>><?php if($_SESSION['lang'] == 'en'){echo "Songs";}elseif($_SESSION['lang'] == 'ch'){echo "歌曲";}else{echo "སོངས";}?></option>
            <option value="2" <?=$selected["2"]?>><?php if($_SESSION['lang'] == 'en'){echo "Books";}elseif($_SESSION['lang'] == 'ch'){echo "图书";}else{echo "བོཨོཀས";}?></option>
            <option value="3" <?=$selected["3"]?>><?php if($_SESSION['lang'] == 'en'){echo "Stories";}elseif($_SESSION['lang'] == 'ch'){echo "故事";}else{echo "སྟོརིཨེས";}?></option>
        </select>
    </form>
    <div class="audio_content">
        <?php
        switch ($audio_type){
            case 1:
                ?>
                <div class="div-block-11">
                    <div class="file_select_wrapper">
                        <div class="ssform_wrapper w-form">
                            <form action="audio.php" id="Song_Selector" name="Song_Selector" data-name="Audio_Selector"
                                  method="get" class="ssform">
                                <select id="Audio" name="Song" form="Song_Selector" class="custom_select_1 w-select">
                                    <option value=""><?php if($_SESSION['lang'] == 'en'){echo "Select a song...";}elseif($_SESSION['lang'] == 'ch'){echo "选择一首歌曲...";}else{echo "སེལེཅཏ་ཨ་སོང...";}?></option>
                                    s
                                    <?php
                                    $mp3gallery = file_get_contents("json/mp3gallery.json");
                                    $resultmp3json = json_decode($mp3gallery, true);
                                    foreach ($resultmp3json['album']['songs'] as $songs) {
                                        foreach ($songs['tracks']['item'] as $song) {
                                            ?>
                                            <option value="<?= pathinfo($song['song'],PATHINFO_BASENAME) ?>"<?php if (pathinfo($audio_get, PATHINFO_BASENAME) === pathinfo($song['song'],PATHINFO_BASENAME)) {
                                                echo "Selected";
                                            } ?>><?= $song['title']['__cdata'] ?></option>
                                            <?php
                                        }
                                    } ?>
                                </select>
                                <input type="hidden" name="audio_type" value="1">
                                <input type="submit" value="<?php if($_SESSION['lang'] == 'en'){echo "Submit";}elseif($_SESSION['lang'] == 'ch'){echo "提交";}else{echo "སུབམིཏ";}?>" class="custom_submit_1 w-button">
                            </form>
                        </div>
                    </div>
                    <div class="div-block-12">
                        <div class="media_container">
                            <?php
                            if (isset($_GET['Song']) && (!empty($_GET['Song']))) {
                                $mp3gallery = file_get_contents("json/mp3gallery.json");
                                $resultmp3json = json_decode($mp3gallery, true);
                                $track_image = "";
                                $track_name = "";
                                foreach ($resultmp3json['album']['songs'] as $songs) {
                                    foreach ($songs['tracks']['item'] as $song) {
                                        if ($audio_get === pathinfo($song['song'],PATHINFO_BASENAME)) {
                                            $track_image = pathinfo($songs['image'], PATHINFO_BASENAME);
                                            $track_name = $song['title']['__cdata'];
                                            break;
                                        }
                                    }
                                }
                                ?>
                                <div class="media_element">
                                    <div class="media_image_wrapper w-clearfix">
                                        <img src="images/Albums/<?= $track_image ?>" loading="lazy" alt="" class="image-3">
                                    </div>
                                    <div class="audio_content_wrapper">
                                        <h3 class="media_title"><?= $track_name ?></h3>
                                        <div class="media_content w-embed">
                                            <audio controls="" preload="metadata" style=" width:100%;">
                                                <source src="<?= $audio_get ?>" type="audio/mpeg">
                                                Your browser does not support the audio element.
                                            </audio>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            } else {
                                $mp3gallery = file_get_contents("json/mp3gallery.json");
                                $resultmp3json = json_decode($mp3gallery, true);
                                foreach ($resultmp3json['album']['songs'] as $songs) {
                                    $album_image = "images/Albums/" . pathinfo($songs['image'], PATHINFO_BASENAME);
                                    foreach ($songs['tracks']['item'] as $track) {
                                        $track_name = $track['title']['__cdata']; ?>
                                        <div class="media_element">
                                            <div class="media_image_wrapper w-clearfix">
                                                <img src="<?= $album_image ?>" loading="lazy" alt="" class="image-3">
                                            </div>
                                            <div class="audio_content_wrapper">
                                                <h3 class="media_title"><?= $track_name ?></h3>
                                                <div class="media_content w-embed">
                                                    <audio controls="" preload="metadata" style=" width:100%;">
                                                        <source src="<?= $track['song'] ?>" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                            } ?>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case 2:
                ?>
                <div class="div-block-11">
                    <div class="file_select_wrapper">
                        <div class="ssform_wrapper w-form">
                            <form action="audio.php" id="Book_Selector" name="Book_Selector" data-name="Book_Selector"
                                  method="get" class="ssform">
                                <select id="Audio" name="Book" form="Book_Selector" class="custom_select_1 w-select">
                                    <option value=""><?php if($_SESSION['lang'] == 'en'){echo "Select a book...";}elseif($_SESSION['lang'] == 'ch'){echo "选择一本书...";}else{echo "སེལེཅཏ་ཨ་བོཨོཀ...";}?></option>
                                    s
                                    <?php
                                    $mp3gallery = file_get_contents("json/mp3gallery.json");
                                    $resultmp3json = json_decode($mp3gallery, true);
                                    foreach ($resultmp3json['album']['Books'] as $books) {
                                        foreach ($books['tracks']['item'] as $book) {
                                            ?>
                                            <option value="<?= pathinfo($book['song'],PATHINFO_BASENAME) ?>"<?php if ($audio_get === pathinfo($book['song'],PATHINFO_BASENAME)) {
                                                echo "Selected";
                                            } ?>><?= $book['title']['__cdata'] ?></option>
                                            <?php
                                        }
                                    } ?>
                                </select>
                                <input type="hidden" name="audio_type" value="2">
                                <input type="submit" value="<?php if($_SESSION['lang'] == 'en'){echo "Submit";}elseif($_SESSION['lang'] == 'ch'){echo "提交";}else{echo "སུབམིཏ";}?>" class="custom_submit_1 w-button">
                            </form>
                        </div>
                    </div>
                    <div class="div-block-12">
                        <div class="media_container">
                            <?php
                            if (isset($_GET['Book']) && (!empty($_GET['Book']))) {
                                $mp3gallery = file_get_contents("json/mp3gallery.json");
                                $resultmp3json = json_decode($mp3gallery, true);
                                $track_image = "";
                                $track_name = "";
                                $audio = "";
                                foreach ($resultmp3json['album']['Books'] as $books) {
                                    foreach ($books['tracks']['item'] as $book) {
                                        if ($audio_get === pathinfo($book['song'],PATHINFO_BASENAME)) {
                                            $track_image = pathinfo($books['image'], PATHINFO_BASENAME);
                                            $track_name = $book['title']['__cdata'];
                                            $audio = $book['song'];
                                            break;
                                        }
                                    }
                                }
                                ?>
                                <div class="media_element">
                                    <div class="media_image_wrapper w-clearfix">
                                        <img src="images/Albums/<?= $track_image ?>" loading="lazy" alt="" class="image-3">
                                    </div>
                                    <div class="audio_content_wrapper">
                                        <h3 class="media_title"><?= $track_name ?></h3>
                                        <div class="media_content w-embed">
                                            <audio controls="" preload="metadata" style=" width:100%;">
                                                <source src="<?= $audio ?>" type="audio/mpeg">
                                                Your browser does not support the audio element.
                                            </audio>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            } else {
                                $mp3gallery = file_get_contents("json/mp3gallery.json");
                                $resultmp3json = json_decode($mp3gallery, true);
                                foreach ($resultmp3json['album']['Books'] as $books) {
                                    $album_image = "images/Albums/" . pathinfo($books['image'], PATHINFO_BASENAME);
                                    foreach ($books['tracks']['item'] as $track) {
                                        $track_name = $track['title']['__cdata']; ?>
                                        <div class="media_element">
                                            <div class="media_image_wrapper w-clearfix">
                                                <img src="<?= $album_image ?>" loading="lazy" alt="" class="image-3">
                                            </div>
                                            <div class="audio_content_wrapper">
                                                <h3 class="media_title"><?= $track_name ?></h3>
                                                <div class="media_content w-embed">
                                                    <audio controls="" preload="metadata" style=" width:100%;">
                                                        <source src="<?= $track['song'] ?>" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                            } ?>
                        </div>
                    </div>
                </div>
                <?php
                break;
            case 3:
                ?>
                <div class="div-block-11">
                    <div class="file_select_wrapper">
                        <div class="ssform_wrapper w-form">
                            <form action="audio.php" id="Story_Selector" name="Story_Selector" data-name="Book_Selector"
                                  method="get" class="ssform">
                                <select id="Audio" name="Story" form="Story_Selector" class="custom_select_1 w-select">
                                    <option value=""><?php if($_SESSION['lang'] == 'en'){echo "Select a story...";}elseif($_SESSION['lang'] == 'ch'){echo "选择一个故事...";}else{echo "སེལེཅཏ་ཨ་སྟོརཡ...";}?></option>
                                    s
                                    <?php
                                    $mp3gallery = file_get_contents("json/mp3gallery.json");
                                    $resultmp3json = json_decode($mp3gallery, true);
                                    foreach ($resultmp3json['album']['Stories'] as $stories) {
                                        foreach ($stories['tracks']['item'] as $story) {
                                            ?>
                                            <option value="<?= pathinfo($story['song'],PATHINFO_BASENAME) ?>"<?php if ($audio_get === pathinfo($story['song'],PATHINFO_BASENAME)) {
                                                echo "Selected";
                                            } ?>><?= $story['title']['__cdata'] ?></option>
                                            <?php
                                        }
                                    } ?>
                                </select>
                                <input type="hidden" name="audio_type" value="3">
                                <input type="submit" value="<?php if($_SESSION['lang'] == 'en'){echo "Submit";}elseif($_SESSION['lang'] == 'ch'){echo "提交";}else{echo "སུབམིཏ";}?>" class="custom_submit_1 w-button">
                            </form>
                        </div>
                    </div>
                    <div class="div-block-12">
                        <div class="media_container">
                            <?php
                            if (isset($_GET['Story']) && (!empty($_GET['Story']))) {
                                $mp3gallery = file_get_contents("json/mp3gallery.json");
                                $resultmp3json = json_decode($mp3gallery, true);
                                $track_image = "";
                                $track_name = "";
                                $audio = "";
                                foreach ($resultmp3json['album']['Stories'] as $stories) {
                                    foreach ($stories['tracks']['item'] as $story) {
                                        if ($audio_get === pathinfo($story['song'],PATHINFO_BASENAME)) {
                                            $track_image = pathinfo($stories['image'], PATHINFO_BASENAME);
                                            $track_name = $story['title']['__cdata'];
                                            $audio = $story['song'];
                                            break;
                                        }
                                    }
                                }
                                ?>
                                <div class="media_element">
                                    <div class="media_image_wrapper w-clearfix">
                                        <img src="images/Albums/<?= $track_image ?>" loading="lazy" alt="" class="image-3">
                                    </div>
                                    <div class="audio_content_wrapper">
                                        <h3 class="media_title"><?= $track_name ?></h3>
                                        <div class="media_content w-embed">
                                            <audio controls="" preload="metadata" style=" width:100%;">
                                                <source src="<?= $audio ?>" type="audio/mpeg">
                                                Your browser does not support the audio element.
                                            </audio>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            } else {
                                $mp3gallery = file_get_contents("json/mp3gallery.json");
                                $resultmp3json = json_decode($mp3gallery, true);
                                foreach ($resultmp3json['album']['Stories'] as $stories) {
                                    $album_image = "images/Albums/" . pathinfo($stories['image'], PATHINFO_BASENAME);
                                    foreach ($stories['tracks']['item'] as $track) {
                                        $track_name = $track['title']['__cdata']; ?>
                                        <div class="media_element">
                                            <div class="media_image_wrapper w-clearfix">
                                                <img src="<?= $album_image ?>" loading="lazy" alt="" class="image-3">
                                            </div>
                                            <div class="audio_content_wrapper">
                                                <h3 class="media_title"><?= $track_name ?></h3>
                                                <div class="media_content w-embed">
                                                    <audio controls="" preload="metadata" style=" width:100%;">
                                                        <source src="<?= $track['song'] ?>" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                            } ?>
                        </div>
                    </div>
                </div>
                <?php
                break;
            default:
                ?>
                <div class="div-block-11">
                    <div class="file_select_wrapper">
                        <div class="ssform_wrapper w-form">
                            <form action="audio.php" id="Song_Selector" name="Song_Selector" data-name="Audio_Selector"
                                  method="get" class="ssform">
                                <select id="Audio" name="Song" form="Song_Selector" class="custom_select_1 w-select">
                                    <option value=""><?php if($_SESSION['lang'] == 'en'){echo "Select a song...";}elseif($_SESSION['lang'] == 'ch'){echo "选择一首歌曲...";}else{echo "སེལེཅཏ་ཨ་སོང...";}?></option>
                                    s
                                    <?php
                                    $mp3gallery = file_get_contents("json/mp3gallery.json");
                                    $resultmp3json = json_decode($mp3gallery, true);
                                    foreach ($resultmp3json['album']['songs'] as $songs) {
                                        foreach ($songs['tracks']['item'] as $song) {
                                            ?>
                                            <option value="<?= pathinfo($song['song'],PATHINFO_BASENAME) ?>"<?php if (pathinfo($audio_get, PATHINFO_BASENAME) === pathinfo($song['song'],PATHINFO_BASENAME)) {
                                                echo "Selected";
                                            } ?>><?= $song['title']['__cdata'] ?></option>
                                            <?php
                                        }
                                    } ?>
                                </select>
                                <input type="hidden" name="audio_type" value="1">
                                <input type="submit" value="<?php if($_SESSION['lang'] == 'en'){echo "Submit";}elseif($_SESSION['lang'] == 'ch'){echo "提交";}else{echo "སུབམིཏ";}?>" class="custom_submit_1 w-button">
                            </form>
                        </div>
                    </div>
                    <div class="div-block-12">
                        <div class="media_container">
                            <?php
                            if (isset($_GET['Song']) && (!empty($_GET['Song']))) {
                                $mp3gallery = file_get_contents("json/mp3gallery.json");
                                $resultmp3json = json_decode($mp3gallery, true);
                                $track_image = "";
                                $track_name = "";
                                foreach ($resultmp3json['album']['songs'] as $songs) {
                                    foreach ($songs['tracks']['item'] as $song) {
                                        if ($audio_get === pathinfo($song['song'],PATHINFO_BASENAME)) {
                                            $track_image = pathinfo($songs['image'], PATHINFO_BASENAME);
                                            $track_name = $song['title']['__cdata'];
                                            break;
                                        }
                                    }
                                }
                                ?>
                                <div class="media_element">
                                    <div class="media_image_wrapper w-clearfix">
                                        <img src="images/Albums/<?= $track_image ?>" loading="lazy" alt="" class="image-3">
                                    </div>
                                    <div class="audio_content_wrapper">
                                        <h3 class="media_title"><?= $track_name ?></h3>
                                        <div class="media_content w-embed">
                                            <audio controls="" preload="metadata" style=" width:100%;">
                                                <source src="<?= $audio_get ?>" type="audio/mpeg">
                                                Your browser does not support the audio element.
                                            </audio>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            } else {
                                $mp3gallery = file_get_contents("json/mp3gallery.json");
                                $resultmp3json = json_decode($mp3gallery, true);
                                foreach ($resultmp3json['album']['songs'] as $songs) {
                                    $album_image = "images/Albums/" . pathinfo($songs['image'], PATHINFO_BASENAME);
                                    foreach ($songs['tracks']['item'] as $track) {
                                        $track_name = $track['title']['__cdata']; ?>
                                        <div class="media_element">
                                            <div class="media_image_wrapper w-clearfix">
                                                <img src="<?= $album_image ?>" loading="lazy" alt="" class="image-3">
                                            </div>
                                            <div class="audio_content_wrapper">
                                                <h3 class="media_title"><?= $track_name ?></h3>
                                                <div class="media_content w-embed">
                                                    <audio controls="" preload="metadata" style=" width:100%;">
                                                        <source src="<?= $track['song'] ?>" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                            } ?>
                        </div>
                    </div>
                </div>
                <?php
                break;
        }
        ?>
    </div>
</div>
<div class="footer"></div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5f8d56e9ffb4fdc6eb2fe4d0" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>