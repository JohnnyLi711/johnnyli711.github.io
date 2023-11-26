<?php
function txttolink3($x,$y) { 
    $c=0;
    $file_handle = fopen($x, "r") or exit("can't open file");
    $fh = fopen("$x.htm", 'w') or die("can't open file");
    while (!feof($file_handle)) {
        $line1 = strtoupper(trim(fgets($file_handle)));
        $line2 = trim(fgets($file_handle));
        //$line = strtr($line, '#"&/', '    ');
        if ($line1 != '' and $line2 != '') {
          //echo '<a href="' . $y . $line2 . '&search=' . urlencode($line1) . '"  target="_blank">' . $line1 . "</a><br/><br/>"; 
          $stringData = '<a href="' . $y . $line2 . '&search=' . urlencode($line1) . '"  target="_blank">' . $line1 . "</a><br/><br/>\n\n"; 
          fwrite($fh, $stringData);
          $c++;
        }
    }
    echo "<p>TOTAL ITEMS: $c</p>";
    fclose($file_handle);
    fclose($fh);
    return (1); 
} 

//@txttolink3($_SERVER['DOCUMENT_ROOT'] . '/webot/en/log/details_url_human.txt', 'http://en.webot.org/?u=');
?>
