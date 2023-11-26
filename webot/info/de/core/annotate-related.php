<?php
$q='Cook+Islands';
include 'annotate-getwiki.php';
$qwords=$getwiki;
$qwords = explode(" ", $qwords);

if ($qwords[1]!='') {
for ($i=0; $i<sizeof($qwords); $i++) {
  if (strlen($qwords[$i])>20 and stripos($qwords[$i],'ref="http')==1) {

  if (stripos($qwords[$i],'ref="http')==1) {
  echo ' <a href="http://webot.org/?search='.$qwords[$i].'" target="_blank">
  <img src="../images/search.png" /> '.$qwords[$i].'</a><br/>';
  }
}
}
}
?>