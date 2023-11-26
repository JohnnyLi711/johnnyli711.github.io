<?php
$robot = 0;
$q = filter_var($_GET["q"], FILTER_SANITIZE_STRING);
$u = filter_var($_GET["u"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$search = filter_var($_GET["search"], FILTER_SANITIZE_STRING);
$search = stripslashes($search);
$addr = getenv("REMOTE_ADDR");
$agent = $_SERVER['HTTP_USER_AGENT'];

if (substr($addr, 0, 6) == '17.142' or substr($addr, 0, 7) == '173.252') {sleep(100);}

if (stripos($agent, 'google') > 0) {
    sleep(10);
}

if (stripos($agent, 'apple') > 0 or stripos($agent, 'bing') > 0) {
    sleep(30);
}

if (stripos($agent, 'facebook') > 0  or stripos($agent, 'baidu') > 0 or stripos($agent, 'xovibot') > 0) {
    include '503.html';
    exit;
}

// count all
if (1) {
        $fh = fopen('log/count_all.txt', 'a') or die("can't open file");
        $stringData = "1";
        fwrite($fh, $stringData);
        fclose($fh);
}

// robot?
if (substr($addr, 0, 6) == '202.46' or substr($addr, 0, 7) == '173.252' or substr($addr, 0, 6) == '180.76' 
    or substr($addr, 0, 6) == '66.220' or substr($addr, 0, 7) == '220.181' or substr($addr, 0, 7) == '188.165'
    or substr($addr, 0, 7) == '188.143') {
        $fh = fopen('log/count_robot?.txt', 'a') or die("can't open file");
        $stringData = "1";
        fwrite($fh, $stringData);
        fclose($fh);
    //echo 'Service not available.';
    //exit;
}

// no agent
if ($agent == '' and $addr != '184.168.138.128') {
    $fh = fopen("log/count_no_agent.txt", 'a') or die("can't open file");
    $stringData = "1";
    fwrite($fh, $stringData);
    fclose($fh);

    $fh = fopen("log/details_no_agent.txt", 'a') or die("can't open file");
    $stringData = getenv("REMOTE_ADDR") . "\n";
    fwrite($fh, $stringData);
    fclose($fh);
    
    exit;
}

// robot
if (stripos($agent, 'http') > 0 or stripos($agent, 'bot') > 0 or stripos($agent, 'spider') > 0 or $agent == '') {
    $robot = 1;
}

// set log
if ($robot == 0)
    $logname = 'log/details_url_human.txt';
else
    $logname = 'log/details_url_robot.txt';
    
// news
if ($u and $search) {
    $fh = fopen("out/links.txt", 'a') or die("can't open file 1");
    $stringData = "$search\n$u\n\n";
    fwrite($fh, $stringData);
    fclose($fh);

    $fh = fopen("out/url.txt", 'a') or die("can't open file");
    $stringData = $_SERVER['HTTP_USER_AGENT'] . "\n" . $_SERVER['PHP_SELF'] . "\n$search\n$u\n$q\n***\n";
    fwrite($fh, $stringData);
    fclose($fh);
    
    $fh = fopen("out/count_links.txt", 'a') or die("can't open file 2");
    $stringData = "1";
    fwrite($fh, $stringData);
    fclose($fh);

    $fh = fopen($logname, 'a') or die("can't open file 4");
    $stringData = "$search\n$u\n$q\n***\n";
    fwrite($fh, $stringData);
    fclose($fh);

    $fh = fopen('log/details_url.txt', 'a') or die("can't open file 5");
    $stringData = "$u " . getenv("REMOTE_ADDR") . "\n";
    fwrite($fh, $stringData);
    fclose($fh);

    header("Location: $u");
    exit;
}
?>