<?php
        
if ($trace)
    echo "\n#file#" . __FILE__ . "<br/>\n\n";
echo "\n\n\n<!--#2a-->\n\n\n";
echo "<!--test$q $search-->";
$q10 = strtr($q, "+", "_");
$q10 = ucwords($q10);
$u = "https://en.wikipedia.org/wiki/$q";
$w = '../../data/draft/' . preg_replace("/[^A-Za-z0-9_ ]/", '', strtr($q, "+", "_")) . ".html";
$headers = 0;
$found = 0;

if (stripos($headers[0], '200 OK') == FALSE) {
    $u = "https://en.wikipedia.org/wiki/" . $search_first;
    $headers = @get_headers($u);
    $found = 1;
}

if (stripos($headers[0], '200 OK') == FALSE) {
    $u = 'https://en.wikipedia.org/wiki/' . urlencode($q10);
    $headers = @get_headers($u);
    $found = 2;
}

if (stripos($headers[0], '200 OK') == FALSE and ( substr($q10, -1) == 's' or substr($q10, -1) == 'd')) {
    $u = 'https://en.wikipedia.org/wiki/' . urlencode(substr_replace($q10, "", -1));
    $headers = @get_headers($u);
    $found = 3;
}

if (stripos($headers[0], '200 OK') > 0) {
    $x = @file_get_contents($u);
    $wikilen = strlen($x);
    
    if (stripos($x, 'title="S&amp;P 500"'))
        $stock = true;
    else if (stripos($x, 'zzz') or stripos($x, 'pornzzz')) 
        //{echo '<h2>Not Found</h2>'; die();}
        {$x = '';}
    else if (stripos($x, '>Born<'))
        $person = true;
    else if (stripos($x, 'title="ZIP code"'))
        $zip = true;
    else if (stripos($x, 'geohack'))
        $geo = true;
    else if (stripos($x, 'wiktionary'))
        $word = true;
    else $noclass = true;
    
    //if ($filtered == 'no') {include 'core/filter.php';}
    $x = substr($x, stripos($x, '<div id="bodyContent"'));
    $x = substr($x, 0, stripos($x, '<div class="mw-footer-container">'));
    $x = str_replace('"//', '"https://', $x);
    $x = str_replace('/w/index.php', '/', $x);
    $x = str_replace('href="/', 'href="https://en.wikipedia.org/', $x);
    $x = str_replace('https://en.wikipedia.org/wiki/', '/info/en/?search=', $x);
    $x = str_replace('class="external text" href="http://', 'class="external text" href="https://', $x);
    $x = str_replace('>Coordinates</a>:', '><br/><b>' . $search . ' Latitude and Longitude:</b></a><br/>', $x);
    $x = str_replace('rel="nofollow"', '', $x);
    $x = str_replace('<a', "\n<a", $x);
    $x = str_replace('<img src="https://maps.wikimedia.org', '<img2 src="https://maps.wikimedia.org', $x);
    $x = str_replace('>edit<', '><', $x);
    $x = str_replace('>[<', '><', $x);
    $x = str_replace('>]<', '><', $x);
    
    if ($stock)
        $x = str_replace('</h1>', " Information (Stock)</h1>", $x);
    else if ($person)
        $x = str_replace('</h1>', " Information (Person)</h1>", $x);
    else if ($zip)
        $x = str_replace('</h1>', " Information (Place with Zip Code(s))</h1>", $x);
    else if ($geo)
        $x = str_replace('</h1>', ' Information (Geography)</h1>', $x);
    else
        $x = str_replace('</h1>', " Information</h1>", $x);
        
    if (0 && strripos($x, '>Born<')) {
        $fh = fopen('log/born.txt', 'a') or die("can't open file (gw-3)");
        fwrite($fh, "$q\n");
        fclose($fh);
    }
    if (0 && strripos($x, 'geohack')) {
        $fh = fopen('log/geohack.txt', 'a') or die("can't open file (gw-4)");
        fwrite($fh, "$q\n");
        fclose($fh);
    }
    if (0 && strripos($x, '>Website<')) {
        $fh = fopen('log/website.txt', 'a') or die("can't open file (gw-5)");
        fwrite($fh, "$q\n");
        fclose($fh);
    }
    
    if ($ref_pos == 0)
        $ref_pos = stripos($x, '<div id="mw-navigation">');

    if ($filtered == 'no')
        @include 'genmeta3.php';

    if ($geo) {
        echo '<a href="https://www.gettyimages.com/photos/' . $search . '" target="_blank"><em>Photos</em></a> &bull; ';
        echo '<a href="https://www.google.com/maps/place/' . $search . '" target="_blank"><em>Location</em></a>';
        echo '<br><br>';
    }

    if ($person) {
        echo '<a href="https://www.gettyimages.com/photos/' . $search . '" target="_blank"><em>Photos</em></a> &bull; ';
        echo '<a href="https://www.biography.com/search?query=' . $search . '" target="_blank"><em>Biography</em></a> &bull; ';
        echo '<a href="https://www.facebook.com/search/top/?q=' . $search . '" target="_blank"><em>Facebook</em></a> &bull; ';
        echo '<a href="https://twitter.com/search?q=' . $search . '&src=typed_query" target="_blank"><em>Twitter</em></a>';
        echo '<br><br>';
    }
    
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
end:
?>