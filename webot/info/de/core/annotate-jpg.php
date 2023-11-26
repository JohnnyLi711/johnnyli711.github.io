<?php
function annotate_jpg($search,$q) {
include 'annotate-getwiki.php';
$qwords=$wikipage;
$qwords = explode(" ", $qwords);

if ($qwords[1]!='') {
for ($i=0; $i<sizeof($qwords); $i++) {
  if (stripos($qwords[$i],'ref="http')==1) {
  if (stripos($qwords[$i],'jpg')>0) {
    $label='"' . substr($qwords[$i],5+stripos($qwords[$i],'File:')) . '</em>';
    $label=strtr($label, "_", " ");
    echo ' <a '.$qwords[$i].' target="_blank"><img src="../images/noname.png" />'.$label.'</a><br/>';
  }
}
}
}
}
annotate_jpg($search,$q);
?>