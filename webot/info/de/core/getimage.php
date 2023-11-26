
<?php
$query = strtr($q, "+_ ", "---");
$u = "http://www.stockfreeimages.com/p1/$query.html";                     //echo $u;
$headers = @get_headers($u);                                              //print_r($headers);
if (stripos($headers[0], '200 OK') > 0) {                                 //echo '***OK';
    $img = @file_get_contents($u);                                        //echo $img;exit;
    if (!stripos($img, '<img'))
        exit;                                                             //echo $img;exit;
    $img1 = substr($img, stripos($img, '<body'));
    $trans = array(">" => ">\n", '"/' => '"http://www.stockfreeimages.com/');
    $img2 = strtr($img1, $trans);                                         //echo $img2;exit;
    for ($i = 1; $i <= 5; $i++) {                                         //echo "<br/>###$i";
        $img3 = substr($img2, stripos($img2, 'class="pic"'));             //echo $img3;exit;
        $img3 = substr($img3, stripos($img3, '<img src'));                //echo $img3;exit;
        $j = 0;
        $j = stripos($img3, '.jpg') + 6;                                  //echo $j;exit;
        $img4 = substr($img3, 0, $j);                                     //echo $img4;exit;
        if (stripos($img4, 'jpg') === false)
            break;
        if (stripos($img4, 'http:') > 0 && is_numeric(substr(substr($img4, -14),0,8)))
        //echo $img4 . 'width="100px" height="auto" alt="'.$q.'" title="Source:  Stockfreeimages.com" />'."\n";
        //echo $img4 . 'alt="'.$q.'" title="Stockfreeimages.com - Free Photos" />'."\n";
        //echo $img4 . 'width="240px" alt="'.$q.'" title="Stockfreeimages.com - Free Photos" />'."\n";
            echo $img4 . 'width="100%" alt="' . $q . '" title="Stockfreeimages.com - Free Photos - Right Click to Copy" />' . "\n";
        $img2 = substr($img3, $j);                                        //echo $img2;exit;
        if ($img2 == '')
            break;
    }
}
?>
<br/>


