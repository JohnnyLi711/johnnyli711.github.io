
<div id="scroll">

    <?php
    $title = strtoupper("Photos");
    $link = "https://www.google.com/search?q=$q&num=50&newwindow=1&source=lnms&tbm=isch";
    $image = 'http://en.webot.org/images/image.png';
    ?>

    <a href="<?php echo $link; ?>" rel="nofollow" title="<?php echo $title; ?>">
        <img class="sm-img" src="<?php echo $image ?>" height="100px" alt="<?php echo $title ?>" />
    </a>

    <?php
    $title = strtoupper("Videos");
    $link = "http://www.youtube.com/results?search_query=$q";
    $image = 'http://en.webot.org/images/video.png';
    ?>

    <a href="<?php echo $link; ?>" rel="nofollow" title="<?php echo $title; ?>">
        <img class="sm-img" src="<?php echo $image ?>" height="100px" alt="<?php echo $title ?>" />
    </a>

    <?php
    $title = strtoupper("News");
    $link = "http://query.nytimes.com/search/sitesearch/#/$q/365days/allresults/1/allauthors/newest/";
    $image = 'http://en.webot.org/images/news.png';
    ?>

    <a href="<?php echo $link; ?>" rel="nofollow" title="<?php echo $title; ?>">
        <img class="sm-img" src="<?php echo $image ?>" height="100px" alt="<?php echo $title ?>" />
    </a>

    <?php
    $title = strtoupper("Games");
    $link = 'http://earthspot.org/?nofollow=games.latimes.com/games/mahjongg-dimensions/';
    $image = 'http://en.webot.org/images/mah.jpg';
    ?>

    <a href="<?php echo $link; ?>" target="_blank" rel="nofollow" title="<?php echo $title; ?>">
        <img class="sm-img" src="<?php echo $image ?>" height="100px" alt="<?php echo $title ?>" /> 
    </a>

    <?php
    $title = strtoupper("Video Poker");
    $link = 'http://earthspot.org/?nofollow=games.aarp.org/games/video-poker/video-poker.aspx';
    $image = 'http://en.webot.org/images/poker.jpg';
    ?>

    <a href="<?php echo $link; ?>" target="_blank" rel="nofollow" title="<?php echo $title; ?>">
        <img class="sm-img" src="<?php echo $image ?>" height="100px" alt="<?php echo $title ?>" /> 
    </a>

    <?php
    $title = strtoupper("Best in Travel 2016");
    $link = 'http://earthspot.org/';
    $image = 'http://en.webot.org/images/waikiki2.jpg';
    ?>

    <a href="<?php echo $link; ?>" target="_blank" rel="nofollow" title="<?php echo $title; ?>">
        <img class="sm-img" src="<?php echo $image ?>" height="100px" alt="<?php echo $title ?>" />
    </a>

    <?php
    $title = strtoupper("UNDERVALUED STOCKS 2016");
    $link = 'http://undervalued-stock.com/';
    $image = 'http://csehawaii.com/images/nasdaq.jpg';
    ?>

    <a href="<?php echo $link; ?>" target="_blank" rel="nofollow" title="<?php echo $title; ?>">
        <img class="sm-img" src="<?php echo $image ?>" height="100px" alt="<?php echo $title ?>" /> 
    </a>

    <br/>
</div>



