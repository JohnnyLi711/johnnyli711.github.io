
<div style="background:black; text-align:left; font-size:12px; max-height:50px;">
    <table>
        <tr>
            <td bgcolor="#000" align="left">
                <a href="http://en.webot.org/"><span style="font-size:14px; font-weight:bold; font-family:georgia; color:silver">WEBOT NEWS&nbsp;</span></a> 
            </td>
            
            <td>
            <?php
            if ($q == 'hinews') echo 'HAWAII NEWS';
            else if ($q=='txnews') echo 'TEXAS NEWS';
            
            else if ($q=='usnews') echo 'USA NEWS';
            else if ($q=='innews') echo 'INDIA NEWS';
            else if ($q=='cnnews') echo 'CHINA NEWS';
            else if ($q=='jpnews') echo 'JAPAN NEWS';
            else if ($q=='denews') echo 'GERMANY NEWS';
            else if ($q=='frnews') echo 'FRANCE NEWS';
            else if ($q=='aunews') echo 'AUSTRALIA NEWS';
            else if ($q=='runews') echo 'RUSSIA NEWS';
            else if ($q=='krnews') echo 'KOREA NEWS';
            else if ($q=='chnews') echo 'SWISS NEWS';
            
            else if ($q=='businessnews') echo 'BUSINESS NEWS';
            else if ($q=='entnews') echo 'ENTERTAINMENT NEWS';
            else if ($q=='sponews') echo 'SPORTS NEWS';
            else if ($q=='tecnews') echo 'TECHNOLOGY NEWS';
            else echo strtoupper(substr($q, 0, 2)) . " NEWS";
            ?>
            </td>
            
            <?php
            if ($q=='businessnews') {
                echo '<td bgcolor="#888">';
                echo '<a href="http://en.webot.org/news/usnews.php?q=entnews"> ENTERTAINMENT NEWS </a>';
                echo '</td>';
            }
            if ($q=='entnews') {
                echo '<td bgcolor="#888">';
                echo '<a href="http://en.webot.org/news/usnews.php?q=sponews"> SPORTS NEWS </a>';
                echo '</td>';
            }
            if ($q=='sponews') {
                echo '<td bgcolor="#888">';
                echo '<a href="http://en.webot.org/news/usnews.php?q=tecnews"> TECHNOLOGY NEWS </a>';
                echo '</td>';
            }
            if ($q=='tecnews') {
                echo '<td bgcolor="#888">';
                echo '<a href="http://en.webot.org/news/usnews.php?q=businessnews"> BUSINESS NEWS </a>';
                echo '</td>';
            }
            ?>

            <td bgcolor="silver">
                <div id="google_translate_element"></div>
                <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                    }
                </script>
                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </td>
            
            <td bgcolor="olivedrab" align="left">
                    TRADUCIR TRADUIRE 翻&nbsp譯 
            </td>
        </tr>
    </table>
</div>


