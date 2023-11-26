<?php
function txttolink4($x,$y) { 
    $c=0;
    $file_handle = fopen($x, "r") or exit("can't open file");
    $fh = fopen("$x.htm", 'w') or die("can't open file");
    $hash=file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/webot/en/news/data/.hash.txt');
    while (!feof($file_handle)) {
        $line1 = trim(fgets($file_handle)); //$line = strtr($line, '#"&/', '    ');
        $line2 = trim(fgets($file_handle));
        $domain = str_replace('www.', '' , parse_url($line2, PHP_URL_HOST));
        $domain = str_replace('.com', '' , $domain);
        $found = stripos($domain, '&');
        if ($found) $domain = substr($domain, 0, $found);
        $line1 = $line1.'<span style="color:black"><br/>-<em><small>'.$domain.'</small></em></span>';
        $line3 = trim(fgets($file_handle));
        $line4 = trim(fgets($file_handle));
        if (stripos($hash,hash('ripemd160', $line2)) > 0 and $line4 == '***') {
          //if (getenv("REMOTE_ADDR")=='72.234.248.149') echo hash('ripemd160', $line2) . "<br/><br/>";
          $stringData = "[$line3]\n" . '<a rel="nofollow" href="' . $y . $line2 . '&search=' . urlencode($line1) . '"  target="_blank">' . $line1 . "</a><br/>\n"; 
          fwrite($fh, $stringData);
          $c++;
        }
        if ($line4 != '***') {
            fgets($file_handle);
        }
    }
    //echo "<p>TOTAL ITEMS: $c</p>";
    fclose($file_handle);
    fclose($fh);
    return (1); 
} 

//@txttolink4($_SERVER['DOCUMENT_ROOT'] . '/webot/en/log/details_url_human.txt', 'http://en.webot.org/?u=');
?>
