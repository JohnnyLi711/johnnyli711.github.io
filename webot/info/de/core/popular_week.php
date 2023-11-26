
<div style="font-size:1.5em; padding:2px">
        <?php //@include $_SERVER['DOCUMENT_ROOT'].'/news/data/popular_usnews.html'; ?>
</div>

<?php
    @include $_SERVER['DOCUMENT_ROOT'].'/news/data/popular_usnews.html';
    
    echo '<div style="color:black; background:lightblue;"><br/>';
    @include_once $_SERVER['DOCUMENT_ROOT'] . "/lib/txttolink2.php";
    @txttolink2($_SERVER['DOCUMENT_ROOT'] . '/news/popular/data/2015.txt', 'http://en.webot.org/?u=');
    @txttolink2($_SERVER['DOCUMENT_ROOT'] . '/news/popular/data/week.txt', 'http://en.webot.org/?u=');
    echo '</div>';
?>


