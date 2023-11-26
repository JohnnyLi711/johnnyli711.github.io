<?php 
$u = "http://foter.com/search/?q=$q&search=Search+photos";                echo $u;
$headers = @get_headers($u);                                              //print_r($headers);
if (stripos($headers[0], '200 OK') > 0) {
    $img = @file_get_contents($u);
    if (!stripos($img, '<img')) exit;
    $img1 = substr($img, stripos($img, '<body'));
    $trans = array(">" => ">\n", '"/' => '"http://foter.com/');
    $img2 = strtr($img1, $trans);
    for ($i = 1; $i <= 20; $i++) {                                        //echo "\n###$i";
        $img3 = substr($img2, stripos($img2, 'class="thumb"'));           //echo substr($img3, 0 + 1, 100);
        $img3 = substr($img3, stripos($img3, '<img src'));                //echo substr($img3, 0 + 1, 100);
        $j = 0; $j = stripos($img3, '/>');
        $img4 = substr($img3, 0, $j);                                     //echo substr($img4, 0 + 1, 100);
        if (stripos($img4, 'http:') > 0 && strlen($img4) && stripos($img4, 'foter.com_infographic_150.png') == 0)
            //echo $img4 . 'width="100px" height="auto" alt="'.$q.'" title="Source:  Foter.com" />'."\n";
            echo $img4 . 'alt="'.$q.'" title="Foter.com - Free Photos" />'."\n";
        $img2 = substr($img3, $j);                                        //echo substr($img2, 0 + 1, 1000);
    }
}
?>
<br/>