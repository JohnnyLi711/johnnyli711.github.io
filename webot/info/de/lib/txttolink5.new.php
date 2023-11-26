<?php
function txttolink5($x,$y) { 
    $c=0;
    $file_handle = fopen($x, "r") or exit("can't open file");
    $fh = fopen("$x.htm", 'w') or die("can't open file");
    while (!feof($file_handle)) {
        $line1 = strtoupper(trim(fgets($file_handle)));
        $line2 = trim(fgets($file_handle));
        $line3 = trim(fgets($file_handle));
        $line4 = trim(fgets($file_handle));
        if ($line3 == '') $line3='world';
        //$line = strtr($line, '#"&/', '    ');
        if ($line1 != '' and $line2 != '') {
          echo $line2 . "<br/><br/>"; 
          $stringData = "[$line3]\n" . '<a href="' . $y . $line2 . '&search=' . urlencode($line1) . '"  target="_blank">' . $line1 . "</a><br/>\n"; 
          fwrite($fh, $stringData);
          $c++;
        }
    }
    echo "<p>TOTAL ITEMS: $c</p>";
    fclose($file_handle);
    fclose($fh);
    return (1); 
} 

@txttolink5($_SERVER['DOCUMENT_ROOT'] . '/webot/en/log/details_url_human.txt', 'http://en.webot.org/?u=');
?>
