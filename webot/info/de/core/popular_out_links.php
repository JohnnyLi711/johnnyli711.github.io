<h1>POPULAR NEWS</h1>
<?php 
@include_once $_SERVER['DOCUMENT_ROOT']."/lib/txttolink3.php"; 

$mask = "../news/popular/data/details_url_human.txt";
array_map( "unlink", glob( $mask, GLOB_BRACE ) );
exec("cat ../log/details_url_human.txt >> ../news/popular/data/details_url_human.txt");

@txttolink3($_SERVER['DOCUMENT_ROOT'].'/news/popular/data/details_url_human.txt','http://webot.org/?u=');

if (file_exists('../news/popular/data/details_url_human.txt.txt')) {
    $lines = array_unique(file('../news/popular/data/details_url_human.txt.txt'));
    file_put_contents('../log/details_url_human_uni.txt', implode($lines));
    echo "<p>details_url_human_uni.txt</p>";
    include '../log/details_url_human_uni.txt';
}
?>

