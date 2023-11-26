
<span style="font-size:12pt">
<?php //echo stripos($q, "stock") . "stock";
// ----------------------- .COM 
if (strrpos($q,".com") > 0 || strrpos($q,".org") > 0 || strrpos($q,".net") > 0) {
    //echo '<a href="http://m.webot.org/?search=' . $q . '"  target="_blank"><img src="../images/search.jpg" />' . $search . '</a>';
}
// ----------------------- .STOCK 
//if (stripos($q, "stock") > 0) {
    if (1) {
    echo '<h1>STOCK REPORT</h1>';
    
    echo '<br/><a href="http://www.wolframalpha.com/input/?i=' . $q . 
       '+earnings+per+share" target="_blank"><img src="../images/search.png" /> Earnings Per Share</a>';
    echo '<br/><a href="http://www.wolframalpha.com/input/?i=' . substr($q,0,stripos($q,'+')) . 
       '+earnings+per+share" target="_blank"><img src="../images/search.png" /> Earnings Per Share</a>';
       
    echo '<br/><br/><a href="http://www.nasdaq.com/symbol/' . substr($q,0,stripos($q,' ')) . 
       '" target="_blank"><img src="../images/search.png" /> Stock Quote</a>';
       
    echo '<br/><br/><a href="http://www.nasdaq.com/symbol/' . substr($q,0,stripos($q,' ')) . 
       '/revenue-eps" target="_blank"><img src="../images/search.png" /> Revenue</a>';
}
?>
</span><br/>