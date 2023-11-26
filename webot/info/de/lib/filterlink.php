<?php
function filterlink($x,$y) { // x is link, y is news type
    $c=0;
    $file_handle = fopen($x, "r") or exit("can't open file");
    $fh = fopen("$x.htm", 'w') or die("can't open file");
    while (!feof($file_handle)) {
        $line1 = strtoupper(trim(fgets($file_handle)));//echo $line1;
        //$line1 = trim(fgets($file_handle));//echo $line1;
        $line2 = trim(fgets($file_handle));
        if (stripos($line2,'washingtonpost') or stripos($line2,'philly') or stripos($line2,'twitter') or stripos($line2,'.com//') or stripos($line2,'ap.org') or substr_count($line2, 'http') > 2) {
            $line2 = '';
        }
        if ($line1 == $y and $line2 != '' and stripos($line2,'en.webot.org/?u=http://')) {
          //$stringData = "$line1 $line2\n"; 
          $stringData = "$line2<br/>\n";
          fwrite($fh, $stringData);
          $c++;
        }
    }
    //echo "<p>TOTAL ITEMS: $c</p>";
    fclose($file_handle);
    fclose($fh);
    return (1); 
} 

//@filterlink($_SERVER['DOCUMENT_ROOT'] . '/webot/en/log/details_url_human.txt.htm', '[USNEWS]');
?>
