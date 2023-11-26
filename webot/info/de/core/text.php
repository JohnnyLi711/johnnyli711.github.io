<?php
include 'lib/vars.php';
include 'core/filter.php';
if ($meta == '')
    $meta1 = "US and World News Archive - Breaking Headlines in Europe, China, Asia-Pacific and Around the World";
else
    $meta1 = "$meta INFORMATION | News Archive, Reference, Videos, Photos | Royalty-Free Text and Images | Webot.org";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $meta1; ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="<?php echo $meta1; ?>" />
        <meta name="keywords" content="<?php echo $meta1; ?>" />
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link href="http://webot.org/css/text.css" rel="stylesheet" type="text/css" id="webot" />
        <link href="http://webot.org/favicon3.png" rel="shortcut icon" />
    </head>
    <body>
    <center>
        <div id="page">
            <?php
            if ($search != '') {
                include 'core/nav.php';
                //include 'core/nav1.php';
            } else {
                include 'core/nav2.php';
                //include 'core/nav3.php';
            }
            ?>
            <?php
            include 'core/filter.php';
            include 'core/getwiki.php';
            $filtered = 'yes';
            ?>
            <div id="wrap">
                <div>
                    <center>        
                        <h1><br/>
                            <form action="/text.php" method="get" name="form1">
                                <LABEL for="search"><span style="font-size:1.5em">TEST</span></LABEL>
                                <input type="text" value="<?php echo $search; ?>"
                                       name="search" size=20 accesskey="s"  onclick="this.select()" />
                                       <?php @include "$h/lib/selecttype.php"; ?>
                                <input type="submit" /><br/>
                                <small><input type="checkbox" name="highlight" value="on">Highlight</small>
                            </form><br/></h1><br/>
                        <div>
                            <?php
                            if ($search != "")
                                @include "core/parse.php";
                            else
                                //@include "core/frontpage.php";
                            ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </center>
</body>
</html>