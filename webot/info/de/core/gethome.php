<?php
$u = 'http://en.webot.org/';
$headers = @get_headers($u); // $me = 1; if ($me) print_r($headers); exit;

if (stripos($headers[0], '200 OK') > 0) {
    $x = @file_get_contents($u);

    if (1) {
        $fh = fopen("../out/home.html", 'w') or die("can't open file (gh)");
        fwrite($fh, $x);
        fclose($fh);
    }
}
?>