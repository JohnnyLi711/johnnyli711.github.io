<?php

if ($trace)
    echo "\n#file#" . __FILE__ . "<br/>\n\n";

if (stripos($headers[0], '200 OK') == FALSE) {
    $u = "https://commons.wikimedia.org/wiki/" . $search_first;
    $headers = @get_headers($u);
    $found = 1;
}

if (stripos($headers[0], '200 OK') > 0) {
    $x = @file_get_contents($u);
    $x = substr($x, stripos($x, '<body'));
    $x = substr($x, stripos($x, '">') + 2);
    $x = substr($x, 0, stripos($x, '</body>'));
    $x = str_replace('"//', '"http://', $x);
    $x = str_replace('/w/index.php', '/', $x);
    $x = str_replace('Jump to:                    <a href="#mw-navigation">navigation</a>,', '', $x);
    $x = str_replace('<a href="#p-search">search</a>', '', $x);
    $x = str_replace('>edit</a>', '></a>', $x);
    $x = str_replace('<span class="mw-editsection-bracket">]</span>', '', $x);
    $x = str_replace('href="/', 'href="https://commons.wikimedia.org/', $x);
    $x = str_replace('https://commons.wikimedia.org/wiki/', 'http://en.webot.org/?search=', $x);
    $x = str_replace('href="http://en.webot.org/?search=File:', 'target="_blank" href="http://earthspot.org/?nofollow=commons.wikimedia.org/wiki/File:', $x);
    $x = str_replace('<span class="mw-editsection-bracket">[</span>', '<span class="mw-editsection-bracket"></span>', $x);
    $x = str_replace('Jump to:    				<a href="#mw-head">navigation</a>,', '<br/>', $x);
    $x = str_replace('href="http://www.', 'target="_blank" href="http://earthspot.org/?nofollow=', $x);
    $x = str_replace('href="https://www.', 'target="_blank" href="http://earthspot.org/?nofollow=', $x);
    $x = str_replace('>Coordinates</a>:', '><br/><b>' . $search . ' Latitude and Longitude:</b></a><br/>', $x);
    $x = str_replace('href=', 'rel="nofollow" href=', $x);
    $x = str_replace('<a', "\n<a", $x);
    $style = "background-color:#ddd;color:black";
    echo "<!--#2a-->$x<!--#2b-->";
}
?>