<?php
    if ($parsetype == 'definition' && $search != "") {
        echo "<em><center>Definitions and Pronunciations</center></em><br/>";        
        echo '<br/><br/><a rel="nofollow" href="http://dictionary.cambridge.org/us/pronunciation/english/'.$q.'#translations_box" target="_blank"><span style="font-size:2.0em; color:black">'
            . $search . ' Pronunciation</span> in <em>US/UK English</em></a>';
        echo '<br/><br/><a rel="nofollow" href="http://www.collinsdictionary.com/dictionary/english/'.$q.'#translations_box" target="_blank"><span style="font-size:2.0em; color:black">'
            . $search . ' Pronunciation</span> in <em>Foreign Languages</em></a>';
            
        echo '<br/><br/>';
        include 'core/getwiktionary.php';
    }
?>