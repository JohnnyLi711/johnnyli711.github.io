
<div style="background:white">
    <span style="font-size:1.5em">
        <a href="http://google.com/search?q=<?php echo "$q+$type" ?>&btnI" target="_blank" rel="nofollow">
            <?php echo "$search $type <br/><h2>#1 (TOP SITE)</h2>" ?>
        </a>
    </span>
</div>

<?php if (stripos($q, 'stock report') > 0) @include 'core/special.php'; ?>

<br/><!--4-->
<a href="http://query.nytimes.com/search/sitesearch?query=<?php echo $q ?>" accesskey="4"  target="_blank" rel="nofollow"><img src="../images/news.png"  /> <span style="font-size:14pt">News: <?php echo $search ?></span></a><br/>
<a href="http://www.cnn.com/search/?query=<?php echo $q ?>"  target="_blank" rel="nofollow">CNN</a>
<a href="http://www.reuters.com/search?blob=<?php echo $q ?>"  target="_blank" rel="nofollow">Reuters</a>
<a href="http://earthspot.org/?nofollow=www.bloomberg.com/search?query=<?php echo $q ?>"  target="_blank" rel="nofollow">Bloomberg</a>
<br/><!--5-->
<a href="http://www.encyclopedia.com/searchresults.aspx?q=<?php echo $q ?>&btnI"  accesskey="5" target="_blank" rel="nofollow">
    <img src="../images/book.png"  /> <span style="font-size:14pt">Facts: <?php echo $search ?></span></a><br/>
<a href="http://www.britannica.com/search?query=<?php echo urlencode($q) ?>"  target="_blank" rel="nofollow">Britannica</a>
<a href="http://www.answers.com/topic/<?php echo urlencode($q) ?>"  target="_blank" rel="nofollow">Answers</a>
<a href="http://www.google.com/search?q=<?php echo $q ?>+history&btnI"  target="_blank" rel="nofollow">History</a>
<br/><!--1-->
<a href="https://maps.google.com/?q=<?php echo "$q" ?>&zoom=1" accesskey="1" target="_blank" rel="nofollow"><img src="../images/globe.png" /> <b>Where</b> is <?php echo "$search?" ?></a><br/>
<a href="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo "$q" ?>&zoom=15&size=800x800&maptype=hybrid"  target="_blank" rel="nofollow">Plane View</a> | 
<a href="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo "$q" ?>&zoom=20&size=800x800&maptype=hybrid"  target="_blank" rel="nofollow">Bird View</a><br/>
<a href="http://www.mapquest.com/?q=<?php echo "$q" ?>" target="_blank" rel="nofollow">MapQuest</a> | 
<a href="http://www.lonelyplanet.com/search?q=<?php echo "$q" ?>" target="_blank" rel="nofollow">Lonely Planet</a>
<br/><!--2-->
<a href="http://www.youtube.com/results?search_query=<?php echo $q ?>" accesskey="2" target="_blank" rel="nofollow">
    <img src="../images/video.png"  /> <b>Videos</b> of <?php echo $search ?></a><br/>
<a href="http://www.bing.com/videos/search?q=<?php echo $q ?>"  target="_blank" rel="nofollow">Bing</a>
<a href="http://www.hulu.com/search?q=<?php echo $q ?>&type=episodes"  target="_blank" rel="nofollow">Hulu</a>
<a href="http://www.netflix.com/search/<?php echo $q ?>"  target="_blank" rel="nofollow">Netflix</a>
<a href="http://www.amazon.com/s/?field-keywords=<?php echo $q ?>"  target="_blank" rel="nofollow">Amazon</a>
<br/><!--3-->
<a href="http://images.google.com/images?as_q=<?php echo $q ?>&um=1&hl=en&btnG=Google+Search&as_epq=&as_oq=&as_eq=&imgtype=photo&imgsz=svga&imgw=&imgh=&imgar=&as_filetype=&imgc=&as_sitesearch=&as_rights=&safe=active&as_st=y" accesskey="3" target="_blank" rel="nofollow"><img src="../images/image.png"  /> <b>Photos</b> of <?php echo $search ?></a><br/>
<a href="http://photobucket.com/images/<?php echo $q ?>/"  target="_blank" rel="nofollow">Photobucket</a>
<a href="http://www.flickr.com/search/?q=<?php echo $q ?>"  target="_blank" rel="nofollow">Flickr</a>
<a href="http://www.bing.com/images/search?q=<?php echo $q ?>"  target="_blank" rel="nofollow">Bing</a>

<br/><br/>

<?php echo "Find $search in" ?>
<div style="background:white">
    <a href="http://google.com/search?q=<?php echo $q ?>"  target="_blank" rel="nofollow">Google</a> | 
    <a href="http://search.yahoo.com/search?p=<?php echo $q ?>"  target="_blank" rel="nofollow">Yahoo</a> | 
    <a href="http://bing.com/search?q=<?php echo $q ?>"  target="_blank" rel="nofollow">Bing</a> | 
    <a href="http://us.ask.com/web?q=<?php echo $q ?>"  target="_blank" rel="nofollow">Ask</a> | 
    <a href="http://search.aol.com/aol/search?q=<?php echo $q ?>"  target="_blank" rel="nofollow">Aol</a> | 
    <a href="http://www.facebook.com/search.php?q=<?php echo $q ?>"  target="_blank" rel="nofollow">Facebook</a> | 
    <a href="https://twitter.com/search?q=<?php echo $q ?>"  target="_blank" rel="nofollow">Twitter</a> | 
    <a href="http://www.google.com/search?q=<?php echo $q ?>+site%3Alinkedin.com&btnI"  target="_blank" rel="nofollow">Linkedin</a> | 

    <a href="http://www.yelp.com/search?find_desc=<?php echo $q ?>"  target="_blank" rel="nofollow">Yelp</a> | 
    <a href="http://www.buzzfeed.com/search?q=<?php echo $q ?>"  target="_blank" rel="nofollow">Buzzfeed</a> | 
    <a href="http://www.usmagazine.com/search?q=<?php echo $q ?>"  target="_blank" rel="nofollow">US Weekly</a> | 
    <a href="http://www.rollingstone.com/search?q=<?php echo $q ?>"  target="_blank" rel="nofollow">RollingStone</a> | 
    <a href="http://www.webmd.com/search/search_results/default.aspx?query=<?php echo $q ?>"  target="_blank" rel="nofollow">WebMD</a> | 
    <a href="http://www.theverge.com/search?q=<?php echo $q ?>"  target="_blank" rel="nofollow">The&nbsp;Verge</a> | 
    <a href="http://hubpages.com/search/?s=<?php echo $q ?>"  target="_blank" rel="nofollow">HubPages</a> | 
    <a href="http://www.playbuzz.com/search?query=<?php echo $q ?>"  target="_blank" rel="nofollow">PlayBuzz</a> | 
    <a href="http://www.urbandictionary.com/define.php?term=<?php echo $q ?>"  target="_blank" rel="nofollow">Urban Dictionary</a> | 
    <a href="http://search.espn.go.com/<?php echo $q ?>"  target="_blank" rel="nofollow">ESPN</a>
</div>


