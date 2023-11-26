<?php
function txttolink2($x,$y) { 
    $c=0;
    $file_handle = fopen($x, "r") or exit("can't open file");
    while (!feof($file_handle)) {
        $line1 = trim(fgets($file_handle));
        $line2 = trim(fgets($file_handle));
        //$line = strtr($line, '#"&/', '    ');
        if ($line1 != '' and $line2 != '') {
          echo '<a rel="nofollow" href="' . $y . $line2 . '&search=' . urlencode($line1) . '"  target="_blank">' . $line1 . "</a><br/><br/>\n"; 
          $c++;
        }
    }
    //echo "<p>TOTAL ITEMS: $c</p>";
    fclose($file_handle);
    return (1); 
} 
/* ex.
echo '<h1>List of S&amp;P 400 companies</h1>';
include $_SERVER['DOCUMENT_ROOT']."/lib/txttolink1.php"; 
txttolink1('sp400.txt','http://earthspot.org/apps/stock-research/?ticker=');
*/
// original in earthspot/lib
?>

