<?php
$dir = '../data/';
foreach(glob($dir.'*.*') as $v){
    unlink($v);
}
?>