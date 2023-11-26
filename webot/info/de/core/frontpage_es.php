<?php if ($trace) echo "\n#file#" . __FILE__ . "<br/>\n\n"; ?>

<div id="frontpage">
    <div style="font-family:arial; font-size:9pt; background:cornflowerblue; color:#111; height:24px">
        <center>
                <?php readfile('out/cache_log.html'); ?> 
                <a href="http://www.timeanddate.com/time/zones/mst" target="_blank" rel="nofollow">MST</a>
        </center>
    </div>

            <td bgcolor="silver">
                <div id="google_translate_element"></div>
                <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                    }
                </script>
                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </td>

    <table>        
        <tr>
            <td valign="top" width="50%">
                <h1>UNITED STATES NEWS</h1>
                <span style="font-size:1.2em; font-weight:bold">
                <a href="http://en.webot.org/news/usnews.php?q=businessnews">BUSINESS</a> &bull; 
                <a href="http://en.webot.org/news/usnews.php?q=entnews">ENTERTAINMENT</a> &bull; 
                <a href="http://en.webot.org/news/usnews.php?q=sponews">SPORTS</a> &bull; 
                <a href="http://en.webot.org/news/usnews.php?q=tecnews">TECHNOLOGY</a>
                </span>
                
                <?php
                echo '<h1>TOP STORIES</h1>';
                @include "news/data/usnews.html";
                echo '<h1>BUSINESS NEWS</h1>';
                @include "news/data/businessnews.html";
                echo '<h1>TECHNOLOGY NEWS</h1>';
                @include "news/data/tecnews.html";
                echo '<h1>ENTERTAINMENT NEWS</h1>';
                @include "news/data/entnews.html";
                echo '<h1>SPORTS NEWS</h1>';
                @include "news/data/sponews.html";
                ?>
            <td>

            <td valign="top">
                <h1>INTERNATIONAL NEWS</h1>
                <a href="http://en.webot.org/news/?q=uknews"><img class="sm-img" src="http://csehawaii.com/images/flags/ukflag.png" height="10" title="UK News" alt="UK News" /> UK</a> 
                <a href="http://en.webot.org/news/?q=denews"><img class="sm-img" src="http://csehawaii.com/images/flags/deflag.png" height="10" title="Germany News" alt="Germany News" /> GERMANY</a> 
                <a href="http://en.webot.org/news/?q=frnews"><img class="sm-img" src="http://csehawaii.com/images/flags/frflag.png" height="10" title="France News" alt="France News" /> FRANCE</a> 

                <a href="http://en.webot.org/news/?q=cnnews"><img class="sm-img" src="http://csehawaii.com/images/flags/cnflag.png" height="10" title="China News" alt="China News" /> CHINA</a> 
                <a href="http://en.webot.org/news/?q=jpnews"><img class="sm-img" src="http://csehawaii.com/images/flags/jpflag.png" height="10" title="Japan News" alt="Japan News" /> JAPAN</a> 
                <a href="http://en.webot.org/news/?q=innews"><img class="sm-img" src="http://csehawaii.com/images/flags/inflag.png" height="10" title="India News" alt="India News" /> INDIA</a> 

                <a href="http://en.webot.org/news/?q=chnews"><img class="sm-img" src="http://csehawaii.com/images/flags/chflag.png" height="10" title="Swiss News" alt="Swiss News" /> SWITZERLAND</a> 
                <a href="http://en.webot.org/news/?q=krnews"><img class="sm-img" src="http://csehawaii.com/images/flags/krflag.png" height="10" title="Korea News" alt="Korea News" /> KOREA</a> 

                <?php
                echo '<h2>CHINA NEWS</h2>';
                @include "news/data/cnnews.html";
                echo '<h2>INDIA NEWS</h2>';
                @include "news/data/innews.html";
                echo '<h2>AUSTRALIA NEWS</h2>';
                @include "news/data/aunews.html";
                echo '<h2>UK NEWS</h2>';
                @include "news/data/uknews.html";
                echo '<h2>FRANCE NEWS</h2>';
                @include "news/data/frnews.html";
                echo '<h2>GERMANY NEWS</h2>';
                @include "news/data/denews.html";
                echo '<h2>JAPAN NEWS</h2>';
                @include "news/data/jpnews.html";

                echo '<h2>SWITZERLAND NEWS</h2>';
                @include "news/data/chnews.html";
                echo '<h2>KOREA NEWS</h2>';
                @include "news/data/krnews.html";
                ?>
            </td>
        </tr>
    </table>
</div>


