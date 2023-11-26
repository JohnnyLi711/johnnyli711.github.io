<?php
$q = filter_var($_GET["q"], FILTER_SANITIZE_STRING);
$u = filter_var($_GET["u"], FILTER_SANITIZE_STRING);
$search = filter_var($_GET["search"], FILTER_SANITIZE_STRING);
$search = stripslashes($search);
$addr = getenv("REMOTE_ADDR");
$agent = $_SERVER['HTTP_USER_AGENT'];

// count all
if (1) {
        $fh = fopen('log/count_all.txt', 'a') or die("can't open file");
        $stringData = "1";
        fwrite($fh, $stringData);
        fclose($fh);
}

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

    header("Location: $u");
    exit;
}
?>