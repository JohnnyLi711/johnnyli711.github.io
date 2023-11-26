<?php

$a = stripos($x, "<p><b>$search");
if ($a === false)
    $a = stripos($x, "<p>a <b>$search");
if ($a === false)
    $a = stripos($x, "<p>an <b>$search");
if ($a === false)
    $a = stripos($x, "<p>the <b>$search");
if ($a > 0) {
    $x = substr($x, $a + 3);
    $x = substr($x, 0, strpos($x, '</p>'));
    $x1 = strip_tags($x);
    $x2 = substr($x1, 0, strpos($x1, '.'));
//echo $x1;
//echo "\n\n".stripos($x1,"$search is");
}

if (stripos($x1, "$search is") !== false) {
    $intro = $x;
    $metadesc = $x1;
}
/////////////////////////////////////////////////////////
if ($me) {
if (stripos($x2, "is a") !== false) {
    $intro = $x;
    $metadesc = $x1;
}}
///////////////////////////////////////////////////////////

//exit;
?>
