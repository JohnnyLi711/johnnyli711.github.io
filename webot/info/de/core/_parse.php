<?php if ($trace) echo "\n#file#" . __FILE__ . "<br/>\n\n"; ?>

<div id="result">
    <?php
    $parsetype = $type;

    if (strlen($search_first) > 4 and ctype_upper(substr($search_first,0,5))) {
        include 'core/referral.php';
        echo '<br/><br/>';
    }
    
    if ($parsetype == NULL && $search != "") {
        echo '<span class="big">' . substr($search, 0, 30) . ' ...</span><hr/>';
        include 'core/_getwiki.php';
        include 'core/_referral.php';
    }

    if ($parsetype == 'beta' && $search != "") {
        include 'core/getimage.php';
    }

    if ($parsetype == 'draft' && $search != "") {
        include 'core/getwiki_draft.php';
    }
    ?>
</div>
