<?php
//if (getenv("REMOTE_ADDR")=='72.234.248.149') @include 'core/command.php';

$badAgents = array('Mozilla/5.0 (compatible; MSIE or Firefox mutant;) Daum 4.1','Mozilla/5.0 (compatible; XoviBot/2.0; +http://www.xovibot.net/)', 'etcAgent');
if(in_array($_SERVER['HTTP_USER_AGENT'],$badAgents)) {
    exit();
}
//if (getenv("REMOTE_ADDR")=='72.234.248.149') $trace=1;
//if (getenv("REMOTE_ADDR")=='132.160.229.65') $trace=1;
if ($trace) echo "\n#file#" . __FILE__ . "<br/>\n\n";

$_SERVER['DOCUMENT_ROOT']=$_SERVER['DOCUMENT_ROOT'].'/webot/en';

@include 'log_fast.php';
//@include 'core/home.php';
//@include 'core/nav3.php';

//$reportname = 'webot_en';
//@include "../../include/analytics/index.php";

//if ($me) {@include 'runlog.php';}
?>