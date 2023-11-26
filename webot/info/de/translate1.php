<html>
<?php 
$search=filter_var($_GET["search"], FILTER_SANITIZE_STRING);
if ($search=='') $search='water';
?>
<head>
  <title>
    Translate <?php echo strtoupper($search); ?>
  </title>
</head>
<body>

<a href="http://www.spanishdict.com/translate/<?php echo $search; ?>" target="_blank">Pronounce <b><?php echo $search; ?></b> in Spanish</a> | 
<a href="http://dict.leo.org/ende/index_en.html#/search=<?php echo $search; ?>&searchLoc=0&resultOrder=basic&multiwordShowSingle=on" target="_blank">Pronounce <b><?php echo $search; ?></b> in German</a> | 
<a href="http://www.spanishdict.com/translate/<?php echo $search; ?>" target="_blank">Pronounce <b><?php echo $search; ?></b> in Spanish</a> | 
<a href="http://www.spanishdict.com/translate/<?php echo $search; ?>" target="_blank">Pronounce <b><?php echo $search; ?></b> in Spanish</a> | 
<a href="http://www.spanishdict.com/translate/<?php echo $search; ?>" target="_blank">Pronounce <b><?php echo $search; ?></b> in Spanish</a> | 
<a href="http://www.spanishdict.com/translate/<?php echo $search; ?>" target="_blank">Pronounce <b><?php echo $search; ?></b> in Spanish</a>

<div style="text-align:center">
<div style="background:cornflowerblue">
<h1><br/>TRANSLATE<br/><br/></h1>
</div>

                            <form action="/translate1.php" method="get" name="form1">
                                <LABEL for="search"><span style="color:navy">WORD (ALT+S)</span></LABEL>
                                <input type="text" value="<?php echo $search; ?>"
                                       name="search" size=20 accesskey="s"  onclick="this.select()" />
                                       
                                <input type="submit" />
                                
                            </form>


       

                                <div id="google_translate_element"><img src="http://en.webot.org/images/language.jpg" alt="language" /></div>
                                <script type="text/javascript">
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                                    }
                                </script>
                                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<div style="font-size:10em; color:blue;">
<?php 
echo $search; 
?>
</div>

<div>
Afrikaans Albanian Arabic Armenian Azerbaijani Basque Belarusian Bengali Bosnian Bulgarian  	 Catalan Cebuano Chinese (Simplified) Chinese (Traditional) Croatian Czech Danish Dutch Esperanto Estonian Filipino  	 Finnish French Galician Georgian German Greek Gujarati Haitian Creole Hausa Hebrew Hindi  	 Hmong Hungarian Icelandic Igbo Indonesian Irish Italian Japanese Javanese Kannada Khmer  	 Korean Lao Latin Latvian Lithuanian Macedonian Malay Maltese Maori Marathi Mongolian  	 Nepali Norwegian Persian Polish Portuguese Punjabi Romanian Russian Serbian Slovak Slovenian  	 Somali Spanish Swahili Swedish Tamil Telugu Thai Turkish Ukrainian Urdu Vietnamese  	 Welsh Yiddish Yoruba Zulu 
</div>

</div>
</body>
</html>

