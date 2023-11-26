<?php if ($trace) echo "\n#file#" . __FILE__ . "<br/>\n\n"; ?>

<div id="result">
    <?php
    if ($search != "") {
        include 'core/_getwiki.php';
        //include 'core/_referral.php';
    }
    ?>
</div>
