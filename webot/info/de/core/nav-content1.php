
<div>    
    <a rel="nofollow" href="http://www.collinsdictionary.com/dictionary/english/<?php echo str_replace("+", "", $q); ?>#translations_box" target="_blank">
        <img src="http://csehawaii.com/images/speaker.png" width="50px"/> <?php echo $search ?> Sound
    </a><br/><br/>

    <a rel="nofollow" href="http://en.webot.org/?search=<?php echo str_replace("+", "", $q); ?>&type=definition" target="_blank">
        <img src="http://en.webot.org/images/search2.png" width="50px"/> <?php echo $search ?> Definition
    </a><br/>

    <a rel="nofollow" href="http://www.thesaurus.com/browse/<?php echo str_replace("+", "", $q); ?>" target="_blank">
        <img src="http://en.webot.org/images/search2.png" width="50px"/> <?php echo $search ?> Synonyms
    </a><br/>

    <a rel="nofollow" href="http://en.webot.org/translate.php?search=<?php echo str_replace("+", "", $q); ?>" target="_blank">
        <img src="http://en.webot.org/images/search2.png" width="50px"/> <?php echo $search ?> Translation
    </a><br/><br/>

    <a rel="nofollow" href="https://www.godaddy.com/domains/searchresults.aspx?checkAvail=1&domainToCheck=<?php echo str_replace("+", "", $q); ?>" target="_blank">
        <img src="http://en.webot.org/images/search2.png" width="50px"/> <?php echo $search ?> Domains
    </a><br/>

    <a rel="nofollow" href="http://<?php
    echo str_replace("+", "", $q);
    if (stripos($q, '.com') == 0)
        echo '.com';
    ?>" target="_blank">
        <img src="http://en.webot.org/images/search2.png" width="50px"/> <?php echo $search ?>.com Home
    </a><br/>

    <a href="http://earthspot.org/?url=<?php
    echo str_replace("+", "", $q);
    if (stripos($q, '.com') == 0)
        echo '.com';
    ?>" target="_blank">
        <img src="http://en.webot.org/images/search2.png" width="50px"/> <?php echo $search ?>.com Owner
    </a><br/>

    <a rel="nofollow" href="http://www.alexa.com/siteinfo/<?php
       echo str_replace("+", "", $q);
       if (stripos($q, '.com') == 0)
           echo '.com';
       ?>" target="_blank">
        <img src="http://en.webot.org/images/search2.png" width="50px"/> <?php echo $search ?>.com Rank
    </a><br/>

    <a rel="nofollow" href="http://openlinkprofiler.org/r/<?php
       echo str_replace("+", "", $q);
       if (stripos($q, '.com') == 0)
           echo '.com';
       ?>" target="_blank">
        <img src="http://en.webot.org/images/search2.png" width="50px"/> <?php echo $search ?>.com Backlinks
    </a><br/><br/>

    <?php
    if ($geo) {
        echo '<a href="http://earthspot.org/?q=' . $q . '"  target="_blank">
        <img src="http://en.webot.org/images/search2.png" width="50px"/> ' . $search . ' Location</a><br/>';
        echo '<a href="http://earthspot.org/real-estate/?q=' . $q . '"  target="_blank">
        <img src="http://en.webot.org/images/search2.png" width="50px"/> ' . $search . ' Real Estate</a><br/>';
    }
    ?>
    
</div><br/>


