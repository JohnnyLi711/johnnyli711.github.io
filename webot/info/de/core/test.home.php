<?php //if ($me) include 'core/cookie1.php';
include 'lib/vars.php';
include 'core/filter.php';
if ($meta == '')
    $meta1 = "US and World News Archive - Breaking Headlines in Europe, China, Asia-Pacific and Around the World";
else
    $meta1 = "$meta INFORMATION | News Archive, Reference, Videos, Photos | Royalty-Free Text and Images | Webot.org";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $meta1; ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="<?php echo $meta1; ?>" />
        <meta name="keywords" content="<?php echo $meta1; ?>" />
        <meta property="fb:admins" content="johnny.li.180625"/>
        <meta name="google-translate-customization" content="d068042600fe66f5-2ebd6a09337fbd0f-g0b13605a84c762bb-9"></meta>
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link href="http://en.webot.org/css/webot.css" rel="stylesheet" type="text/css" id="webot" />
        <link href="http://en.webot.org/images/favicon.png" rel="shortcut icon" />
    </head>
    <body>
    <center>
        <div id="page">
            <?php
            if ($search != '') {
                include 'core/nav.php';
                include 'core/nav1.php';
            } else {
                include 'core/nav2.php';
                include 'core/nav3.php';
            }
            ?>
            <?php
            include 'core/filter.php';
            include 'core/getwiki.php';
            $filtered = 'yes';
            ?>
            <div id="wrap">
                <div>
                    <center>
                        <div style="height:101px">
<div style="background:cornflowerblue">
    <a href="http://en.webot.org/translate2.php">LANGUAGE | LANGUE | SPRACHE | LENGUA | ΓΛΩΣΣΑΣ | 語言 | 언어</a>
</div>
                            <small>This is an independent site and is not affiliated with: <em><?php echo $search; ?></em><small>
<div>

</div>
                            <h2>
                            <form action="/" method="get" name="form1">
                                <LABEL for="search"><span style="color:navy">SEARCH (ALT+S)</span></LABEL>
                                <input type="text" value="<?php echo $search; ?>"
                                       name="search" size=20 accesskey="s"  onclick="this.select()" />
                                       <?php @include "$h/lib/selecttype.php"; ?>
                                <input type="submit" /><br/>
                                <small><input type="checkbox" name="highlight" value="on">Highlight</small>
                                <br/>
                            </form>

                            </h2>
                        </div>
                            <?php include 'google_translate.php'; ?>
                        <div>
                            <?php
                            if ($search != "")
                                @include "core/parse.php";
                            else
                                @include "core/frontpage.php";
                            ?>
                        </div>
                        <?php
                        if ($geo) {
                            echo '<a href="http://earthspot.org/?q=' . $search_first . '"  target="_blank">Location of ' . $search . '</a>';
                        }
                        ?>
                        <?php
                        if ($me) {
                            echo '<a href="http://earthspot.org/?q=' . $search_first . '"  target="_blank">Location of ' . $search . '</a>';
                        }
                        ?>
                        <br/><br/><iframe src="http://astore.amazon.com/undervalue0da-20" width="100%" height="4000" frameborder="0" scrolling="no"></iframe>
                        <br/>&copy; <a href="http://csehawaii.com/" target="_blank">Website Publisher & Designer: Computer Services Express, Downtown Honolulu, Hawaii, 96817</a>
                    </center>
                </div>
            </div>
        </div>
    </center>
    <?php if (1) @include "include/analytics.php"; ?>
</body>
</html>