<?php
function txttolink1($x,$y) { 
    $c=0;
    $file_handle = fopen($x, "r");
    while (!feof($file_handle)) {
        $line1 = trim(fgets($file_handle));
        $line2 = trim(fgets($file_handle));
        //$line = strtr($line, '#"&/', '    ');
        if ($line1 != '' and $line2 != '') {
          echo '<span class="headline">'.$line1.'</span><br/>';
          echo '<a href="' . $y . $line2 . '"  target="_blank">' . $line2 . "</a><br/>"; 
          $c++;
        }
    }
    echo "<p>TOTAL ITEMS: $c</p>";
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

