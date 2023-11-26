<?php

function annotate_links($search, $q) {
    echo $search;
    include 'annotate-getwiki.php';
    $qwords = $wikipage;
    $qwords = explode(" ", $qwords);
    if ($me) print_r($qwords);
    $find = 'ref="http://en.webot.org';

    if ($qwords[1] != '') {
        for ($i = 0; $i < sizeof($qwords); $i++) {
            if (stripos($qwords[$i], $find) == 1) {
                if (stripos($qwords[$i], "Wikipedia:") == 0 and stripos($qwords[$i], "Help:") == 0) {
                    $label = substr($qwords[$i], 7 + stripos($qwords[$i], 'search=')) . '</em>';
                    $label = urldecode($label);
                    $label = strtr($label, '#_"', ':  ');
                    echo '<a ' . $qwords[$i] . ' >';
                    echo '<br/><img src="http://csehawaii.com/images/search1.png" class="ic-img" width="12px" alt="search" />';
                    echo '&nbsp;<b>' . $label . '</b></a>';
                }
            }
        }
    }
}

annotate_links($search, $q);
?>