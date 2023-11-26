<?php
$i=0;
$strings = array($qwords[0],$qwords[1],$qwords[2],$qwords[3],$qwords[4]);
$colors = array('silver','pink','lime','yellow','cyan');
foreach ($strings as $testcase) {
    if (ctype_alnum($testcase)) {
        //$pattern = "/$testcase(?=[^>]*<)/i";
        $pattern = "/$testcase(?=[^>]*<)/i";
        $x = preg_replace($pattern, '<span class="highlight" style="background-color:'.$colors[$i].'">'.strtoupper($testcase).'</span>',$x);
        $i=$i+1;  if ($i>4) $i=0;
    }
}
?>