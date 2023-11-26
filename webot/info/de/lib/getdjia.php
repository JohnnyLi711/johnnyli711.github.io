<?php
function getdjia($q) {
    global $me;
    $u='http://www.marketwatch.com/investing/index/DJIA';
    $headers=@get_headers($u);
    
    if (0) {
        echo "<br/>[$u]";
        echo "<br/>[".$headers[0]."]";
        echo "<br/>[".substr($headers[8],16)."]";
        echo "<br/>";
        print_r($headers);
    }
    if (stripos($headers[0],'200 OK')>0) {
        $x0 = @file_get_contents($u);//echo $x;
        $x = $x0;
        $a = stripos($x, '<span class="bgPercentChange">');
        $strlen1 = strlen('<span class="bgPercentChange">');
        $x = substr($x, $a+$strlen1, 100); //echo "<hr/>x: $x<hr/>";
        $b = stripos($x, "</span>"); //echo "<hr/>b: $b<hr/>";
        $x = substr($x, 0, $b);
        echo "Dow Jones Industrial Average $x"; //exit;
    }
}
?>