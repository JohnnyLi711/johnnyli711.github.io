<?php
$mobi=1;
include 'lib/vars.php';
include 'core/filter.php';
if ($meta == '')
    $meta1 = "US and World News Archive - Breaking Headlines in Europe, China, Asia-Pacific and Around the World";
else
    $meta1 = "$meta INFORMATION | News Archive Reference | Royalty-Free Text and Images | Webot.org";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $meta1; ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="<?php echo $metadesc; ?>" />
        <meta name="keywords" content="<?php echo $metadesc; ?>" />
        <meta property="fb:admins" content="johnny.li.180625"/>
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link href="http://webot.org/css/mobile3.css" rel="stylesheet" type="text/css" id="webot" />
        <link href="http://webot.org/favicon3.png" rel="shortcut icon" />
    </head>
    <body>
    <center>
        <div id="page">
<?php
include 'core/filter.php';
include 'core/getwiki.php';
$filtered='yes';
?>
            <div id="wrap">
                <div>
                    <center>
                        <em>Web Search</em>
                        <form action="/mobi.php" method="get" name="form1">
                            <LABEL for="search">Search</LABEL>
                            <input type="text" value="<?php echo $search; ?>"
                              name="search" size=35 onclick="this.select()" />
                            <?php @include "$h/lib/selecttype.php"; ?>
                            <input type="submit" /><br/>
                            <small><input type="checkbox" name="highlight" value="on">Highlight</small>
                        </form>
                        <div style="background:#333333">
                            <?php if ($me) include 'include/debug.php'; ?> 
                        </div>
                        <div>
                        <?php
                            if ($search != "") @include "core/parse.php";
                            else @include "core/frontpage.php";
                        ?>
                        </div>
<?php 
if ($me or $geo) {
echo '<a href="http://earthspot.org/?q='.$search_first.'"  target="_blank">Location of '.$search.'</a>';
}
?>

                    </center>
                </div>
            </div>

        </div>
    </center>
<?php if (0) @include "include/analytics.php"; ?>
</body>
</html>