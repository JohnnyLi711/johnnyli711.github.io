<?php

if ($trace)
    echo "\n#file#" . __FILE__ . "<br/>\n\n";
echo "\n\n\n<!--#2a-->\n\n\n";
$q10 = strtr($q, "+", "_");
$q10 = ucwords($q10);
//$w = 'data/' . strtr(preg_replace("/[^A-Za-z0-9_ ]/", '', $q), "+", "x") . ".html";
//$w = 'data/' . preg_replace("/[^A-Za-z0-9 ]/", '', $q) . ".html";
$w = 'data/' . preg_replace("/[^A-Za-z0-9_ ]/", '', strtr($q, "+", "_")) . ".html";
$out = 'out/' . strtr($q, "+", "_") . ".html";
$u = "http://en.webot.org/$w";
$headers = @get_headers($u);
$found = 0;

if (stripos($headers[0], '200 OK') == FALSE) {
    $u = "https://en.wikipedia.org/wiki/" . $search_first;
    $headers = @get_headers($u);
    $found = 1;
}

if (0 and stripos($headers[0], '200 OK') == FALSE) {
    if (stripos($headers[0], '302 Found') > 0) {
        $u = substr($headers[1], 10);
        $headers = @get_headers($u);
        $found = 2;
    }
}

if (stripos($headers[0], '200 OK') == FALSE) {
    $u = 'https://en.wikipedia.org/wiki/' . urlencode($q10);
    $headers = @get_headers($u);
    $found = 3;
}

if (stripos($headers[0], '200 OK') == FALSE and ( substr($q10, -1) == 's' or substr($q10, -1) == 'd')) {
    $u = 'https://en.wikipedia.org/wiki/' . urlencode(substr_replace($q10, "", -1));
    $headers = @get_headers($u);
    //if (stripos($headers[0], '200 OK') > 0) {$q=substr_replace($q, "", -1); $search=substr_replace($search, "", -1);}
    $found = 4;
}

//if ($me) {print_r($headers); echo "<hr/>found:$found<hr/>$user<hr/>$u<hr/>"; exit;}
//if ($me) {q=substr_replace($q, "", -1); $search=substr_replace($search, "", -1);}
//if ($me) {echo "<hr/>q:$q<hr/>search:$search<hr/>"; exit;}

