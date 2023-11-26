
<!-----------------------------------------------------------------------------------------------------------------------------------------------
RIGHT NAVIGATION     RIGHT NAVIGATION     RIGHT NAVIGATION
------------------------------------------------------------------------------------------------------------------------------------------------>

<div id="nav1" style="padding:0px">
    <?php if ($me and $sandbox) include 'sandbox.php'; ?>
    <div style="height:125px" class="black-gray"></div>
    <div style="background:#BDA0CB; text-align:center">
        <?php include 'ad.php'; ?>
    </div><br/>
    <?php if ($qwords[1] == '') include 'nav-content1.php'; ?>
    <?php
    //if ($me) {if (substr($search, -1)=='S') echo substr_replace($search, "", -1);}
    include $_SERVER['DOCUMENT_ROOT'] . '/core/menu1.php';
    //if ($me) @include 'sandbox.php';
    //if (stripos($q, 'stock report') > 0) @include 'core/special.php';
    if ($search != '' and $qwords[1] == '' and ! $wiktionary)
        include $_SERVER['DOCUMENT_ROOT'] . "/core/result.php";
    ?>

    <div>
        <small>
            <a href="https://www.google.com/search?q=<?php echo "$q" ?>" target="_blank" rel="nofollow"><?php echo "US" ?></a> | 
            <a href="https://www.google.co.uk/#q=<?php echo "$q" ?>" target="_blank" rel="nofollow"><?php echo "UK" ?></a> | 
            <a href="https://www.google.fr/#q=<?php echo "$q" ?>" target="_blank" rel="nofollow"><?php echo "France" ?></a> | 
            <a href="https://www.google.de/#q=<?php echo "$q" ?>" target="_blank" rel="nofollow"><?php echo "Germany" ?></a> | 
            <a href="https://www.google.it/#q=<?php echo "$q" ?>" target="_blank" rel="nofollow"><?php echo "Italy" ?></a> | 
            <a href="https://www.google.es/#q=<?php echo "$q" ?>" target="_blank" rel="nofollow"><?php echo "Spain" ?></a> | 
            <a href="http://www.baidu.com/s?wd=<?php echo "$q" ?>" target="_blank" rel="nofollow"><?php echo "China" ?></a> | 
            <a href="https://www.google.co.in/#q=<?php echo "$q" ?>" target="_blank" rel="nofollow"><?php echo "India" ?></a> | 
            <a href="https://www.google.co.jp/#q=<?php echo "$q" ?>" target="_blank" rel="nofollow"><?php echo "Japan" ?></a> | 
            <a href="https://www.google.co.kr/#q=<?php echo "$q" ?>" target="_blank" rel="nofollow"><?php echo "Korea" ?></a> | 
            <a href="http://query.nytimes.com/search/sitesearch?query=<?php echo $q ?>" target="_blank" rel="nofollow">News</a> | 
            <a href="http://googoll.com/?&r=w&search=<?php echo "$q" ?>" target="_blank"><?php echo "Related" ?></a> | 
            <a href="https://google.com/search?q=<?php echo "$q" ?>+site%3Awebot.org" target="_blank" rel="nofollow"><?php echo "Related" ?></a> | 
            <a href="http://csehawaii.com/cse.php?q=<?php echo "$q" ?>" target="_blank" rel="nofollow"><?php echo "Related" ?></a> 
        </small>
        <br/><br/>
        <?php
        @include $_SERVER['DOCUMENT_ROOT'] . '/lib/tweet.php';

        if ($_GET["q"] == 'usnews') {
            //$_SERVER['DOCUMENT_ROOT'] . '/lib/facebook_comment1.php';
            //$_SERVER['DOCUMENT_ROOT'] . '/lib/facebook_log.php';
        }
        ?>
    </div>

    <p><small>&copy; Billionwebs.com - 100% Privacy</small></p><br/>

    <div style="background:silver; text-align:center; color:white" class="top">
        <?php
        $title = strtoupper("Best in Travel 2016");
        $link = 'http://earthspot.org/';
        $image = 'http://en.webot.org/images/waikiki2.jpg';
        ?>
        <a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $image; ?>" class="lg-img" alt="<?php echo $title; ?>" /><br/><?php echo $title; ?></a>
    </div><br/><br/>

    <div style="background:silver; text-align:center; color:white" class="top">
        <?php
        $title = "UNDERVALUED STOCKS 2016";
        $link = 'http://undervalued-stock.com/';
        $image = 'http://csehawaii.com/images/nasdaq.jpg';
        ?>
        <a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $image ?>" alt="<?php echo $title ?>" /><br/><?php echo $title ?></a>
    </div><br/><br/>

    <?php
    $title = strtoupper("Games");
    $link = 'http://earthspot.org/?nofollow=games.latimes.com/games/mahjongg-dimensions/';
    $image = 'http://en.webot.org/images/mah.jpg';
    ?>

    <a href="<?php echo $link; ?>" target="_blank" rel="nofollow" title="<?php echo $title; ?>">
        <img class="sm-img" src="<?php echo $image ?>" width="100%" alt="<?php echo $title ?>" /> 
    </a>

    <?php
    $title = strtoupper("Video Poker");
    $link = 'http://earthspot.org/?nofollow=games.aarp.org/games/video-poker/video-poker.aspx';
    $image = 'http://en.webot.org/images/poker.jpg';
    ?>

    <a href="<?php echo $link; ?>" target="_blank" rel="nofollow" title="<?php echo $title; ?>">
        <img class="sm-img" src="<?php echo $image ?>" width="100%" alt="<?php echo $title ?>" /> 
    </a>

    <?php
    $title = strtoupper("Chess");
    $link = 'http://earthspot.org/?nofollow=www.sparkchess.com/';
    $image = 'http://csehawaii.com/images/chess.jpg';
    ?>

    <a href="<?php echo $link; ?>" target="_blank" rel="nofollow" title="<?php echo $title; ?>">
        <img class="sm-img" src="<?php echo $image ?>" width="100%" alt="<?php echo $title ?>" /> 
    </a>

    <br/><br/>

    <?php
    if (getenv("REMOTE_ADDR") != '72.234.248.149')
        include $_SERVER['DOCUMENT_ROOT'] . '/core/nav1.3.php';
    ?>
</div>
<!--
RIGHT NAVIGATION END
-->


