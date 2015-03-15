<?php

$pageTitle = "Sext";
$pageHead = "Sext";
require("/../template/template-top.php");
require("/../scripts/functions.php");
// Find today's day of the week.
$today = epochTime();
$season = getSeason($today);
$d = date("w");
$p = getSextPsalm($today);
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
  
  <iframe src="http://www.biblegateway.com/passage/?search=psalm+<?php echo $p; ?>&version=NASB" width="80%" height="300px"></iframe><br /><br />
  
  <?php
  if($d == "0") lecho("<b>Galatians 6:2:</b> Bear one another’s burdens, and thereby fulfill the law of Christ.");
  else lecho("<b>Romans 13:8:</b> Owe nothing to anyone except to love one another; for he who loves [a]his neighbor has fulfilled the law.");
  lecho("The Lord is my shepherd, I shall not want.");
  cecho("He makes me lie down in green pastures.");
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