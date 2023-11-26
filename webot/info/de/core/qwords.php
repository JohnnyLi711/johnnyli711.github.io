<?php

//$q = 'the+cat+in+the+hat';
$qwords = explode("+", $q);

if ($qwords[1] != '') {
    for ($i = 0; $i < sizeof($qwords); $i++) {
        if (strlen($qwords[$i]) > 2) {
            echo ' <a href="http://webot.org/info/en/?search=' . $qwords[$i] . '" target="_blank">' . ucfirst($qwords[$i]) . '</a> ';
        }
    }
}

?>
