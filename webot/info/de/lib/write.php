fwrite($fh, 
'
<!DOCTYPE HTML>
<html>
    <head>
        <title>Webot News</title>
        <meta name="keywords" content="Webot News" />
        <meta name="description" content="Webot News" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="../../css/webot.css" type="text/css" id="webot" />
    </head>
    <body><center><div id="wrap">
    <div style="max-width:500px; background-color:black; opacity:0.8;filter:alpha(opacity=80)" class="text">
');

fwrite($fh, '    </div></div></center></body>'."\n".'</html>'."\n");