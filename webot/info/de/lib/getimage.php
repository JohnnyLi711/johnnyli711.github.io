<?php
//$u='http://earthspot.org/api/getimage.php?q=alaska';  // user's search query
$u='http://earthspot.org/api/getimage.php?q='.strtr($search_first, " ", "+");  //echo $u; exit;
$headers=@get_headers($u); 

if (stripos($headers[0],'200 OK')>0)  {
    $img = @file_get_contents($u);
    echo $img;
}
?>