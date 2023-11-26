<?php
$q='Cook+Islands';
include 'beta-getwiki.php';
//$qwords=array('the', 'cat', 'in', 'the', 'hat');
$qwords=$getwiki;
//$qwords='the cat in the hat';
$qwords = explode(" ", $qwords);

if ($qwords[1]!='') {
for ($i=0; $i<sizeof($qwords); $i++) {
  if (strlen($qwords[$i])>20 and stripos($qwords[$i],'ref="http')==1) {

  if (stripos($qwords[$i],'jpg')>0) {
    $label=$q . ' Image:  "' . substr($qwords[$i],5+stripos($qwords[$i],'File:')) . '';
    echo ' <a '.$qwords[$i].' target="_blank"><img src="../images/search.png" /> '.$label.'</a><br/>';
  }
  if (0 and stripos($qwords[$i],'ref="http')==1) {
  echo ' <a href="http://webot.org/?search='.$qwords[$i].'" target="_blank">
  <img src="../images/search.png" /> '.$qwords[$i].'</a><br/>';
  }
}
}
}
?>