<?php
if ($trace)
    echo "\n#file#" . __FILE__ . "<br/>\n\n";
include 'lib/vars.php';
if ($meta == '')
    $meta1 = "Webot.org";
else
    $meta1 = "$meta - Wikipedia Article, Video, Photo, News, Definition, Synonym, Sound, Translation - Webot.org";
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title><?php echo $meta1; ?></title>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="<?php echo $meta1; ?>" />
        <meta name="keywords" content="<?php echo $meta1; ?>" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="etc/style.css" rel="stylesheet" type="text/css" id="webot" />
        <link href="favicon.png" rel="shortcut icon" />
    </head>
    <body>
        <a name="apex"></a>
    <center>
        <div id="page">
            <?php
            if ($search != '') {
                include 'core/getwiki.php';
                $filtered = 'yes';
            }
            ?>
            <div id="wrap">
                <div>
                    <center>
                        <div class="top">
                            <?php //include 'banner4.php';?>
                        </div>

                        <?php
                        if ($search != "") {
                            include "core/parse.php";
                        } else {
                            include "core/frontpage.php";
                        }
                        ?>
                        <br/><br/><a href="#apex" class="big">TOP OF PAGE</a>
                        <br/><br/><center>&copy; <script>document.write(new Date().getFullYear());</script> 
                            <a href="http://csehawaii.com/" target="_blank" rel="nofollow">Computer Services Express</a></center>
                    </center>
                </div>
            </div>
        </div>
    </center>
    <?php if (0) @include "include/analytics.php"; ?>
</body>
</html>