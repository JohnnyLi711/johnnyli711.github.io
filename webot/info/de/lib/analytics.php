<?php
if (1) {
    $f = fopen('../log/lib-analytics.txt', 'a') or die("can't open file");
    $s = date(md)." ".getenv("REMOTE_ADDR")." ".$_SERVER['PHP_SELF'].' | '.$q."\n";
    fwrite($f, $s);
    fclose($f);
}
?>

