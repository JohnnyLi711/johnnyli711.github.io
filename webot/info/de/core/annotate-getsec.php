<?php
$q='ibm';
$q10=strtr($q, "+", "_");
$q10 = ucwords($q10);
$u='http://www.sec.gov/cgi-bin/browse-edgar?Find=Search&owner=exclude&action=getcompany&type=10-k&CIK='.urlencode($q10);
$headers=@get_headers($u);
if (stripos($headers[0],'200 OK')>0)  {
    $x = @file_get_contents($u);
    $x = substr($x,stripos($x,'<body'));
    $x = substr($x,stripos($x,'">')+2);
    $x = substr($x,0,stripos($x,'</body>'));
    $x = str_replace('"//','"http://', $x);
    $x = str_replace('/w/index.php','/', $x);
    $x = str_replace('Jump to:					<a href="#mw-navigation">navigation</a>,','', $x);
    $x = str_replace('<a href="#p-search">search</a>','', $x);
    $x = str_replace('href="/','href="http://en.wikipedia.org/', $x);
    $x = str_replace('http://en.wikipedia.org/wiki/','http://webot.org/?search=', $x);
    $x = str_replace('http://webot.org/?search=File:','http://en.wikipedia.org/wiki/File:', $x);
    $x = str_replace('>edit</a>]','></a>]', $x);
    $x = str_replace('Jump to:					<a href="#mw-head">navigation</a>,','<br/>', $x);
$ref_pos=stripos($x,'<span class="mw-headline" id="References">References</span>');
if ($ref_pos)
    $wikipage = substr($x,0,stripos($x,'<span class="mw-headline" id="References">References</span>'));
else
    $wikipage = $x;
}
?>