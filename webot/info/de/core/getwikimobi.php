<?php
$u="http://webot.org/wiki/$search_first.html";
$headers=@get_headers($u);
//print_r($headers); exit;

if (stripos($headers[0],'200 OK')>0)  {
    $x = @file_get_contents($u);
    if (stripos($x,'geohack')) $geo=true;
    $wikilen=strlen($x);
    if ($filtered=='no') {include 'core/filter.php';}
    $x = substr($x,stripos($x,'<body'));
    $x = substr($x,stripos($x,'">')+2);
    $x = substr($x,0,stripos($x,'</body>'));
    if (1) {
      $fh = fopen($w, 'w') or die("can't open file");
      fwrite($fh,$x);
      fclose($fh);
    }

    $x = str_replace('"//','"http://', $x);
    $x = str_replace('/w/index.php','/', $x);
    $x = str_replace('Jump to:					<a href="#mw-navigation">navigation</a>,','', $x);
    $x = str_replace('<a href="#p-search">search</a>','', $x);

    $x = str_replace('>edit source</a>',"></a>", $x);
    $x = str_replace('<span class="mw-editsection-bracket">]</span>','', $x);
    $x = str_replace('href="/','href="http://en.wikipedia.org/', $x);
    $x = str_replace('http://en.wikipedia.org/wiki/','http://webot.org/mobi.php?search=', $x);
    $x = str_replace('http://webot.org/?search=File:','http://en.wikipedia.org/wiki/File:', $x);
    $x = str_replace('<span class="mw-editsection-bracket">[</span>',
      '<span class="mw-editsection-bracket"></span>', $x);
    $x = str_replace('Jump to:					<a href="#mw-head">navigation</a>,','<br/>', $x);
    $x = str_replace('href="http://www.','href="http://webot.org/mobi/?nofollow=', $x);
    $style="background-color:#ddd;color:black";

$ref_pos=stripos($x,'<span class="mw-headline" id="References">References</span>');

if ($filtered=='no') @include 'genmeta1.php';

if ($filtered=='yes') {
if ($section == '') echo '<span style="font-size:8pt;"><a href="#toctitle">TABLE OF CONTENTS</a></span><br/>';
echo "$intro";
if ($highlight=='on') include 'highlight4.php';
if ($ref_pos)
    echo "<!--#1a-->".substr($x,0,stripos($x,'<span class="mw-headline" id="References">References</span>')) ."<!--#1b-->";
else
    echo "<!--#1a-->$x<!--#1b-->";
}
}
//$filtered='yes';
?>