<?php
$dir='log';

echo '<head><title>'.$title.' -';

if ($handle = opendir($dir)) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && $file != "_hcc_thumbs" && substr($file, -3) != "php") {
            echo ' '.strtoupper($file);
        }
    }
    closedir($handle);
}

echo '</title><link rel="stylesheet" href="http://earthspot.org/css/earthspot.css" type="text/css" id="style" />
</head>';
echo "\n\n";
echo '<body><div id="main-block" class="text">';
echo '<p><b><span style="color:black; font-size:3em; font-weight:900">'.strtoupper($title)."</span></b> <br/><small>$cwd</small>".'</p><hr/>';
if ($handle = opendir($dir)) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && $file != "_hcc_thumbs" && substr($file, -3) != "php") {
            echo '<a href="'.$file.'" target="_blank">'.strtoupper($file).'<br/></a>';
        }
    }
    echo '<hr/><a href="..">PARENT PAGE</a>';
    closedir($handle);
}
echo '</div></body>';
?>
