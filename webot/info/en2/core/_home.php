<?php
if ($trace)
    echo "\n#file#" . __FILE__ . "<br/>\n\n";
include 'lib/vars.php';
if ($meta == '')
    $meta1 = "Geography Encyclopedia References";
else
    $meta1 = "$meta - Encyclopedia Information";
$filtered = 'yes';

if (stripos($q, 'testz') != '') {header("HTTP/1.0 404 Not Found"); die();}
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title><?php echo $meta1; ?></title>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="<?php echo $meta1; ?>" />
        <meta name="keywords" content="<?php echo $meta1; ?>" />
        <meta property="fb:admins" content="johnnyli711"/>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="https://webot.org/design.css" rel="stylesheet" type="text/css" />
        <link href="https://webot.org/favicon.ico" rel="shortcut icon" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3098943-15"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-3098943-15');
        </script>
    </head>
    <body>
        <a name="apex"></a>
    <center>
        <div id="page">
            <div id="wrap">
                <div>
                    <center>
                        <div class="top"></div>
                        <div class="menu">
                            <a href="/">Home</a> &bull; 
                            <a href="https://www.google.com/search?q=<?php echo $q; ?>" target="_blank">Search</a> &bull; 
                            <a href="https://translate.google.com/#view=home&op=translate&sl=auto&tl=en&text=<?php echo $meta ?>" target="_blank">Translate</a>
                        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------>
                        <?php
                        if ($search != "") {
                            include "core/_parse.php";
                        } else {
                            include "core/_cover.php";
                        }
                        
                        if ($_SERVER['HTTP_HOST'] == 'webot.org') {
                            //echo '<br/><span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=MS8r1z4IAKR1GPANZJFXzhLbPz5jjPnTWJzTPUqWDvTqBwmYcNqh15XBCQcG"></script></span>';
                        }
                        ?>
<!------------------------------------------------------------------------------------------------------------------------------------------------>
                        <div class="menu">
                            <br/>
                            <a href="#apex">Top Of Page</a>
                            <br/><br/>
                            <a href="/">Home</a> &bull; 
                            <a href="https://www.google.com/search?q=<?php echo $q; ?>" target="_blank">Search</a> &bull; 
                            <a href="https://translate.google.com/#view=home&op=translate&sl=auto&tl=en&text=<?php echo $meta ?>" target="_blank">Translate</a>
                            <br/><br/>
                            &copy; <script>document.write(new Date().getFullYear());</script> 
                                <a href="https://computer-services-express.business.site/?m=true" target="_blank">CSE</a>
                            <br><br>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </center>
</body>
</html>