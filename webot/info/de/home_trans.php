<?php
include 'lib/vars.php';
if ($meta == '')
    $meta1 = "Webot News - US and World News Archive - Breaking US and International Headlines";
else
    $meta1 = "$meta INFORMATION | News Archive, Reference, Videos, Photos | Royalty-Free Text and Images | Webot.org";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $meta1; ?></title>
        <meta name=viewport content="width=device-width, initial-scale=1">
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
            <div id="wrap">
                <div>
                    <center>
                        <div style="background:yellowgreen; text-align:left">
                            <table>
                                <tr>
                                    <td bgcolor="greenyellow">
                                        <b>TRANSLATE</b> 翻譯 अनुवाद ਅਨੁਵਾਦ>TRADUIRE TRADUCIR TRADURRE 
                                    </td>
                                </tr>
                                <tr>
                                <center>
                                    <td bgcolor="#ddd">
                                        <div id="google_translate_element"></div>
                                        <script type="text/javascript">
                                            function googleTranslateElementInit() {
                                                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                                            }
                                        </script>
                                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                    </td>
                                </center>
                                </tr>
                            </table>
                        </div>

                        <div style="text-align:justify; padding:10px">
                            <?php
                            //@include "data/test.txt";
                            @include "out/test.txt";
                            ?>
                        </div>
                        <br/><br/><center><small>&copy; <script>document.write(new Date().getFullYear());</script> <a href="http://csehawaii.com/" target="_blank" rel="nofollow">Computer Services Express, Honolulu Hawaii</small></a></center>
                    </center>
                </div>
            </div>
        </div>
    </center>
    <?php if (0) @include "include/analytics.php"; ?>
</body>
</html>