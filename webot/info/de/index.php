<?php $trace = 0;

//if (getenv("REMOTE_ADDR")=='72.234.248.149') @include 'core/command.php';

$badAgents = array('zzz', 'CloudEndure Scanner (ops@cloudendure.com)', 'Mozilla/5.0 (compatible; AhrefsBot/5.1; +http://ahrefs.com/robot/)', 'Mozilla/5.0 (compatible; MSIE or Firefox mutant;) Daum 4.1', 'Mozilla/5.0 (compatible; XoviBot/2.0; +http://www.xovibot.net/)', 'etcAgent');
if (in_array($_SERVER['HTTP_USER_AGENT'], $badAgents)) {
    exit();
}

//if (getenv("REMOTE_ADDR")=='72.234.248.149') $trace=1;

if ($trace)
    echo "\n#file#" . __FILE__ . "<br/>\n\n";

$_SERVER['DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'] . '/info/en';

@include 'log_fast.php';
@include 'core/_home.php';

?>