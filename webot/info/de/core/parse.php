<?php if ($trace) echo "\n#file#" . __FILE__ . "<br/>\n\n"; ?>

<div id="result">
    <?php
    $parsetype = $type;

    if (strlen($search_first) > 4 and ctype_upper(substr($search_first,0,5))) {
        include 'core/referral.php';
        echo '<br/><br/>';
        //$parsetype = 'searchbox';
    }
    
    if ($parsetype == NULL && $search != "") {
        //echo "<span style=\"font-size:2em; color:cornflowerblue; font-family:'arial bold',arial;\">$search </span><hr/>";
        echo '<span style="font-family:arial black; font-size:2em">' . substr($search, 0, 30) . ' ...</span><hr/>';
        //echo '<img src="http://billionwebs.com/favicon.ico" width="50px" class="ic-img" alt="Billionwebs.com Icon"> ';
        //echo "<span style=\"font-size:2em; color:cornflowerblue; font-family:'arial bold',arial;\">$search </span><hr/>";
        //include 'banner3.php';
        if (stripos($q_first,'news')==0) include 'core/_getwiki.php';
        echo '<br/><a rel="nofollow" href="http://google.com/search?q=' . "$q" . '&btnI" target="_blank"><span STYLE="color:blue; font-size:1.3em; font-weight:bold">' . $search . '</span> INFORMATION</a><br/><br/>';
        include 'qwords.php';
        //if ($me) include 'core/getwiki_zh.php';
        echo '<br/>';
        include "core/referral.php";
        if ($wikilen==0) include 'core/getwiki_draft.php';
        //echo '<span class="big"><hr/><p>HEADLINE NEWS</p></span>';
        //include "core/frontpage.php";
        //echo $search;
        //if ($search=='CHINA') {include 'core/getwiki_zh.php';}
    }

    if ($parsetype == 'beta' && $search != "") {
        include 'core/getimage.php';
    }

    if ($parsetype == 'draft' && $search != "") {
        //echo "<h1>THIS IS AN UNPUBLISHED DRAFT FROM WIKIPEDIA</h1>";
        include 'core/getwiki_draft.php';
    }

    if ($parsetype == 'definition' && $search != "") {
        echo "<em><center>Definitions and Pronunciations</center></em><br/>";
        echo '<a rel="nofollow" href="http://www.merriam-webster.com/dictionary/'.$q.'" target="_blank"><span style="font-size:2.0em; color:black">'
            . $search . ' Definition</span> in <em>English</em></a>';
        echo '<br/><br/><a rel="nofollow" href="http://dictionary.law.com/Default.aspx?typed='.$q.'&type=1" target="_blank"><span style="font-size:2.0em; color:black">'
            . $search . ' Definition</span> in <em>Legal</em></a>';
        echo '<br/><br/><a rel="nofollow" href="http://medical-dictionary.thefreedictionary.com/'.$q.'" target="_blank"><span style="font-size:2.0em; color:black">'
            . $search . ' Definition</span> in <em>Medical</em></a>';
        echo '<br/><br/><a rel="nofollow" href="http://financial-dictionary.thefreedictionary.com/'.$q.'" target="_blank"><span style="font-size:2.0em; color:black">'
            . $search . ' Definition</span> in <em>Financial</em></a>';
        echo '<br/><br/><a rel="nofollow" href="http://www.urbandictionary.com/define.php?term='.$q.'" target="_blank"><span style="font-size:2.0em; color:black">'
            . $search . ' Definition</span> in <em>Slang</em></a>';
            
        echo '<br/><br/><a rel="nofollow" href="http://dictionary.cambridge.org/us/pronunciation/english/'.$q.'#translations_box" target="_blank"><span style="font-size:2.0em; color:black">'
            . $search . ' Pronunciation</span> in <em>US/UK English</em></a>';
        echo '<br/><br/><a rel="nofollow" href="http://www.collinsdictionary.com/dictionary/english/'.$q.'#translations_box" target="_blank"><span style="font-size:2.0em; color:black">'
            . $search . ' Pronunciation</span> in <em>Foreign Languages</em></a>';
            
        echo '<br/><br/><a rel="nofollow" href="http://www.collinsdictionary.com/dictionary/english-german/'.$q.'" target="_blank"><span style="font-size:2.0em; color:black">'
            . $search . ' Translation</span> in <em>German</em></a>';
        echo '<br/><br/><a rel="nofollow" href="http://www.collinsdictionary.com/dictionary/english-french/'.$q.'" target="_blank"><span style="font-size:2.0em; color:black">'
            . $search . ' Translation</span> in <em>French</em></a>';
        echo '<br/><br/><a rel="nofollow" href="http://www.collinsdictionary.com/dictionary/english-spanish/'.$q.'" target="_blank"><span style="font-size:2.0em; color:black">'
            . $search . ' Translation</span> in <em>Spanish</em></a>';
        echo '<br/><br/><a rel="nofollow" href="http://www.collinsdictionary.com/dictionary/english-italian/'.$q.'" target="_blank"><span style="font-size:2.0em; color:black">'
            . $search . ' Translation</span> in <em>Italian</em></a>';
        echo '<br/><br/><a rel="nofollow" href="http://www.shabdkosh.com/hi/translate?e='.$q.'&l=hi" target="_blank"><span style="font-size:2.0em; color:black">'
            . $search . ' Translation</span> in <em>Hindi</em></a>';
            
        echo '<br/><br/>';
        include 'core/getwiktionary.php';
    }

    if ($parsetype == 'extra' && $search != "") {
        echo "<p>$search<hr/></p>";
        include 'core/referral.php';
        echo "<br/><br/><br/>";
        if ($qwords[1] == '') {
            include 'nav-content1.php';
            include 'core/getimage.php';
        }
    }

    if ($parsetype == 'Stock') {
        $query = $search . ' ' . date(Y, strtotime("-1 year"));
        echo '<h1><a href="https://www.google.com/search?q=' . $query
        . '+annual+report&btnI" target="_blank">' . $search . ' Annual Report</a></h1>';
        echo '<span style="font-size:2em"><a href="http://webot.org/search/google/sec.php?q=' . $query . '+10K" target="_blank">' . $search
        . ' 10-K</a></span>';
    }
    ?>
</div>
