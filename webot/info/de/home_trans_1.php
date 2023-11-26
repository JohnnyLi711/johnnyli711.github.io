<!DOCTYPE HTML>
<html>
    <head>
            <meta http-equiv="content-type" content="text/html; charset=utf-8" />
            <link href="http://en.webot.org/css/webot.css" rel="stylesheet" type="text/css" id="webot" />
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

                        <div style="font-size:2em; text-align:justify; padding:10px">
                            <?php
                            @include "data/test.txt";
                            //@include "data/french.txt";
                            //@include "out/test.txt";
                            ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </center>
</body>
</html>