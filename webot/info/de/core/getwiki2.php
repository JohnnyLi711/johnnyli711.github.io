<?php

//print_r($headers); exit;
$headers = @get_headers('http://en.wikipedia.org/wiki/' . $search_first);

if (stripos($headers[0], '200 OK') == FALSE) {
    $headers = @get_headers('http://en.wikipedia.org/wiki/' . strtr($search_first, " ", "_"));
}

if (stripos($headers[0], '200 OK') == FALSE) {
    $headers = @get_headers('http://en.wikipedia.org/wiki/' . strtr(ucwords($search_first), " ", "_"));
}

if (stripos($headers[0], '200 OK') == FALSE) {
    $headers = @get_headers('http://en.wikipedia.org/wiki/' . urlencode(ucwords(strtr($q, "+", "_"))));
}

if (stripos($headers[0], '200 OK') > 0) {
    $x = @file_get_contents($u);
    if ($filtered == 'no') {
        include $h . 'core/filter.php';
    }
    $x = substr($x, stripos($x, '<body'));
    $x = substr($x, stripos($x, '">') + 2);
    $x = substr($x, 0, stripos($x, '</body>'));
    $x = str_replace('"//', '"http://', $x);
    $x = str_replace('/w/index.php', '/', $x);
    $x = str_replace('Jump to:					<a href="#mw-navigation">navigation</a>,', '', $x);
    $x = str_replace('<a href="#p-search">search</a>', '', $x);
    $x = str_replace('href="/', 'href="http://en.wikipedia.org/', $x);
    $x = str_replace('http://en.wikipedia.org/wiki/', 'http://webot.org/?search=', $x);
    $x = str_replace('http://webot.org/?search=File:', 'http://en.wikipedia.org/wiki/File:', $x);
    $x = str_replace('>edit</a>]', '></a>]', $x);
    $x = str_replace('Jump to:					<a href="#mw-head">navigation</a>,', '<br/>', $x);
    $x = str_replace('href="http://www.', 'href="http://webot.org/?nofollow=', $x);
    $x = str_replace(
            //convert from---------------------------------
            array('href="#cite_note',
        '$', 'in 20'),
            //convert to-----------------------------------
            array('rel="nofollow" target="_blank" href="' . $u . '#cite_note',
        '<span style="background-color:black;color:lime" class="dollar">$</span>',
        '<span style="background-color:black;color:cyan" class="year">in 20</span>'
            ), $x);
    $ref_pos = stripos($x, '<span class="mw-headline" id="References">References</span>');
    if ($highlight == 'on')
        include 'highlight3.php';

    if ($filtered == 'yes') {
        if ($ref_pos)
            echo substr($x, 0, stripos($x, '<span class="mw-headline" id="References">References</span>'));
        else
            echo $x;
    }
}
//$filtered = 'yes';
?>