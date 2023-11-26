<!DOCTYPE HTML>
<?php
$par = str_replace(" ", "", $_GET['par']);
if (stripos($par, '.') > 0)
    $par = substr($par, 0, stripos($par, '.'));
$par = str_replace("_", "", $par);
$par = str_replace("%20", "", $par);
$par = str_replace(".", "", $par);
?>
<html>
    <head>
        <title><?php echo strtoupper($par); ?> Domains</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="<?php echo strtoupper($par); ?> Domains" />
        <meta name="description" content="<?php echo strtoupper($par); ?> Domains" />
        <link rel="shortcut icon" href="http://en.webot.org/images/favicon.png" />
    </head>
    <body style="background:royalblue">
    <center>
        <h1><a href="http://<?php echo $par ?>.com" target="_blank" rel="nofollow"><?php echo $par ?>.com</a></h1>
        <iframe src="http://<?php echo $par ?>.com" width=1200 height=500></iframe>

        <h1><a href="http://<?php echo $par ?>.org" target="_blank" rel="nofollow"><?php echo $par ?>.org</a></h1>
        <iframe src="http://<?php echo $par ?>.org" width=1200 height=500></iframe>

        <h1><a href="http://<?php echo $par ?>.net" target="_blank" rel="nofollow"><?php echo $par ?>.net</a></h1>
        <iframe src="http://<?php echo $par ?>.net" width=1200 height=500></iframe>

        <h1><a href="http://<?php echo $par ?>.gov" target="_blank"><?php echo $par ?>.gov</a></h1>
        <iframe src="http://<?php echo $par ?>.gov" width=1200 height=500></iframe>

        <h1><a href="http://<?php echo $par ?>.edu" target="_blank"><?php echo $par ?>.edu</a></h1>
        <iframe src="http://<?php echo $par ?>.edu" width=1200 height=500></iframe>
    </center>
</body>
</html>