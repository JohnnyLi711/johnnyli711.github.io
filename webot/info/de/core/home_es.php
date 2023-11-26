<?php
if ($trace)
    echo "\n#file#" . __FILE__ . "<br/>\n\n";
include 'lib/vars.php';
if ($meta == '')
    $meta1 = "WEBOT NEWS - US and International Headlines from Leading Sources";
else
    $meta1 = "$meta INFORMATION - News & Facts from Leading Sources";
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title><?php echo $meta1; ?></title>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="<?php echo $meta1; ?>" />
        <meta name="keywords" content="<?php echo $meta1; ?>" />
        <meta property="fb:admins" content="johnny.li.180625"/>
        <meta name="google-translate-customization" content="d068042600fe66f5-2ebd6a09337fbd0f-g0b13605a84c762bb-9"></meta>
        <link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
        <link href="http://en.webot.org/css/webot.css" rel="stylesheet" type="text/css" id="webot" />
        <link href="http://en.webot.org/images/favicon.png" rel="shortcut icon" />
    </head>
    <body>
        <a name="apex"></a>
    <center>
        <div id="page">
            <div id="wrap">
                <div>
                    <center>
                        <?php
                            @include "core/frontpage_es.php";
                        ?>
                        <a href="#apex" class="big">Back to top of page</a>

                        <br/><br/><center>&copy; <script>document.write(new Date().getFullYear());</script> <a href="http://csehawaii.com/" target="_blank" rel="nofollow">Computer Services Express, Honolulu Hawaii</a></center>
                    </center>
                </div>
            </div>
        </div>
    </center>
    <?php if (1) @include "include/analytics.php"; ?>
</body>
</html>