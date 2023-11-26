<?php
   $mask = "../out/";

if ($handle = opendir($mask)) {
    while (false !== ($file = readdir($handle))) {
        //if (filesize($mask.$file)>0) {
            echo '<br/>' . filesize($mask.$file) . ' *** ' . $file;
        //}
    }
    closedir($handle);
}
   //array_map( "unlink", glob( $mask ) );
   //array_map('unlink', glob("../out/count*.txt"));
?>