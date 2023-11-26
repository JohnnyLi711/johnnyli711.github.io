<?php if ($trace) echo "\n#file#" . __FILE__ . "<br/>\n\n";

if (1) {
        $fh = fopen('log/count.txt', 'a') or die("can't open file (log)");
        $stringData = "1";
        fwrite($fh, $stringData);
        fclose($fh);
}

if (0) {
    $x = getenv("REMOTE_ADDR"); 
    $x = substr($x,0,5);
    $f = fopen("log/$x.txt", 'a') or die("can't open file");
    fwrite($f, "1");
    fclose($f);
}

if (0) {
    $x = $_SERVER['HTTP_USER_AGENT']; 
    $y = getenv("REMOTE_ADDR");
    $f = fopen("log/agent.txt", 'a') or die("can't open file");
    if (stripos($x, 'applebot') == true) {fwrite($f, "applebot\n");}
    else if (stripos($x, 'bingbot') == true) {fwrite($f, "bingbot\n");}
    else if (stripos($x, 'Neevabot') == true) {fwrite($f, "Neevabot\n");}
    else if (stripos($x, 'PetalBot') == true) {fwrite($f, "PetalBot\n");}
    else fwrite($f, "$x [$y] \n");
    fclose($f);
}

?>
