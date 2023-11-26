<?php
if ($trace)
    echo "\n#file#" . __FILE__ . "<br/>\n\n";
include 'lib/vars.php';
if ($meta == '')
    $meta1 = "Webot.org";
else
    $meta1 = "$meta - Information";
$filtered = 'yes';
?>
<!DOCTYPE HTML>
<html lang="de">
    <head>
        <title><?php echo $meta1; ?></title>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="<?php echo $meta1; ?>" />
        <meta name="keywords" content="<?php echo $meta1; ?>" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="https://webot.org/design.css" rel="stylesheet" type="text/css" id="webot" />
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
                        <div class="top">
                            <a href="https://translate.google.com/#view=home&op=translate&sl=auto&tl=en&text=<?php echo $meta ?>" target="_blank">Übersetzen</a>
                        </div>
                        <div>
                            <a href="http://webot.org/info/en/?search=<?php echo $q ?>">Englische</a> | 
                            <a href="http://webot.org/info/de/?search=<?php echo $q ?>">Deutsche</a>
                        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------>
                        <?php
                        if ($search != "") {
                            include "core/_parse.php";
                        } else {
                            include "core/_cover.php";
                        }
                        ?>
<!------------------------------------------------------------------------------------------------------------------------------------------------>
                        <br/><br/><a href="#apex" class="big">SEITENANFANG</a>
                        <br/><br/><center>&copy; <script>document.write(new Date().getFullYear());</script> 
                            <a href="http://csehawaii.com/" target="_blank" rel="nofollow">Unternehmen</a></center>
                    </center>
                </div>
            </div>
        </div>
    </center>
</body>
</html>