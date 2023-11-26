<?php

function annotate_links1($search, $q) { //echo $search;
    include 'annotate-getwiki.php';
    $qwords = $wikipage;
    $qwords = explode(" ", $qwords);
    if ($me) print_r($qwords);
    $find = 'ref="http://en.webot.org';

    if ($qwords[1] != '') {
        for ($i = 0; $i < sizeof($qwords); $i++) {
            if (stripos($qwords[$i], $find) == 1) {
                if (stripos($qwords[$i], $search) and !stripos($qwords[$i], 'talk') and !stripos($qwords[$i], '[')
                     and !stripos($qwords[$i], 'special')) {
                    $label = substr($qwords[$i], 7 + stripos($qwords[$i], 'search=')) . '</em>';
                    $label = urldecode($label);
                    $label = strtr($label, '#_"', ':  ');
                    echo "\n".'<a ' . $qwords[$i] . ' >';
                    echo '<br/><img src="http://csehawaii.com/images/search1.png" class="ic-img" width="12px" alt="search" />';
                    echo '&nbsp;' . $label . '</a>';
                }
            }
        }
    }
}

annotate_links1($search, $q);
?>