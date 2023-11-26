
<!-----------------------------------------------------------------------------------------------------------------------------------------------
LEFT NAVIGATION     LEFT NAVIGATION     LEFT NAVIGATION
------------------------------------------------------------------------------------------------------------------------------------------------>
<div id="nav">
    <div style="min-height:115px; font-family:monospace; font-size:12pt; color:black; background:cornflowerblue; padding:5px">
        <span style="font-family:raleway; font-size:0.75em; color:#000">
            <?php echo strtoupper('billionwebs'); ?><br/>
        </span>
        <span style="font-family:'arial black'; font-size:1.25em; color:#111">
            <?php echo strtoupper('News Aggregator'); ?>
        </span>
        <br/><br/>
        <marquee>
            <span style="font-size:2em; font-family:Impact, Charcoal, sans-serif; color:darkblue">
                <?php echo "Today is $today ... "; ?>
                <?php echo @file_get_contents('http://earthspot.org/api/getdow.php'); ?>
            </span>
        </marquee>
    </div>

    <div style="font-family:arial; font-size:9pt; background:yellow; color:#111; height:24px">
        <center>
            <?php readfile('out/message.html'); ?>
        </center>
    </div>

    <div style="background:#555">
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
    <h1>TODAY'S NEWS</h1>
</div>
<!--
LEFT NAVIGATION END
-->


