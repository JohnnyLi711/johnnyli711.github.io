
<?php if ($trace) echo "\n#file#" . __FILE__ . "<br/>\n\n"; ?>

<div id="frontpage">
    <div style="font-family:arial; font-size:9pt; background:khaki; color:#111; height:24px">
        <center>
                Updated: 
                <?php readfile('out/cache_log.html'); ?> 
                <a href="http://www.timeanddate.com/time/zones/mst" target="_blank" rel="nofollow">MST</a>
        </center>
    </div>

    <table>        
        <tr>
            <td valign="top" width="50%">                
                <?php
                @include "news/data/usnews.html";
                @include "news/data/stnews.html";
                echo '<h2>TECHNOLOGY NEWS</h2>';
                @include "news/data/tecnews.html";
                echo '<h2>BUSINESS NEWS</h2>';
                @include "news/data/businessnews.html";
                echo '<h2>ENTERTAINMENT NEWS</h2>';
                @include "news/data/entnews.html";
                echo '<h2>SPORTS NEWS</h2>';
                @include "news/data/sponews.html";
                ?>
            <td>

            <td valign="top">
                <?php
                @include 'news/data/mag.html';
                @include 'news/data/etc.html';
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


