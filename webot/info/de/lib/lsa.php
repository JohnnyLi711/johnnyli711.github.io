<?php
echo '<head><title>'.$title.' -';

if ($handle = opendir('./data')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && $file != "_hcc_thumbs" && substr($file,0,4) != "2011" && substr($file, -3) != "php") {
            echo ' '.strtoupper($file);
        }
    }
    closedir($handle);
}

echo '</title></head>';
//echo '<center>';
echo '<h1>'.$title.'</h1><hr/>';
if ($handle = opendir('./data')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && $file != "_hcc_thumbs" && substr($file,0,4) != "2011" && substr($file, -3) != "php") {
            echo '<br/><a href="'.$file.'" target="_blank">'.strtoupper($file).'</a>';
        }
    }
    echo '<hr/><a href="..">PARENT PAGE</a>';
    closedir($handle);
}
//echo '</center>';
?>
