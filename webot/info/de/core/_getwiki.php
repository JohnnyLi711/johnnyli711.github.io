<?php // de. info edit

if ($trace)
    echo "\n#file#" . __FILE__ . "<br/>\n\n";
echo "\n\n\n<!--#2a-->\n\n\n";
$q10 = strtr($q, "+", "_");
$q10 = ucwords($q10);
$w = 'data/' . preg_replace("/[^A-Za-z0-9_ ]/", '', strtr($q, "+", "_")) . ".html";
$out = 'out/' . strtr($q, "+", "_") . ".html";
$u = "http://en.webot.org/$w";
$headers = @get_headers($u);
$found = 0;

if (stripos($headers[0], '200 OK') == FALSE) {
    $u = "https://de.wikipedia.org/wiki/" . $search_first;
    $headers = @get_headers($u);
    $found = 1;
}

if (stripos($headers[0], '200 OK') == FALSE) {
    $u = 'https://de.wikipedia.org/wiki/' . urlencode($q10);
    $headers = @get_headers($u);
    $found = 3;
}

if (stripos($headers[0], '200 OK') == FALSE and ( substr($q10, -1) == 's' or substr($q10, -1) == 'd')) {
    $u = 'https://de.wikipedia.org/wiki/' . urlencode(substr_replace($q10, "", -1));
    $headers = @get_headers($u);
    $found = 4;
}

if (stripos($headers[0], '200 OK') > 0) {
    $x = @file_get_contents($u);
    $wikilen = strlen($x);
    if (0 and !stripos($u, 'webot.org')) {
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
    $x = str_replace('/w/index.php', '/', $x);
    $x = str_replace('Zur Navigation springen', '', $x);
    $x = str_replace('Zur Suche springen', '', $x);
    $x = str_replace('>Bearbeiten</a>', '></a>', $x);
    $x = str_replace('>Quelltext bearbeiten</a>', '></a>', $x);
    $x = str_replace('> | </span>', '></span>', $x);
    $x = str_replace('<span class="mw-editsection-bracket">]</span>', '', $x);
    
    $x = str_replace('"//', '"https://', $x);
    $x = str_replace('http://', 'https://', $x);
    $x = str_replace('href="/', 'href="https://de.wikipedia.org/', $x);
    $x = str_replace('https://de.wikipedia.org/wiki/', 'http://webot.org/info/de/?search=', $x);
    //$x = str_replace('https://webot.org/info/de/?search=Datei:', 'https://de.wikipedia.org/wiki/Datei:', $x);
    
    $x = str_replace('<span class="mw-editsection-bracket">[</span>', '<span class="mw-editsection-bracket"></span>', $x);
    $x = str_replace('Jump to:					<a href="#mw-head">navigation</a>,', '<br/>', $x);
    $x = str_replace('class="external text" href="http://', 'target="_blank" class="external text" href="http://webot.org/referral.php?nofollow=', $x);
    $x = str_replace('class="external text" href="https://', 'target="_blank" class="external text" href="http://webot.org/referral.php?nofollow=', $x);
    $x = str_replace('>Coordinates</a>:', '><br/><b>' . $search . ' Latitude and Longitude:</b></a><br/>', $x);
    $x = str_replace('rel="nofollow"', '', $x);
    $x = str_replace('<a', "\n<a", $x);
    $x = str_replace('</h1>', " Information</h1>", $x);
    $x = str_replace('From Wikipedia, the free encyclopedia', "From <em>Wikipedia</em>", $x);
    $x = str_replace('<a class="mw-jump-link" href="#mw-head">Jump to navigation</a>', "<a href=\"$u\"><em>$u</em></a>", $x);
    $x = str_replace('<h2>Contents</h2>', '<h2 id="toc">Contents</h2>', $x);
    $x = str_replace('<a class="mw-jump-link" href="#p-search">Jump to search</a>', '<br><br><a href="#toc"><span class="in-link">Table of Contents &#8680;</span></a>', $x);

    if (1 && strripos($x, '>Born<')) {
        $fh = fopen('log/born.txt', 'a') or die("can't open file (gw-3)");
        fwrite($fh, "$q\n");
        fclose($fh);
    }
    if (1 && strripos($x, 'geohack')) {
        $fh = fopen('log/geohack.txt', 'a') or die("can't open file (gw-4)");
        fwrite($fh, "$q\n");
        fclose($fh);
    }
    if (1 && strripos($x, '>Website<')) {
        $fh = fopen('log/website.txt', 'a') or die("can't open file (gw-5)");
        fwrite($fh, "$q\n");
        fclose($fh);
    }
    
    if ($ref_pos == 0)
        $ref_pos = stripos($x, '<div id="mw-navigation">');

    if ($filtered == 'no')
        @include 'genmeta3.php';

    if ($filtered == 'yes') {
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