<?php 
function set_cookie_highlight($par) {
setcookie("highlight", $par);
}

$highlight=filter_var($_GET["highlight"], FILTER_SANITIZE_STRING);
if ($highlight=='on') set_cookie_highlight('on'); 
else if ($highlight=='off') set_cookie_highlight('off');

print_r($_COOKIE);
?>