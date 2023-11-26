<?php
echo '<center><img border="1" src="http://www.earthspot.org/pictures/iolani%20palace.jpg" alt="Iolani Palace in Honolulu, Hawaii" /><br />Iolani Palace, Oahu</center>';

//session_start();
//if(!isset($_SESSION['u'])) $_SESSION['u']='http://earthspot.org/';

$u='http://earthspot.org/';
//////$u=filter_var($_GET["q"], FILTER_SANITIZE_STRING); 
$headers=get_headers($u);
echo $headers[0];
if (stripos($headers[0],'200 OK')>0) {
    $x = file_get_contents($u);
    //$x = str_replace('"//','"http://', $x);
    //$x = str_replace('href="/','href="$u', $x);
    //$x = str_replace('http://','http://webot.org/core/getpage.php?q=http://', $x);
    echo $x;
}
?>