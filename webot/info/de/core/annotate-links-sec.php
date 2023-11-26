<?php

function annotate_links($search, $q) {
    include 'annotate-getsec.php';
    $qwords = $wikipage;
    $qwords = explode(" ", $qwords);           //print_r($qwords);
    $find = 'ref="http://webot.org';

    if ($qwords[1] != '') {
        for ($i = 0; $i < sizeof($qwords); $i++) {
            if (stripos($qwords[$i], $find) == 1) {
                if (stripos($qwords[$i], "Wikipedia:") == 0 and stripos($qwords[$i], "Help:") == 0) {
                    $label = '&bull; "' . substr($qwords[$i], 7 + stripos($qwords[$i], 'search=')) . '</em>';
                    $label = urldecode($label);
                    //$label=$qwords[$i];
                    $label = strtr($label, "#_", ": ");
                    echo ' <a ' . $qwords[$i] . ' >' . $label . '</a><br/>';
                }
            }
        }
    }
}
$q='ibm';
annotate_links($search, $q);
?>