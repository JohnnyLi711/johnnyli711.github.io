<?php
    header("Status: 301 Moved Permanently");
    header("Location:https://earthspot.org/geo/?" . $_SERVER['QUERY_STRING']);
    @include 'log_user.php';
    exit;
?>