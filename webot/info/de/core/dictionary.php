<?php

switch ($q) {
    case "log1.": @include 'log/details_human_url.txt';
        break;
    case "latest+sec+form+425+filings": @include 'data/sec.gov.html';
        break;
    case "internet+top+level+domains": @include 'data/Internet_top-level_domains.html';
        break;
    case "hawaii+wiki": @include 'data/hawaii.html';
        break;
    case "stock:":
        echo "<div class=\"text\">aaa $search $par</div>";
        break;
    case "log^": include "/home/content/w/e/b/webotorg/html/log/webot.txt";
        break;
    case "inf^": phpinfo();
        break;
    case "analysis:":
        echo '<a href="apps/analysis?par=' . $par . '" target="_blank">' . $search . $par . '</a>';
        break;
    case "doc:":
        echo 'ok';
        setcookie("doc", $_COOKIE["doc"] . '&' . $par, time() + 3600 * 24 * 30);
        break;
    case "forgetdoc:":
        echo 'ok';
        setcookie("doc", "", time() - 3600);
        break;
    case "site00site:":
        echo '<a href="http://webot.org/00/analysis/read.php?q=' . $par . '">' . $par . '</a>';
        break;
    case "site:":
        echo '<a href="http://webot.org/apps/analysis/read.php?q=' . $par . '">' . $par . '</a>';
        break;
    case "forgetsite:":
        echo 'ok';
        setcookie("site", "", time() - 3600);
        break;
    case "tree:":
        $memory = $_COOKIE["memory"];
        echo $memory;
        echo str_replace('&', '<br/>', $memory, $count);
        break;
    case "deb:":
        echo '$i=' . $i . '<br/>' . '$search=' . $search . '<br/>' . '$par=' . $par . '<br/>';
        break;
    case "ip:":
        echo getenv("REMOTE_ADDR");
        break;
    case "memory:":
        echo 'ok';
        setcookie("memory", $_COOKIE["memory"] . '&' . $par, time() + 3600 * 24 * 30);
        break;
    case "recall:":
        echo '<hr/><em>[MEMORY]</em>' . str_replace('&', '<br/>', $_COOKIE["memory"], $count);
        echo '<hr/><em>[SITE]</em>' . str_replace('&', '<br/>', $_COOKIE["site"], $count);
        echo '<hr/><em>[DOC]</em>' . str_replace('&', '<br/>', $_COOKIE["doc"], $count) . '<hr/>';
        break;
    case "forget:":
        echo 'ok';
        setcookie("memory", "", time() - 3600);
        break;
    case "speed:":
        echo '<a href="http://speedtest.net/" target="_blank">speedtest.net</a>';
        break;
}
?>