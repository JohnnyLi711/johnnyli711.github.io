<?php
   $mask = "../data/{,.}*.txt";
   array_map( "unlink", glob( $mask, GLOB_BRACE ) );
   
   $mask = "../data/{,.}*.html";
   array_map( "unlink", glob( $mask, GLOB_BRACE ) );
   
   $mask = "../log/{,.}*.txt";
   array_map( "unlink", glob( $mask, GLOB_BRACE ) );
   
   $mask = "../news/data/popular*.html";
   array_map( "unlink", glob( $mask, GLOB_BRACE ) );
   
   $mask = "../news/data/uknews.html";
   array_map( "unlink", glob( $mask, GLOB_BRACE ) );
?>