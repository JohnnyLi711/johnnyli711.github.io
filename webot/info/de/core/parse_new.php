<!-- 
#####################################    RESULT     RESULT     RESULT
-->
<div id="result">
    <?php
    $parsetype = $type;
    if ($parsetype == NULL && $search != "") {
        echo "<span style=\"font-size:2.5em; font-weight:light\">$search</span> INFORMATION<hr/>";
        if (0) {
            $file = 'data/' . strtr($q, "+", "_") . ".html";
            if (file_exists($file)) {
                //echo "The file $filename exists";
                $x = readfile($file);
                //echo $x;
            } else {
                //echo "The file $filename does not exist";
                include 'core/getwiki.php';
            }
        }
        if ($mobi)
            include 'core/getwikimobi.php';
        else
            include 'core/getwiki.php';
        echo '<br/><a href="http://google.com/search?q=' . "$q" . '&btnI" target="_blank"><span STYLE="color:blue; font-size:1.3em; font-weight:bold">' . "$search (TOP SITE)" . '</span></a>';
        include 'qwords.php';
//echo "<br/><h1>What do you think about $search?</h1>";
        include "lib/facebook_comment.php";
        include "lib/shaira.php";
//include '/lib/tweet.php';
//@include $_SERVER['DOCUMENT_ROOT'] . '/core/articles.php';
    }

    if ($parsetype != NULL && $search != "") {
        echo '<br/><a href="http://google.com/search?q=' . "$q+$type" . '&btnI" target="_blank"><span STYLE="font-size:16pt">' . "$search $type TOP SITE" . '</span></a>';
        echo '<h1><a href="http://google.com/search?q=' . "$q+site:en.webot.org" . '&btnI" target="_blank">'
        . "$search" . ' Topics</a></h1>';
    }

    if ($parsetype == 'Facts' && $search != "") {
        include 'core/getwiki.php';
    }

    if ($parsetype == 'Stock') {
        $query = $search . ' ' . date(Y, strtotime("-1 year"));
        echo '<h1><a href="https://www.google.com/search?q=' . $query
        . '+annual+report&btnI" target="_blank">' . $search . ' Annual Report</a></h1>';
        echo '<h1><a href="http://webot.org/search/google/sec.php?q=' . $query . '+10K" target="_blank">' . $search
        . ' 10-K</a></h1>';
    }
//////////////////////////////////////////////////////////////////////////////////////////
    $i = stripos($search, "?");
    if ($search == '?' || $i > 0) {
        $parsetype = '?';
        include 'core/help.php';
    }
    $i = stripos($search, "^");
    if ($parsetype == NULL && $i > 0) {
        $parsetype = '^';
        $par = substr($search, $i + 1);
        $search = substr($search, 0, $i + 1);
        include 'core/dictionary.php';
    }
    $i = stripos($search, "::");
    if ($parsetype == NULL && $i > 0) {
        $parsetype = '::';
        $par = substr($search, $i + 1);
        $search = substr($search, 0, $i + 1);
        include 'core/dictionary.php';
    }
    ?>
</div>
<!-----------------------------------------------------------------------------------------------------------------------------------------------
RESULT END     RESULT END     RESULT END
------------------------------------------------------------------------------------------------------------------------------------------------>
