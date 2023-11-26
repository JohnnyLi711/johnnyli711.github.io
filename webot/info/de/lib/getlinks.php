<?php

function getlinks($x,$y) {

$par=$x;
$q=$par;
$w=$y;
$find='the';

if (strpos($q,'http://')===false) $q='http://'.$q;
$x = file_get_contents($q);
$x=str_replace("<a", "\n<a", $x);
if (!$x) exit('');
preg_match_all("#<a.*href.*$find.*</a>#i", $x, $href);
print_r($href[0]);
return (count($href[0])); 
}

//getlinks('webot.org/','aaa');
echo getlinks('nytimes.com/','aaa');
?>
