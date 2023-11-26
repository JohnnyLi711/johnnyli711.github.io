<?php
$filename = '../data/nyse.txt';
$searchfor = 'cat';
$fh = fopen($filename, 'r');
$olddata = fread($fh, filesize($filename));
if(strpos($olddata, $searchfor)) {
           //found
           echo 'found';
}
else {
          //not found
          echo 'not found';
}
fclose($fh);
?>