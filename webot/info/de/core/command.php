
<?php
    $search=filter_var($_GET["search"], FILTER_SANITIZE_STRING);
    //echo "<h1>$search</h1>";
    
    if (stripos($search, "aaa")) {
        include 'core/help.php';
    }

    $i = stripos($search, "??");
    if ($search == '?' || $i > 0) {
        $parsetype = '?';
        include 'core/help.php';
    }

    $i = stripos($search, "^");
    if ($parsetype == NULL && $i > 0) {
        $parsetype = '^';
        $par = substr($search, $i + 1);
        $search = substr($search, 0, $i + 1);
        include 'core/dictionary.php';
    }

    $i = stripos($search, "::");
    if ($parsetype == NULL && $i > 0) {
        $parsetype = '::';
        $par = substr($search, $i + 1);
        $search = substr($search, 0, $i + 1);
        include 'core/dictionary.php';
    }
?>


