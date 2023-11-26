<h1>
<?php
if ($handle = opendir('log')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            echo "<a href=\"log\\".$file."\" target=\"_blank\" ?>".$file."</a><br/>";
        }
    }
    closedir($handle);
}
?>
</h1>
