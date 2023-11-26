<?php
   $mask = "../news/data/popular*.html";
   array_map( "unlink", glob( $mask, GLOB_BRACE ) );
?>