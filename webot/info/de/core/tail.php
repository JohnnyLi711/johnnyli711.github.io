<div id="tail">
<small><div style="background:#CEECF5"><em><?php echo $search ?></em> on 
<a href="http://google.com/search?q=<?php echo $q ?>"  target="_blank">Google</a>
<a href="http://search.yahoo.com/search?p=<?php echo $q ?>"  target="_blank">Yahoo</a>
<a href="http://bing.com/search?q=<?php echo $q ?>"  target="_blank">Bing</a>
<a href="http://us.ask.com/web?q=<?php echo $q ?>"  target="_blank">Ask</a>
<a href="http://search.aol.com/aol/search?q=<?php echo $q ?>"  target="_blank">Aol</a>
<a href="http://www.facebook.com/search.php?q=<?php echo $q ?>"  target="_blank">Facebook</a>
<a href="https://twitter.com/search?q=<?php echo $q ?>"  target="_blank">Twitter</a>
</div></small>

<br/><!--1-->
<a href="http://earthspot.org/?q=<?php echo "$q" ?>" accesskey="1" target="_blank"><img src="../images/globe.png" />Maps</a>
<!--2-->
<a href="http://www.youtube.com/results?search_query=<?php echo $q ?>" accesskey="2" target="_blank">
<img src="../images/video.png"  />Videos</a>
<!--3-->
<a href="http://images.google.com/images?as_q=<?php echo $q ?>&um=1&hl=en&btnG=Google+Search&as_epq=&as_oq=&as_eq=&imgtype=photo&imgsz=svga&imgw=&imgh=&imgar=&as_filetype=&imgc=&as_sitesearch=&as_rights=&safe=active&as_st=y" accesskey="3" target="_blank"><img src="../images/image.png"  />Images</a>
<!--4-->
<a href="http://query.nytimes.com/search/sitesearch?query=<?php echo $q ?>" accesskey="4"  target="_blank"><img src="../images/news.png"  />News</a>
<!--5-->
<a href="http://www.google.com/search?q=site:wikipedia.org+<?php echo $q ?>&btnI"  accesskey="5" target="_blank">
<img src="../images/book.png"  />Facts</a>

<!--Search Words-->
<?php
if ($qwords[1]!='') {
for ($i=0; $i<sizeof($qwords); $i++) {
  if (strlen($qwords[$i])>2) {
  echo '<a href="http://webot.org/?search='.$qwords[$i].'" target="_blank">'.$qwords[$i].'</a>';
  }
}
}
?>
</div>
