<?php $trace = 0;

if ($trace)
    echo "\n#file#" . __FILE__ . "<br/>\n\n";

$_SERVER['DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'] . '/info/en';

@include 'core/_home.php';
@include 'log_user.php';

?>