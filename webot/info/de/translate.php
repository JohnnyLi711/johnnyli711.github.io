<html>
    <?php
    $search = filter_var($_GET["search"], FILTER_SANITIZE_STRING);
    if ($search == '')
        $search = 'water';
    ?>
    
    <head>
        <title>
            Translate:  <?php echo strtoupper($search); ?>
        </title>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    </head>
    
    <body bgcolor="#eee">
    <center>
        <div style="background:#fff; max-width:1000px; text-align:center">
            <div style="font-family:impact; font-size:3em; letter-spacing:.1em; background:royalblue">
                <b>TRANSLATE</b>
                <div style="color:white;"><?php echo strtoupper($search); ?><br/></div>
            </div>
            
            <br/>
            <a rel="nofollow" href="https://translate.google.com/#auto/en/<?php echo $search; ?>" target="_blank">ENGLISH</a> &bull; 
            <a rel="nofollow" href="https://translate.google.com/#auto/es/<?php echo $search; ?>" target="_blank">SPANISH</a>
            <br/>

            <div id="google_translate_element"><img src="http://en.webot.org/images/language.jpg" alt="language" /></div>
            
            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script><br/>
            <form action="/translate.php" method="get" name="form1">
                <LABEL for="search"><span style="color:black">WORD (ALT+S)</span></LABEL>
                <input type="text" value="<?php echo $search; ?>"
                       name="search" size=10 accesskey="s"  onclick="this.select()" />
                <input type="submit" />
            </form>
                
            <div style="font-size:4em; color:blue;">
                <?php
                echo $search;
                ?>
            </div>
            <a rel="nofollow" href="http://www.collinsdictionary.com/dictionary/english/<?php echo $search; ?>#translations_box" target="_blank"><img src="http://csehawaii.com/images/speaker.png" width="50px" alt="Hear" /><br/>Hear</a>    
            <br/><br/><br/>
            <a href="http://en.webot.org/"><img src="http://webot.org/images/home1.png" width="50px" alt="home" /><br/>Home</a>    
            <br/><br/><br/>
            <div style="background:#333">
                <p></p>
            </div>
        </div>
    </center>
    <?php if (1) @include "include/analytics.php"; ?>
    
    </body>
</html>