<?php // security
echo "Your IP is " . getenv("REMOTE_ADDR") . " ... ";
if (getenv("REMOTE_ADDR") == '141.239.236.159')
    $me = True;
if (!$me) {
    echo 'Hello World!';
    exit;
}
else
    echo '<h1>Hello Admin!</h1>';

$trace=1;
$sandbox=1;

include 'core/command.php';

if ($trace) echo "\n#file#" . __FILE__ . "<br/>\n\n";

$_SERVER['DOCUMENT_ROOT']=$_SERVER['DOCUMENT_ROOT'].'/webot/en';

include 'log_fast.php';
include 'core/home.php';

include 'runlog.php';
?>