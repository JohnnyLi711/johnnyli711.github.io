<?php
// INIT
$debug=0; $user='unknown'; $today=date('l jS \of F Y'); $ymd=date('ymd'); 
$time=time(); $filtered='no'; $wikilen=0;

// PARAMETERS
$search=filter_var($_GET["search"], FILTER_SANITIZE_STRING);
$search_first=$search;
$search=urldecode(str_replace("%5C%26%2339%3B","%27",urlencode($search)));
$search=str_replace("\&#34;","'",$search);
$search=strtr($search, "_", " ");
$search=strtr($search, '/,"“”?.‘’', "         ");
$search=strtoupper($search);

$q_first=filter_var($_GET["q"], FILTER_SANITIZE_STRING);  
if ($q_first=='') $q_first='wiki';

if ($search=='') 
    $q=filter_var($_GET["q"], FILTER_SANITIZE_STRING); 
else 
    $q=$search;
    
$q=strtolower($q);
$q=strtr($q, "_", "+");
$q=strtr($q, " ", "+");
$q=str_replace("(", "", $q);
$q=str_replace(")", "", $q);
$q=str_replace("'", "", $q);
$q=str_replace(":", "+", $q);
$q=str_replace("++", "+", $q);
$q=str_replace("++", "+", $q);

if (stripos($q,"+(")>0) $q=substr($q,0,stripos($q,"+("));

$d=filter_var($_GET["d"], FILTER_SANITIZE_STRING); 
$par=filter_var($_GET["par"], FILTER_SANITIZE_STRING);
$type=filter_var($_GET["type"], FILTER_SANITIZE_STRING);
$find=filter_var($_GET["find"], FILTER_SANITIZE_STRING);
$highlight=filter_var($_GET["highlight"], FILTER_SANITIZE_STRING);
$section=filter_var($_GET["section"], FILTER_SANITIZE_STRING);
 
if (getenv("REMOTE_ADDR")=='zzz') $user='me';
if ($user=='me') $me=True;

$qwords = explode("+", $q);
$meta = ucwords(strtolower($search));
$metadesc = "$search INFORMATION ";

//if (stripos($_SERVER['HTTP_USER_AGENT'],'bingbot') == true) {sleep(10);}
//if (stripos($_SERVER['HTTP_USER_AGENT'],'MJ12bot') == true) {exit;}
if (getenv("REMOTE_ADDR")=='193.235.141.147') {sleep(5);}
?>