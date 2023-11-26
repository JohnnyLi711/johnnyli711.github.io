<?php
//---------------------------------------------------------------
//read file $x into $line
//call with: $x='***'; fopenurl($x);
function fopenurl($x){ 
$bug=1;
$row = 1;
if (($handle = fopen($x, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        echo '<iframe src="http://webot.org/alpha/process.php?q='.$data[0].'&w='.$data[1].'"></iframe>';
        $row++;
    }
    fclose($handle);
}
--$row;
if ($bug==1) echo '<hr/>fopenurl x:'.$x.'<br/>';
return ("RECS READ: $row"); 
} 
//---------------------------------------------------------------
//read file $x into $line
//call with: $x='***'; fopencsv($x);
function fopencsv($x){ 
$bug=1;
if ($bug==1) echo 'f:a x:'.$x;
$row = 1;
if (($handle = fopen($x, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        if ($bug==1) echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            if ($bug==1) echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}
return (1); 
} 
//---------------------------------------------------------------
//read file $x into $line
//call with: $x='***'; fopenxr($x);
function fopenxr($x){ 
if (1) echo "fopenxr x:$x<br/>";
$file_handle = fopen($x, "r");
while (!feof($file_handle)) {
   $line = trim(fgets($file_handle));
   if ($line != '') {
       echo $line.'<br/>';
   }
}
fclose($file_handle);
return (1); 
} 
?>