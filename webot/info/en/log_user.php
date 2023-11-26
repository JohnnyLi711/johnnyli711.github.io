<?php

$fh = fopen('log/count.txt', 'a') or die("can't open file (log)");
$stringData = "1";
fwrite($fh, $stringData);
fclose($fh);

?>