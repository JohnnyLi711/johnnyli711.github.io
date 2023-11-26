<?php
$q='ibm';
//$q = str_replace('corp.','corporation',$q);
//$q = str_replace('+inc','+inc.',$q);
$q10=strtr($q, "+", "_");
$q10 = ucwords($q10);
$w='data/'.strtr($q, "+", "_").".html";
$out='out/'.strtr($q, "+", "_").".html";
$u='http://www.sec.gov/cgi-bin/browse-edgar?Find=Search&owner=exclude&action=getcompany&type=10-k&CIK='.urlencode($q10);

if ($me && 0) include 'core/getwiki1.php';///////////////////
$headers=@get_headers($u);
if (stripos($headers[0],'200 OK')==FALSE)  {
    $u='http://en.wikipedia.org/wiki/'.strtr($search_first, " ", "_");

if ($me && 0) include 'core/getwiki1.php';///////////////////
    $headers=@get_headers($u);
}
if (!stripos($headers[0],'200 OK')>0) {
    //$u='http://www.google.com/search?q=site:en.wikipedia.org+'.urlencode($q10).'&btnI';

if ($me && 0) include 'core/getwiki1.php';///////////////////
    $headers=@get_headers($u);
    if (stripos($headers[0],'302 Found')>0) {
        $u=substr($headers[1],10);
    }
    $headers=@get_headers($u);
}
if (!stripos($headers[0],'200 OK')>0) {
  if ($me && 0) include 'core/getwiki1.php';
}
if (stripos($headers[0],'200 OK')==FALSE)  {
    $u='http://en.wikipedia.org/wiki/'.strtr(ucwords($search_first), " ", "_");
    $headers=@get_headers($u);
}
if (stripos($headers[0],'200 OK')==FALSE) {
    $u="http://webot.org/wiki/$search_first.html";
    $headers=@get_headers($u);
}
//if ($me) print_r($headers);
//if (stripos($headers[0],'200 OK')>0 && substr($headers[8],16)>100)  {
if (stripos($headers[0],'200 OK')>0)  {
    $x = @file_get_contents($u);
    //if (stripos($x,'cable') !== false) {header("HTTP/1.0 410 Gone"); exit;}
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
    $x = str_replace('href="http://www.','href="http://webot.org/?nofollow=', $x);
    if ($me) $x = str_replace(
      //convert from---------------------------------
      array('href="#cite_note',
      '$','in 20'), 
      //convert to-----------------------------------
      array('rel="nofollow" target="_blank" href="'.$u.'#cite_note',
      '<span style="background-color:black;color:lime" class="dollar">$</span>',
      '<span style="background-color:black;color:cyan" class="year">in 20</span>'
      ),$x);
    if (0 and (strripos($x,'>Notable'))) {
      $fh = fopen($w, 'w') or die("can't open file");
      fwrite($fh,"1");
      fclose($fh);
    }
    if (0 and (strripos($x,'>Political party<'))) {
      $fh = fopen($w, 'w') or die("can't open file");
      fwrite($fh,"1");
      fclose($fh);
    }
    if (0 and (strripos($x,'>Actor') or strripos($x,'>Actress'))) {
      $fh = fopen($w, 'w') or die("can't open file");
      fwrite($fh,"1");
      fclose($fh);
    }
    if (0 && strripos($x,'>Born<') && strripos($x,'>Instruments<')) {
      $fh = fopen($w, 'w') or die("can't open file");
      fwrite($fh,"1");
      fclose($fh);
    }
    if (0) {
      $fh = fopen($w, 'w') or die("can't open file");
      fwrite($fh,$x);
      fclose($fh);
    }
    if (0) {
      $fh = fopen($out, 'w') or die("can't open file");
      fwrite($fh,"1");
      fclose($fh);
    }

    //echo substr($x,0,stripos($x,'<span class="mw-headline" id="References">References</span>'));
$ref_pos=stripos($x,'<span class="mw-headline" id="References">References</span>');
if ($highlight=='on') include 'highlight3.php';
if ($ref_pos)
    echo substr($x,0,stripos($x,'<span class="mw-headline" id="References">References</span>'));
else
    echo $x;
}
?>