if (stripos($headers[0], '200 OK') > 0) {
    $x = @file_get_contents($u);
    $wikilen = strlen($x);
    if (!stripos($u, 'webot.org')) {
        $fh = fopen("$w", 'w') or die("can't open file (gw-1)");
        fwrite($fh, "1");
        fclose($fh);

        if (0 and $wikilen > 500000) {
            $fh = fopen("out/500k.txt", 'a') or die("can't open file (gw-2)");
            fwrite($fh, "$search\n");
            fclose($fh);
        }
    }
    if (stripos($x, 'geohack'))
        $geo = true;
    if (stripos($x, 'wiktionary'))
        $wiktionary = true;
    if (stripos($x, "nyse.com/quote"))
        $stock = true;
    if ($filtered == 'no') {
        //include 'core/filter.php';
    }
    $x = substr($x, stripos($x, '<body'));
    $x = substr($x, stripos($x, '">') + 2);
    $x = substr($x, 0, stripos($x, '</body>'));
    if (0 and $me and $section) {
        $x = substr($x, stripos($x, '<span class="mw-headline" id="' . $section . '">'));
        $x = substr($x, 0, stripos($x, '<h2'));
    }
    $x = str_replace('"//', '"http://', $x);
    $x = str_replace('/w/index.php', '/', $x);
    $x = str_replace('Jump to:                	<a href="#mw-navigation">navigation</a>,', '', $x);
    $x = str_replace('<a href="#p-search">search</a>', '', $x);
    if (0 and $me) {
        $x = str_replace('<a href="#', '<a href="/#', $x);
    }
    $x = str_replace('>edit</a>', '></a>', $x);
    $x = str_replace('<span class="mw-editsection-bracket">]</span>', '', $x);
    $x = str_replace('href="/', 'href="https://en.wikipedia.org/', $x);
    $x = str_replace('https://en.wikipedia.org/wiki/', 'http://webot.org/info/en/?search=', $x);
    //$x = str_replace('https://en.wikipedia.org/wiki/', 'http://webot.org/?search=', $x);
    $x = str_replace('href="http://en.webot.org/?search=File:', 'target="_blank" href="http://earthspot.org/?nofollow=en.wikipedia.org/wiki/File:', $x);
    $x = str_replace('<span class="mw-editsection-bracket">[</span>', '<span class="mw-editsection-bracket"></span>', $x);
    $x = str_replace('Jump to:					<a href="#mw-head">navigation</a>,', '<br/>', $x);
    //$x = str_replace('href="http://www.', 'target="_blank" href="http://webot.org/referral.php?nofollow=', $x);
    //$x = str_replace('href="https://www.', 'target="_blank" href="http://webot.org/referral.php?nofollow=', $x);
    //$x = str_replace('class="external free"', 'class="external text"', $x);
    $x = str_replace('class="external text" href="http://', 'target="_blank" class="external text" href="http://webot.org/referral.php?nofollow=', $x);
    $x = str_replace('class="external text" href="https://', 'target="_blank" class="external text" href="http://webot.org/referral.php?nofollow=', $x);
    $x = str_replace('>Coordinates</a>:', '><br/><b>' . $search . ' Latitude and Longitude:</b></a><br/>', $x);
    //$x = str_replace('href=', 'rel="nofollow" href=', $x);
    $x = str_replace('rel="nofollow"', '', $x);
    $x = str_replace('<a', "\n<a", $x);
    $x = str_replace('<h1', "<b><em", $x);
    $x = str_replace('</h1>', "</em></b> Article<br/><br/>", $x);
    $style = "background-color:#ddd;color:black";
    if ($me)
        $x = str_replace(
                //convert from---------------------------------
                array('href="#cite_note',
            '$', 'in 2011', 'in 2012', 'in 2013'),
                //convert to-----------------------------------
                array('rel="nofollow" target="_blank" href="' . $u . '#cite_note',
            '<span style="' . $style . '" class="dollar">$</span>',
            '<span style="' . $style . '" class="year">in 2011</span>',
            '<span style="' . $style . '" class="year">in 2012</span>',
            '<span style="' . $style . '" class="year">in 2013</span>'
                ), $x);

    if (1 && strripos($x, '>Born<')) {
        $fh = fopen('data/born.txt', 'a') or die("can't open file");
        fwrite($fh, "$q\n");
        fclose($fh);
    }
    if (0 && strripos($x, 'geohack')) {
        $fh = fopen('data/.geohack.txt', 'a') or die("can't open file");
        fwrite($fh, "$q\n");
        fclose($fh);
    }
    if (0 && strripos($x, '>Website<')) {
        $fh = fopen('data/.website.txt', 'a') or die("can't open file");
        fwrite($fh, "$q\n");
        fclose($fh);
    }
    if (0 && strripos($x, '>NYSE<')) {
        $fh = fopen('data/.nyse.txt', 'a') or die("can't open file");
        fwrite($fh, "$q\n");
        fclose($fh);
        //$stock=$q;
    }
    if (0 && strripos($x, '>Traded')) {
        $fh = fopen('data/.traded.txt', 'a') or die("can't open file");
        fwrite($fh, "$q\n");
        fclose($fh);
    }
    if (0 && strripos($x, '>Notable')) {
        $fh = fopen('data/.notable.txt', 'a') or die("can't open file");
        fwrite($fh, "$q\n");
        fclose($fh);
    }
    if (0 && strripos($x, 'hawaii')) {
        $fh = fopen('data/.hawaii.txt', 'a') or die("can't open file");
        fwrite($fh, "$q\n");
        fclose($fh);
    }

    // debug april 2016 if ($ref_pos==0) $ref_pos = stripos($x, 'Navigation menu</h2>');
    if ($ref_pos == 0)
        $ref_pos = stripos($x, '<div id="mw-navigation">');

    if ($filtered == 'no')
        @include 'genmeta3.php';

    if ($filtered == 'yes') {
        if ($section == '')
            echo '<span style="font-size:0.75em;"><a href="#toctitle"><b>TABLE OF CONTENTS ...</b></a> '
            . 'Source:&nbsp;<em>WIKIPEDIA</em>&nbsp;(<a rel="nofollow" href="https://creativecommons.org/licenses/by-sa/3.0/deed.en" target="_blank">CC</a>)<br/></span>';
        //include 'banner3.php';
        echo "<h2>$intro</h2>";
        if ($highlight == 'on')
            include 'highlight4.php';
        if ($ref_pos)
            echo "<!--#1a-->" . substr($x, 0, $ref_pos) . "<!--#1b-->";
        else
            echo "<!--#1a-->$x<!--#1b-->";

        if (1) {
            if ($ref_pos)
                $x_saved = substr($x, 0, stripos($x, '<span class="mw-headline" id="References">References</span>'));
            else
                $x_saved = "$x";
        }
    }
}
echo "\n\n\n<!--#2b-->\n\n\n";
?>