<?php
$search_first = "Draft:" . strtr(ucwords(strtr($q, "+", " ")), " ", "_");
$q = "draft_$q";
$q10 = strtr($q, "+", "_");
$q10 = ucwords($q10);
$w = 'data/' . preg_replace("/[^A-Za-z0-9_ ]/", '', strtr($q, "+", "_")) . ".html";
//$w = '../data/' . "Draft_Webot_News.html";
$out = 'out/' . strtr($q, "+", "_") . ".html";
$u = "http://en.webot.org/$w";
$headers = @get_headers($u); 
$found = 0;

if (stripos($headers[0], '200 OK') == TRUE) {
    $found = 1;
}

if (stripos($headers[0], '200 OK') == FALSE) {
    $u = "https://en.wikipedia.org/wiki/" . $search_first;
    //$u = "https://en.wikipedia.org/wiki/Draft:Webot_News";
    $headers = @get_headers($u);
    $found = 2;
}

if (stripos($headers[0], '200 OK') > 0) {
    $x = @file_get_contents($u);
    if ($found != 1) {
        if ($w=='.html') $w='noname.html';
        $fh = fopen("$w", 'w') or die("can't open file (gw)");
        fwrite($fh, $x);
        fclose($fh);
    }
    $x = substr($x, stripos($x, '<body'));
    $x = substr($x, stripos($x, '">') + 2);
    $x = substr($x, 0, stripos($x, '<div id="mw-navigation">'));
    $x = str_replace('"//', '"http://', $x);
    $x = str_replace('/w/index.php', '/', $x);
    $x = str_replace('>edit</a>', '></a>', $x);
    $x = str_replace('<span class="mw-editsection-bracket">]</span>', '', $x);
    $x = str_replace('href="/', 'href="https://en.wikipedia.org/', $x);
    $x = str_replace('href=', 'rel="nofollow" href=', $x);
    $x = str_replace('href="http://', 'target="_blank" href="http://earthspot.org/?nofollow=', $x);
    $x = str_replace('href="https://', 'target="_blank" href="http://earthspot.org/?nofollow=', $x);
    $x = str_replace('<a', "\n<a", $x);
    echo "<!--#1a--><h1>WIKIPEDIA DRAFT</h1><p>A WIKIPEDIA DRAFT may contain a significant amount of inaccurate or promotional information.</p>$x<hr/><br/><br/><!--#1b-->";
}
?>