<?php
// SESSION
session_start();
if(isset($_SESSION['views'])) $_SESSION['views']=$_SESSION['views']+1; else $_SESSION['views']=1;
if(isset($_SESSION['mobile'])) $_SESSION['mobile']=$_SESSION['mobile']+1; else $_SESSION['mobile']=1;
if ($me && $debug) {
  echo 'views ['.$_SESSION['views'].'] ';
  echo 'mobile ['.$_SESSION['mobile'].'] ';
}
?>