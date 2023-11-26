<?php
$q = '中國';
$me = 1;
$q10 = strtr($q, "+", "_");
$q10 = ucwords($q10);
$w = 'data/' . strtr($q, "+", "_") . ".html";
$out = 'out/' . strtr($q, "+", "_") . ".html";
$u = 'https://zh.wikipedia.org/wiki/' . urlencode($q10);
$headers = @get_headers($u); //if ($me) print_r($headers); exit;

if (stripos($headers[0], '200 OK') > 0) {
    $x = @file_get_contents($u);
    $wikilen = strlen($x);
    $x = substr($x, stripos($x, '<body'));
    $x = substr($x, stripos($x, '">') + 2);
    $x = substr($x, 0, stripos($x, '</body>'));
    $x = str_replace('"//', '"http://', $x);
    $x = str_replace('/w/index.php', '/', $x);
    $x = str_replace('Jump to:                    <a href="#mw-navigation">navigation</a>,', '', $x);
    $x = str_replace('<a href="#p-search">search</a>', '', $x);
    $x = str_replace('>edit</a>', '></a>', $x);
    $x = str_replace('<span class="mw-editsection-bracket">]</span>', '', $x);
    $x = str_replace('href="/', 'href="https://zh.wikipedia.org/', $x);
    $x = str_replace('https://zh.wikipedia.org/wiki/', 'http://en.webot.org/?search=', $x);
    $x = str_replace('http://en.webot.org/?search=File:', 'https://zh.wikipedia.org/wiki/File:', $x);
    $x = str_replace('<span class="mw-editsection-bracket">[</span>', '<span class="mw-editsection-bracket"></span>', $x);
    $x = str_replace('Jump to:					<a href="#mw-head">navigation</a>,', '<br/>', $x);
    $x = str_replace('href="http://www.', 'href="http://earthspot.org/?nofollow=', $x);
    echo $x;
}
?>