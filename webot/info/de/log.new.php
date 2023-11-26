<?php
$robot = 0;
$agent = $_SERVER['HTTP_USER_AGENT'];
$search = filter_var($_GET["search"], FILTER_SANITIZE_STRING);
$search = stripslashes($search);
$u = filter_var($_GET["u"], FILTER_SANITIZE_STRING);
$q = filter_var($_GET["q"], FILTER_SANITIZE_STRING);

if ($agent == '') {
    $fh = fopen("log/count_no_agent.txt", 'a') or die("can't open file");
    $stringData = "1";
    fwrite($fh, $stringData);
    fclose($fh);

    $fh = fopen("log/details_no_agent.txt", 'a') or die("can't open file");
    $stringData = getenv("REMOTE_ADDR") . "\n";
    fwrite($fh, $stringData);
    fclose($fh);

    include '503.html';
    exit;
}

if (stripos($agent, 'http') > 0 or stripos($agent, 'bot') > 0 or stripos($agent, 'spider') > 0 or $agent == '') {
    $robot = 1;
}

if ($robot == 0)
    $logname = 'log/details_url_human.txt';
else
    $logname = 'log/details_url_robot.txt';

if ($u and $search) {
    $fh = fopen("out/links.txt", 'a') or die("can't open file 1");
    $stringData = "$search\n$u\n\n";
    fwrite($fh, $stringData);
    fclose($fh);

    $fh = fopen("out/count_links.txt", 'a') or die("can't open file 2");
    $stringData = "1";
    fwrite($fh, $stringData);
    fclose($fh);
    /*
      $fh = fopen("out/count_$search.txt", 'a') or die("can't open file 3");
      $stringData = "1";
      fwrite($fh, $stringData);
      fclose($fh);
     */
    $fh = fopen($logname, 'a') or die("can't open file 4");
    $stringData = "$search\n$u\n$q\n***\n";
    fwrite($fh, $stringData);
    fclose($fh);

    $fh = fopen('log/details_url.txt', 'a') or die("can't open file 5");
    //$stringData = getenv("REMOTE_ADDR") . " $u " . getenv("REMOTE_ADDR")."\n";
    $stringData = "$u " . getenv("REMOTE_ADDR") . "\n";
    fwrite($fh, $stringData);
    fclose($fh);

    header("Location: $u");
    exit;
}
?>