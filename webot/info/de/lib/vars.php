<?php
// INIT
$debug=0; $user='unknown'; $today=date('l jS \of F Y'); $ymd=date('ymd'); $time=time();
$h='/home/content/w/e/b/webotorg/html/'; $filtered='no'; $wikilen=0; //$stock='';

// SESSION
//session_start();
//if(isset($_SESSION['views'])) $_SESSION['views']=$_SESSION['views']+1; else $_SESSION['views']=1;

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
 
if (getenv("REMOTE_ADDR")=='72.234.248.149') $user='me';
if (getenv("REMOTE_ADDR")=='132.160.229.65') $user='me';
if ($user=='me') $me=True;

$_SESSION['usercss']='webot.css';
if ($par=='webot1.css') $_SESSION['usercss']=$par; 

$qwords = explode("+", $q);
$meta = $search;
$metadesc = "$search INFORMATION ";

if (stripos($_SERVER['HTTP_USER_AGENT'],'bingbot')!==false) {sleep(10);}
if (stripos($_SERVER['HTTP_USER_AGENT'],'MJ12bot')!==false) {exit;}

//if ($me) {echo getenv("REMOTE_ADDR")." me:$me"; exit;}
?>