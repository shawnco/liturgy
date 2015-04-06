<?php $url = "http://" . $_SERVER["HTTP_HOST"]; $pageHead = "About the Psalter"; $pageTitle = "About the Psalter"; require("../template/template-top.php");

require("../scripts/functions.php");
$day = epochTime();
$dow = dayOfWeek();
$season = getSeason($day);
$psalmPairs = array(
  array("120", "121"),
  array("122", "123"),
  array("124", "125"),
  array("126", "127"),
  array("128", "129"),
  array("130", "131"),
  array("132:1-9", "132:10-18"),
  array("133", "134")
);

function checkDOW($dow, $d){
  if($dow == $d){
    ?> id="today"<?php
  }
}

 ?> 
<p>A <b>psalter</b> is an arrangement of the psalms to be read according to a schedule. It lists what psalms are to be recited at what points during the day. Monks typically follow a psalter that recites all 150 psalms in one week or one month.</p>
<p>The psalter of this project is an amalgation of different setups, along with a personal addition. The PLG is intended for people who don't have the time to read all 150 psalms in a week, or even a month. Instead it follows a system of psalms to be read on a rotating basis depending church season, day of week, or time of the day.</p>
<p>Here's a breakdown of how the psalter is devised.</p>
<p>Matins and Vespers are Major Hours, and both have two psalms. Terce, Sext, and None are the Little Hours, and have one psalm. Compline doesn't seem to belong in either category, but has one psalm.</p>
<p>One of the psalms for Matins and both psalms for Vespers come from a table found in the <i>Lutheran Service</i> book. This table shows psalms to read based upon church season and the day of the week.</p>
<p>Also for Matins, the LSB suggests reading part or all of Psalm 145 to Psalm 150 based on the day of the week. This becomes the second psalm for Matins.</p>
<p>Borrowing from the practice used at St. Augustine's Lutheran Monastery, Psalm 119 is said throughout the week at Terce. Psalm 119 is the longest psalm and chapter of the Bible. Each Terce has a segment of the psalm.</p>
<p>Psalms 120 through 134 are called the Song of Ascents, or Gradual Psalms. These psalms had a special usage in ancient Jewish custom. In the AD 500s, Saint Benedict wrote a rulebook for monastic life. In his Rule, he devised a system where many of the Gradual Psalms where read each day during Terce, Sext, and None. I have modified this. These psalms are grouped into pairs. The first member of the pair is said at Sext, the second at None. For example, Psalm 120 is recited at Sext, and Psalm 121 at None. The exception is Psalm 132. Since it is twice as long as any other psalm in the group, the first half is said at Sext, and the other half at None.</p>
<p>Compline is unique among the divine offices in that it has the same psalm, Psalm 4, repeated each night.</p>
<p>Psalms for the week:</p>
<table border="1">
  <tr>
    <th>&nbsp;</th>
    <th <?php checkDOW($dow, 0); ?>>Sunday</th>
    <th <?php checkDOW($dow, 1); ?>>Monday</th>
    <th <?php checkDOW($dow, 2); ?>>Tuesday</th>
    <th <?php checkDOW($dow, 3); ?>>Wednesday</th>
    <th <?php checkDOW($dow, 4); ?>>Thursday</th>
    <th <?php checkDOW($dow, 5); ?>>Friday</th>
    <th <?php checkDOW($dow, 6); ?>>Saturday</th>
  </tr>
  <tr>
    <td>Matins</td>
    <td><?php echo $psalmTable[$season][0]["morning"]; ?><br />150</td>
    <td><?php echo $psalmTable[$season][1]["morning"]; ?><br />145</td>
    <td><?php echo $psalmTable[$season][2]["morning"]; ?><br />146</td>
    <td><?php echo $psalmTable[$season][3]["morning"]; ?><br />147:1-11</td>
    <td><?php echo $psalmTable[$season][4]["morning"]; ?><br />147:12-20</td>
    <td><?php echo $psalmTable[$season][5]["morning"]; ?><br />148</td>
    <td><?php echo $psalmTable[$season][6]["morning"]; ?><br />149</td>
  </tr>        
  <tr>
    <td>Terce</td>
    <td>119:1-32</td>
    <td>119:33-56</td>
    <td>119:57-80</td>
    <td>119:81-104</td>
    <td>119:105-128</td>
    <td>119:129-152</td>
    <td>119:153-176</td>
  </tr> 
  <tr>
    <td>Sext</td>
    <td><?php echo $psalmPairs[(($day % 8) - $dow) % 8][0]; ?></td>
    <td><?php echo $psalmPairs[(($day % 8) - $dow + 1) % 8][0]; ?> </td>
    <td><?php echo $psalmPairs[(($day % 8) - $dow + 2) % 8][0]; ?> </td>
    <td><?php echo $psalmPairs[(($day % 8) - $dow + 3) % 8][0]; ?> </td>
    <td><?php echo $psalmPairs[(($day % 8) - $dow + 4) % 8][0]; ?> </td>
    <td><?php echo $psalmPairs[(($day % 8) - $dow + 5) % 8][0]; ?> </td>
    <td><?php echo $psalmPairs[(($day % 8) - $dow + 6) % 8][0]; ?> </td>
  </tr> 
  <tr>
    <td>None</td>
    <td><?php echo $psalmPairs[(($day % 8) - $dow) % 8][1]; ?></td>
    <td><?php echo $psalmPairs[(($day % 8) - $dow + 1) % 8][1]; ?> </td>
    <td><?php echo $psalmPairs[(($day % 8) - $dow + 2) % 8][1]; ?> </td>
    <td><?php echo $psalmPairs[(($day % 8) - $dow + 3) % 8][1]; ?> </td>
    <td><?php echo $psalmPairs[(($day % 8) - $dow + 4) % 8][1]; ?> </td>
    <td><?php echo $psalmPairs[(($day % 8) - $dow + 5) % 8][1]; ?> </td>
    <td><?php echo $psalmPairs[(($day % 8) - $dow + 6) % 8][1]; ?> </td>
  </tr> 
  <tr>
    <td>Vespers</td>
    <td><?php echo $psalmTable[$season][0]["evening"][0] . "<br />" . $psalmTable[$season][0]["evening"][1];?></td>
    <td><?php echo $psalmTable[$season][1]["evening"][0] . "<br />" . $psalmTable[$season][1]["evening"][1];?> </td>
    <td><?php echo $psalmTable[$season][2]["evening"][0] . "<br />" . $psalmTable[$season][2]["evening"][1];?> </td>
    <td><?php echo $psalmTable[$season][3]["evening"][0] . "<br />" . $psalmTable[$season][3]["evening"][1];?> </td>
    <td><?php echo $psalmTable[$season][4]["evening"][0] . "<br />" . $psalmTable[$season][4]["evening"][1];?> </td>
    <td><?php echo $psalmTable[$season][5]["evening"][0] . "<br />" . $psalmTable[$season][5]["evening"][1];?> </td>
    <td><?php echo $psalmTable[$season][6]["evening"][0] . "<br />" . $psalmTable[$season][6]["evening"][1];?> </td>
  </tr> 
  <tr>
    <td>Compline</td>
    <td>4</td>
    <td>4</td>
    <td>4</td>
    <td>4</td>
    <td>4</td>
    <td>4</td>
    <td>4</td>
  </tr>
</table>
<?php require("../template/template-bottom.php"); ?>