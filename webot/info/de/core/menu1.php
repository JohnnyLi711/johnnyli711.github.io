
<!----------------------------------------------------------------------------------------------------------------------------------
TOP MENU     TOP MENU     TOP MENU     TOP MENU     TOP MENU     
----------------------------------------------------------------------------------------------------------------------------------->
<div style="text-align:center; font-size:0.75em">
    <table width="100%" height="125px" align="center">
        <tr>
            <td width="33%" align="center" class="blue-white">
                <a href="http://en.webot.org/news/?q=usnews"><img src="http://en.webot.org/images/home1.png" width="50px" alt="home" /><br/>US News</a>
            </td>
            <td width="33%" align="center" class="blue-white">
                <a href="http://webot.org/?search=<?php echo $search_first ?>" target="_blank"><img src="http://en.webot.org/images/iphone.jpg" height="50px" alt="iphone" /><br/>Mobile</a>
            </td>
            <td align="center" class="blue-white">
                <a href="http://en.webot.org/sitemap/"><img src="http://en.webot.org/images/sitemap1.png" width="50px" alt="sitemap" /><br/>Site Map</a>
            </td>
        </tr>
    </table>
    <?php //if (getenv("REMOTE_ADDR")=='72.234.248.149') echo "geo:$geo";?>
    <div style="background:white; font-size:12pt">
        <marquee>
        <?php echo "<b>$search</b> $metadesc"; ?> ... 
        <a rel="nofollow" href="http://en.webot.org/?search=Portal:Contents" target="_blank"><small>TOPICS: Reference Culture Geography Health History Mathematics Nature People Philosophy Religion Society Technology ... </small></a>
        <a rel="nofollow" href="http://earthspot.org/" target="_blank"><small>TRAVEL: Best in Travel 2016 ... </small></a>
        <a rel="nofollow" href="http://undervalued-stock.com/" target="_blank"><small>STOCKS: Hot Stocks Making Big Gains ... </small></a>
        </marquee>
        <br/>
    </div>
</div><br/>
<?php //include $_SERVER['DOCUMENT_ROOT'] . '/lib/facebook_like.php'; ?>
<!--
TOP MENU END
-->


