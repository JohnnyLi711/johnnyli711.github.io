<h1>
<?php
if ($handle = opendir('out')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            echo "<a href=\"out\\".$file."\" target=\"_blank\" ?>".$file."</a><br/>";
        }
    }
    closedir($handle);
}
?>
</h1>
