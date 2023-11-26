<?php
$maxquery=5;

if ($q != '') {
    if (!isset($_COOKIE["qcount"])) setcookie("qcount", 0, time() + 3600);
    $qcount=$_COOKIE["qcount"];
    $qcount=$qcount+1;
    if ($qcount>$maxquery) $qcount=1;
    $cookiename = "query_" . $qcount;
    setcookie($cookiename, $q, time() + 3600);
    setcookie("qcount", $qcount, time() + 3600);
}

//print_r($_COOKIE);
?>