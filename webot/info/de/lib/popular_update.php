<?php
if (file_exists('../log/details_url_human.txt')) {
    @include_once $_SERVER['DOCUMENT_ROOT'] . "/webot/en/lib/txttolink4.php";
    @txttolink4($_SERVER['DOCUMENT_ROOT'] . '/webot/en/log/details_url_human.txt', 'http://en.webot.org/?u=');
    @include_once $_SERVER['DOCUMENT_ROOT'] . "/webot/en/lib/filterlink.php";
    @filterlink($_SERVER['DOCUMENT_ROOT'] . '/webot/en/log/details_url_human.txt.htm', '[' . strtoupper($q) . ']');
}
?>
