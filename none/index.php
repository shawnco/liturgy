<?php

$pageTitle = "None";
$pageHead = "None";
require("/../template/template-top.php");
require("/../scripts/functions.php");
// Find today's day of the week.
$season = getSeasonNew();
$d = date("w");
$days = epochTime();

?>


<p><b>Versicles</b><br />
  <?php
  lecho("O Lord, open my lips.");
  cecho("And my mouth will declare your praise.");
  lecho("Make haste, O God, to deliver me.");
  cecho("Make haste to help me, O Lord. Glory be to the Father and to the Son, and to the Holy Spirit; as it was in the beginning, is now, and will be forever. Amen.");
  if($season != "lent")
    cecho("Allelulia");
  ?>
</p>

<p><b>Psalm, Short Lesson, and Verse</b><br />
  <?php
  if($days % 8 == 0) $p = "121";
  else if($days % 8 == 1) $p = "123";
  else if($days % 8 == 2) $p = "125";
  else if($days % 8 == 3) $p = "127";
  else if($days % 8 == 4) $p = "129";
  else if($days % 8 == 5) $p = "131";
  else if($days % 8 == 6) $p = "132:10-18";
  else $p = "134";
  ?>
  
  <iframe src="http://www.biblegateway.com/passage/?search=psalm+<?php echo $p; ?>&version=NASB" width="80%" height="300px"></iframe><br /><br />

  <?php
  if($d == "0") lecho("<b>1 Corinthians 6:20:</b> For you have been bought with a price: therefore glorify God in your body.");
  else lecho("<b>1 Peter 1:17b-19:</b> Conduct yourselves in fear during the time of your stay on earth; knowing that you were not redeemed with perishable things like silver or gold from your futile way of life inherited from your forefathers, but with precious blood, as of a lamb unblemished and spotless, the blood of Christ.");
  lecho("Cleanse me from hidden faults.");
  cecho("Keep back your servant also from presumptuous sins.");
  ?>
</p>

<p><b>Kyrie</b><br />
  <?php
  audio("little-hours","kyrie");
  cecho("Lord, have mercy. Christ, have mercy. Lord, have mercy.");
  ?>
</p>

<p><b>Lord's Prayer</b><br />
  <i>All is said silently except "For the kingdom..."</i><br />
  <?php
  cecho("Our Father in heaven, hollowed be your name. Your kingdom come, your will be done on Earth as it is in heaven. Give us today our daily bread. Forgive our sins, as we forgive those who sin against us. Lead us not into temptation, but deliver us from evil. For the kingdom, the power, and the glory are yours now and forever. Amen.");
  ?>
</p>
<?php disclaimer(); require("/../template/template-bottom.php"); ?>