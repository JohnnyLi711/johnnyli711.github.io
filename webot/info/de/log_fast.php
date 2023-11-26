<?php if ($trace) echo "\n#file#" . __FILE__ . "<br/>\n\n";
$d = date('ymd');
$n = filter_var($_GET["n"], FILTER_SANITIZE_STRING);
$u = filter_var($_GET["u"], FILTER_SANITIZE_STRING);
$q = filter_var($_GET["q"], FILTER_SANITIZE_STRING);
$search = filter_var($_GET["search"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$cachehome = './out/cache_home.html';

if (1) {
        $fh = fopen('log/count.txt', 'a') or die("can't open file (log)");
        $stringData = "1";
        fwrite($fh, $stringData);
        fclose($fh);
}

if (0) {
    $f = fopen('log/remote.txt', 'a') or die("can't open file");
    $s = date(md)." ".getenv("REMOTE_ADDR")." $search\n";
    fwrite($f, $s);
    fclose($f);
}

if (0) {
    $x = getenv("REMOTE_ADDR"); $x = substr($x,0,5);
    $f = fopen("log/$x.txt", 'a') or die("can't open file");
    fwrite($f, "1");
    fclose($f);
}

if ($q == 'geo') {
    echo "$search<br/>";
    echo time();
    //exit;
}

if ($u == '') {
    @include 'core/censor.php';
    $filtered = 'yes';
}

if ($q != 'nocache' and $search == '' and file_exists($cachehome)) {
    readfile($cachehome);
    exit;
}

if ($u) {
    if ($n == '')
        $n = 1;
    else
        $n = $n + 1;
    $search = urldecode(str_replace("%5C%26%2339%3B", "%27", urlencode($search)));
    $search = urldecode(str_replace("\&#34;", "%27", $search));
    $search = urldecode($search);
    if ($q != '') {
        //if (strlen($search) > 10 and strpos($u,'http')===False and strlen($u) > 10 and strlen($q) > 0) {
        if (strlen($search) > 20 and substr($u,0,4)=='http' and strlen($q) > 0) {
            $fh = fopen('log/details_url_human.txt', 'a') or die("can't open file (news)");
            $stringData = "$search\n$u\n$q\n***\n";
            //$stringData = "$search\n$u&n=$n&d=$d\n$q\n***\n";
            fwrite($fh, $stringData);
            fclose($fh);
        }
    } else {
        $fh = fopen('log/details_url_human_pop.txt', 'a') or die("can't open file (news)");
        $stringData = "$search\n$u&n=$n&d=$d\npop\n***\n";
        fwrite($fh, $stringData);
        fclose($fh);
    }

    header("Location: $u");
    exit;
}
?>