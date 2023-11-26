<?php
function highlight($u) {
    $x = @file_get_contents($u);  //echo $x;
    $q1 = $_COOKIE["query_1"];
    $q2 = $_COOKIE["query_2"];
    $q3 = $_COOKIE["query_3"];
    $q4 = $_COOKIE["query_4"];
    $q5 = $_COOKIE["query_5"];

$strings = array($q1,$q2,$q3,$q4,$q5);
$colors = array('silver','cyan','lime','yellow','red');

$i=0;
foreach ($strings as $testcase) {
    if (ctype_alnum($testcase)) {
        $i=$i+1;
        $pattern = "/$testcase(?=[^>]*<)/i";
        $x = preg_replace($pattern, '<span style="background-color:'.$colors[$i].'">'.strtoupper($testcase).'</span>',$x);
    }
}
return $x;
}


//echo highlight('http://webot.org/news/usnews.html');
echo highlight('http://webot.org/?search=cable');
?>