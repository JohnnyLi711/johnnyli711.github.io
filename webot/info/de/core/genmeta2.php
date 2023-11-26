
<?php
$a = stripos($x, "<b>$search");
    $x20 = substr($x, 0, $a);
    $a = strrpos($x20, "<p>");
if ($a > 0) {
    $x = substr($x, $a);
    $x = substr($x, 0, strpos($x, '</p>'));
    $x1 = strip_tags($x);
    $x2 = substr($x1, 0, strpos($x1, '.'));
    $intro = '<span style="font-size:1.2em;">' . $x . '</span>';
    $metadesc = $x1;
    
    if (1) {
        $fh = fopen('data/' . strtr($q, "+", "_") . ".html", 'w') or die("can't open file (gm)");
        fwrite($fh, $metadesc);
        fclose($fh);
    }
}
?>