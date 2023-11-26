<?php
    header("Status: 301 Moved Permanently");
    header("Location:http://nuuanu.net/?" . $_SERVER['QUERY_STRING']);
    exit;
?>