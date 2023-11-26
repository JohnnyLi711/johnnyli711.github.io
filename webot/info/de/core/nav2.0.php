
<!-----------------------------------------------------------------------------------------------------------------------------------------------
RIGHT NAVIGATION     RIGHT NAVIGATION     RIGHT NAVIGATION
------------------------------------------------------------------------------------------------------------------------------------------------>
<div id="nav1">
    <div style="min-height:125px; background:khaki; text-align:center; color:white">
        <?php
        $title = "Best in Travel 2016";
        $link = 'http://earthspot.org/';
        $image = 'http://en.webot.org/images/waikiki2.jpg';
        ?>
        <a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $image ?>" height="100px" alt="<?php echo $title ?>" /><br/><?php echo $title ?></a>
    </div>

    <div style="background:yellow; height:24px; text-align:center">
        <a href="http://earthspot.org/" target="_blank">Travel</a> | 
        <a href="http://undervalued-stock.com/" target="_blank">Stocks</a> | 
        <a href="http://googoll.com/" target="_blank">Encyclopedia</a>
    </div>
    
<div style="background:#888">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Auto -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1890221567484299"
     data-ad-slot="8619909027"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br/>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Auto -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1890221567484299"
     data-ad-slot="8619909027"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

    <h2>POPULAR TOPICS</h2>
    <small>
        <a href="http://earthspot.org/" target="_blank">TRAVEL</a> | 
        <a href="http://undervalued-stock.com/" target="_blank">STOCKS</a><br/>
    </small><br/>

    <?php
        if (getenv("REMOTE_ADDR")=='72.234.248.149') include $_SERVER['DOCUMENT_ROOT'] . '/core/nav.test.php';
    ?>
</div>
<!--
RIGHT NAVIGATION END
-->