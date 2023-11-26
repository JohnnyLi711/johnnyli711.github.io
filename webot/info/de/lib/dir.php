<?php 
//echo '<a href=".."><< UPPER LEVEL</a><hr/>';
echo '<a href="http://webot.org">HOME</a><hr/>';
if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != '.' && $file != '..' && substr($file,0,1) != "_" && substr($file, -3) != "php") {
            if (substr($file, -4) == "html")
                echo '<a href="?q='.$file.'">'.strtok(strtoupper($file),".").' </a>';
            if (is_dir($file))
                echo '<a href="'.$file.'">'.strtoupper($file).' </a>';
        }
    }
    closedir($handle);
}
?>
