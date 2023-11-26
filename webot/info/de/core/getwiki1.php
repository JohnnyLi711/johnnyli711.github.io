<?php
if ($me && 1) {
  echo "<br/><br/>### DEBUG ###";
  echo "<br/>[$u]";
  echo "<br/>[".$headers[0]."]";
  echo "<br/>[".substr($headers[8],16)."]";
  echo "<br/>[".$headers[3]."]";
  echo "<br/>";
  print_r($headers);
}
?>