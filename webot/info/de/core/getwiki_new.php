<?php $q='ibm';
$q10 = strtr($q, "+", "_");
$q10 = ucwords($q10);
//$w = 'data/' . strtr(preg_replace("/[^A-Za-z0-9_ ]/", '', $q), "+", "x") . ".html";
//$w = 'data/' . preg_replace("/[^A-Za-z0-9 ]/", '', $q) . ".html";
$w = 'data/' . preg_replace("/[^A-Za-z0-9_ ]/", '', strtr($q, "+", "_")) . ".html";
$out = 'out/' . strtr($q, "+", "_") . ".html";
$u = "http://en.webot.org/$w";
$headers = @get_headers($u); 

if (stripos($headers[0], '200 OK') == FALSE) {
    $u = "https://en.wikipedia.org/wiki/" . $search_first;
    $headers = @get_headers($u);
}
if (stripos($headers[0], '200 OK') == FALSE) {
    $u = 'https://en.wikipedia.org/wiki/' . urlencode($q10);
    $headers = @get_headers($u);
}
if (0 and stripos($headers[0], '200 OK') == FALSE) {
    $u = "https://en.wikipedia.org/wiki/" . str_replace("%5C%26%2339%3B", "%27", urlencode($search_first));
    $headers = @get_headers($u);
}
if (!stripos($headers[0], '200 OK') > 0) {
    $headers = @get_headers($u);
    if (stripos($headers[0], '302 Found') > 0) {
        $u = substr($headers[1], 10);
    }
    $headers = @get_headers($u);
}
if (0 and stripos($headers[0], '200 OK') == FALSE) {
    $u = 'https://en.wikipedia.org/wiki/' . strtr(ucwords($search_first), " ", "_");
    $headers = @get_headers($u);
}
if (0 and stripos($headers[0], '200 OK') == FALSE) {
    $u = "http://webot.org/wiki/$search_first.html";
    $headers = @get_headers($u);
} 
//if ($me) print_r($headers); exit;

if (stripos($headers[0], '200 OK') > 0) {
    $x = @file_get_contents($u);
    $wikilen = strlen($x);
    //$x_save = $x;
    if (stripos($w, 'tz') or !stripos($w, 'zzzzz')) {
        if ($w=='.html') $w='noname.html';
        $fh = fopen("$w", 'w') or die("can't open file (gw)");
        fwrite($fh, $x);
        fclose($fh);
        
        if ($wikilen > 500000) {
        $fh = fopen("out/500k.txt", 'a') or die("can't open file (gw)");
        fwrite($fh, "$w\n");
        fclose($fh);
        }
    }
    if (stripos($x, 'geohack'))
        $geo = true;
    if ($filtered == 'no') {
        include 'core/filter.php';
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
        $x = str_replace('<a href="#', '<a href="http://webot.org/?search=' . $search_first . '&section=', $x);
    }
    //$x = str_replace('>edit</a>', '> <img src="http://webot.org/images/add.png" width="50px" alt="edit" /> Edit</a>', $x);
    $x = str_replace('>edit</a>', '></a>', $x);
    $x = str_replace('<span class="mw-editsection-bracket">]</span>', '', $x);
    $x = str_replace('href="/', 'href="https://en.wikipedia.org/', $x);
    $x = str_replace('https://en.wikipedia.org/wiki/', 'http://en.webot.org/?search=', $x);
    //$x = str_replace('http://en.webot.org/?search=File:', 'https://en.wikipedia.org/wiki/File:', $x);
    $x = str_replace('href="http://en.webot.org/?search=File:', 'target="_blank" href="http://earthspot.org/?nofollow=en.wikipedia.org/wiki/File:', $x);
    $x = str_replace('<span class="mw-editsection-bracket">[</span>', '<span class="mw-editsection-bracket"></span>', $x);
    $x = str_replace('Jump to:					<a href="#mw-head">navigation</a>,', '<br/>', $x);
    $x = str_replace('href="http://www.', 'target="_blank" href="http://earthspot.org/?nofollow=', $x);
    $x = str_replace('href="https://www.', 'target="_blank" href="http://earthspot.org/?nofollow=', $x);
    $x = str_replace('>Coordinates</a>:', '><br/><b>' . $search. ' Latitude and Longitude:</b></a><br/>', $x);
    $x = str_replace('href=', 'rel="nofollow" href=', $x);
    //$x = str_replace('rel="nofollow" rel="nofollow"', 'rel="nofollow"', $x);
    $x = str_replace('<a', "\n<a", $x);
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
        $fh = fopen('data/.born.txt', 'a') or die("can't open file");
        fwrite($fh, "$q\n");
        fclose($fh);
    }
    if (1 && strripos($x, 'geohack')) {
        $fh = fopen('data/.geohack.txt', 'a') or die("can't open file");
        fwrite($fh, "$q\n");
        fclose($fh);
    }
    if (1 && strripos($x, '>Website<')) {
        $fh = fopen('data/.website.txt', 'a') or die("can't open file");
        fwrite($fh, "$q\n");
        fclose($fh);
    }
    if (1 && strripos($x, '>NYSE<')) {
        $fh = fopen('data/.nyse.txt', 'a') or die("can't open file");
        fwrite($fh, "$q\n");
        fclose($fh);
        //$stock=$q;
    }
    if (1 && strripos($x, '>Traded')) {
        $fh = fopen('data/.traded.txt', 'a') or die("can't open file");
        fwrite($fh, "$q\n");
        fclose($fh);
    }
    if (1 && strripos($x, '>Notable')) {
        $fh = fopen('data/.notable.txt', 'a') or die("can't open file");
        fwrite($fh, "$q\n");
        fclose($fh);
    }
    if (1 && strripos($x, 'hawaii')) {
        $fh = fopen('data/.hawaii.txt', 'a') or die("can't open file");
        fwrite($fh, "$q\n");
        fclose($fh);
    }

    $ref_pos = stripos($x, '<span class="mw-headline" id="References">References</span>');

    if ($filtered == 'no')
        @include 'genmeta3.php';

    if ($filtered == 'yes') {
        if (0) {
            $fh = fopen($w, 'w') or die("can't open file (gw)");
            fwrite($fh, $x);
            fclose($fh);
        }
        if ($section == '')
            echo '<span style="font-size:0.75em;"><a href="#toctitle"><em>TABLE OF CONTENTS ...</em></a></span>';
        echo "<h1>$intro</h1>";
        if ($highlight == 'on')
            include 'highlight4.php';
        if ($ref_pos)
            echo "<!--#1a-->" . substr($x, 0, stripos($x, '<span class="mw-headline" id="References">References</span>')) . "<!--#1b-->";
        else
            echo "<!--#1a-->$x<!--#1b-->";

        if (1) {
            if ($ref_pos)
                $x_saved = substr($x, 0, stripos($x, '<span class="mw-headline" id="References">References</span>'));
            else
                $x_saved = "$x";
        }
        
        if (0) {
            if ($ref_pos)
                $x = substr($x, 0, stripos($x, '<span class="mw-headline" id="References">References</span>'));
            else
                $x = "$x";
            //$fh = fopen($w, 'w') or die("can't open file (gw)");
            //fwrite($fh, $x);
            //fclose($fh);
            $fh = fopen("$w.txt", 'a') or die("can't open file (gw)");
            fwrite($fh, "1");
            fclose($fh);
        }
    }
}
?>