
<!-----------------------------------------------------------------------------------------------------------------------------------------------
LEFT NAVIGATION     LEFT NAVIGATION     LEFT NAVIGATION
------------------------------------------------------------------------------------------------------------------------------------------------>
<div id="nav">
    <?php if ($me and $sandbox) include 'sandbox.php'; ?>
    <div style="height:125px; background:#333">
        <a href="http://billionwebs.com/en/sitemap/">
            <img src="http://earthspot.org/images/earthspinfast.gif" width="90px" height="90" alt="Earth Rotating">
            <span style="font-size:1.2em; font-family:Raleway,arial; color:silver"> MENU</span></a>
        </a> | 
        <a href="http://billionwebs.com/en/">
            <span style="font-size:1.2em; font-family:Raleway,arial; color:silver"> NEWS</span></a></br/></br/>
        </a>
    </div>

    <?php 
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/translate.php';
    
    if (    ($search != '' and $qwords[1] == '') or stripos($search, 'hawaii')  )
        include $_SERVER['DOCUMENT_ROOT'] . '/core/getimage.php';
    if (!strlen($img))
        include $_SERVER['DOCUMENT_ROOT'] . '/core/getimage_news.php';
        
    //include $_SERVER['DOCUMENT_ROOT'] . '/core/nav-content.php';
    ?>

    <div style="background:#333; text-align:center">
        <?php include 'ad.php'; ?>
    </div>

    <?php 
        echo "<h1>$search</h1><br/>";
        include 'banner3.php';
    ?>
</div>
<!--
LEFT NAVIGATION END
-->


