<?php
$xml=("https://feeds.finance.yahoo.com/rss/2.0/headline?s=$search&region=US&lang=en-US");
$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

//get elements from "<channel>"
$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
$channel_title = $channel->getElementsByTagName('title')
->item(0)->childNodes->item(0)->nodeValue;
$channel_link = $channel->getElementsByTagName('link')
->item(0)->childNodes->item(0)->nodeValue;
$channel_desc = $channel->getElementsByTagName('description')
->item(0)->childNodes->item(0)->nodeValue;

//get and output "<item>" elements
$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=2; $i++) {
  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_desc=$x->item($i)->getElementsByTagName('description')
  ->item(0)->childNodes->item(0)->nodeValue;
  echo ("<p><a href='" . $item_link
  . "'>" . $item_title . "</a>");
  echo ("<br>");
  echo ($item_desc . "</p>");
}
?>

<iframe src="http://earthspot.org/">iframe</iframe>

<?php exit; ?>

http://en.webot.org/admin.php?search=Category:Architecture_of_Alabama

<div style="background:orange">
    <?php include 'getmedia.php'; ?>
</div>

<?php exit; ?>

<div style="font-size:1.2em">
    <?php if (1) include 'annotate-links2.php'; ?>
    <?php //include 'xref.php';  ?>
</div>

<?php exit; ?>

<div style="background:orange; padding:10px; min-height:50px">
    <?php if (1) include 'annotate-links1.php'; ?>
    <?php //include 'xref.php';  ?>
</div>

<?php //exit; ?>

<?php
if (stripos($x, '>Notable work<'))
    echo '.............';
?>

<div style="background:yellow; padding:10px">
    <?php
    if ($stock) {
        echo '<br/><hr/><a href="http://undervalued-stock.com/?search=' . "$q" . '" target="_blank"><span STYLE="color:blue; font-size:1.3em; font-weight:bold">' . "<p>$search ANNUAL REPORT</p>" . '</span></a><hr/>';
    }
    ?>
</div>