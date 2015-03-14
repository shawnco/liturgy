<?php

$pageTitle = "Terce";
$pageHead = "Terce";
require("/../template/template-top.php");
require("/../scripts/functions.php");
// Find today's day of the week.
$season = getSeasonNew();
$d = date("w");

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

<p><b>Psalm, Short Lesson, and Verse</b><br />
  <?php
  if($d == "0") $r = "1-32";
  else if($d == "1") $r = "33-56";
  else if($d == "2") $r = "57-80";
  else if($d == "3") $r = "81-104";
  else if($d == "4") $r = "105-128";
  else if($d == "5") $r = "129-152";
  else $r = "153-76";
  ?>
  <iframe src="https://www.biblegateway.com/passage/?search=psalm+119:<?php echo $r; ?>&version=NASB" width="80%" height="300px"></iframe><br /><br />

  <?php
  if($d == "0") lecho("<b>1 John 4:16:</b> We have come to know and have believed the love which God has for us. God is love, and the one who abides in love abides in God, and God abides in him.");
  else lecho("<b>Jeremiah 17:14:</b> Heal me, O Lord, and I will be healed; save me and I will be saved, for You are my praise.");
  lecho("You have been my helper, cast me not off.");
  cecho("Forsake me not, O God of my salvation!");
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

<p><i>If you are interested, you may read <a href="http://www.osb.org/rb/show.asp?mode=today">today's reading</a> from the Rule of Benedict.</i></p>
<?php disclaimer(); require("/../template/template-bottom.php"); ?>