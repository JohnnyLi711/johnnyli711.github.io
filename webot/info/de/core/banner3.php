
<div style="text-align:center">

<?php
$title=strtoupper("Photos");
$link="https://www.google.com/search?q=$q&num=50&newwindow=1&source=lnms&tbm=isch";
$image='http://en.webot.org/images/image.png';
?>

<a href="<?php echo $link; ?>" rel="nofollow" title="<?php echo $title; ?>" target="_blank">
    <img src="<?php echo $image ?>" width="90%" alt="<?php echo $title ?>" /><br/>
    <?php echo $title; ?>
    
</a><br/><br/>

<?php
$title=strtoupper("Videos");
$link="http://www.youtube.com/results?search_query=$q";
$image='http://en.webot.org/images/video.png';
?>

<a href="<?php echo $link; ?>" rel="nofollow" title="<?php echo $title; ?>" target="_blank">
    <img src="<?php echo $image ?>" width="90%" alt="<?php echo $title ?>" /><br/>
    <?php echo $title; ?>
    
</a><br/><br/>

<?php
$title=strtoupper("News");
$link="http://query.nytimes.com/search/sitesearch/#/$q/365days/allresults/1/allauthors/newest/";
$image='http://en.webot.org/images/news.png';
?>

<a href="<?php echo $link; ?>" rel="nofollow" title="<?php echo $title; ?>" target="_blank">
    <img src="<?php echo $image ?>" width="90%" alt="<?php echo $title ?>" /><br/>
    <?php echo $title; ?>
    
</a><br/><br/>

</div>



