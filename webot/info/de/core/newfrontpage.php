<h1>NEWS ARCHIVE | 
<?php
for ($i = 1; $i <= 30; $i++) {
    $x="../news/archive/2013/".date('ymd').".html";
    $time=time() - 60 * 60 * 24 * $i;
    $date=date('ymd',$time);
    $year=date('Y',$time);
    $text=date('F j, Y',$time);
    echo '<a href="http://webot.org/news/archive/'.$year.'/?q='.$date.'.html">'.$text.'</a> | ';
}
?>
</h1>

