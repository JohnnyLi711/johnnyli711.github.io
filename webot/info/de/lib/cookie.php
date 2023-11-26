<?php 
//if(isset($_SESSION['qcount'])) $_SESSION['qcount']=$_SESSION['views']+1; else $_SESSION['views']=1;
//$nextcookie=$_cookie["$nextcookie"];
$qcount=$_COOKIE["qcount"]+1;
$query="query $qcount";
$cookiename="query_" . $qcount;
setcookie($cookiename, $query, time()+3600);
setcookie("qcount", $qcount, time()+3600);
print_r($_COOKIE);
?>