<?php
$i=0;
$strings = array($q,$find);
//$strings = array(strtr($q, "+", " "),$find);
$colors = array('silver','cyan','lime','yellow','red');
foreach ($strings as $testcase) {
    if (ctype_alnum($testcase)) {
        //$pattern = "/$testcase(?=[^>]*<)/i";
        $pattern = "/$testcase(?=[^>]*<)/i";
        $x = preg_replace($pattern, '<span class="highlight" style="background-color:'.$colors[$i].'">'.strtoupper($testcase).'</span>',$x);
        $i=$i+1;  if ($i>4) $i=0;
    }
}
?>