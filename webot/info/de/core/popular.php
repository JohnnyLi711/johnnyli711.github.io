<h1>POPULAR NEWS</h1>
<?php 
@include_once $_SERVER['DOCUMENT_ROOT']."/lib/txttolink2.php"; 
@txttolink2($_SERVER['DOCUMENT_ROOT'].'/news/popular/data/final.txt','http://webot.org/?u=');
?>
