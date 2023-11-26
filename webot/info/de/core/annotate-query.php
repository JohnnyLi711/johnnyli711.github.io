<?php

function annotate_query($search, $q) {
    include 'annotate-getwiki.php';
    $qwords = $wikipage;
    $qwords = explode(" ", $qwords);           //print_r($qwords);
    $find = $search;

    if ($qwords[1] != '') {
        for ($i = 0; $i < sizeof($qwords); $i++) {
            if (stripos($qwords[$i], $find) > 0) {
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

//annotate_query($search,$q);
annotate_query('TREE', 'tree');
?>