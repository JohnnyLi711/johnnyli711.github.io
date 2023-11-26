<?php
   $mask = "../data/*.html";
   array_map( "unlink", glob( $mask, GLOB_BRACE ) );
   
   $mask = "../data/*.txt";
   array_map( "unlink", glob( $mask, GLOB_BRACE ) );
?>