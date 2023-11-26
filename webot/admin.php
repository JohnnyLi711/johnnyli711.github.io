<div style="margin-top:50px; text-align:center">
    <h1>WELCOME!</h1>
    <?php
    //##### secure
    if (getenv("REMOTE_ADDR") == '141.239.236.159')
        $me = True;
    else
        $me = False;
	
    if (!$me) {
        echo 'Your IP is ' . getenv("REMOTE_ADDR");
        exit;
    }
    echo "Hello Admin!<br/><br/>";
    //phpinfo(); exit;
    ?>
    <p><img src="favicon.ico" alt="Meta Search" width="200" /></p>
    <h1>
    <?php $x='/' ?> <p><a href="<?php echo $x ?>" target="_blank"><?php echo $x ?></a> 92,300</p>
    <?php $x='/info/en' ?> <p><a href="<?php echo $x ?>" target="_blank"><?php echo $x ?></a> 5120</p>
    </h1>
</div>