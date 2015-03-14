<?php $pageHead = "Index"; $pageTitle = "Personal Liturgy Generator"; require("template/template-top.php"); ?>
<p>The Personal Liturgy Generator project is an adaptation of the liturgy of the hours found in traditional branches of Christianity, such as Catholicism and Lutheranism. The goal of the project is to create easy to follow services for six of the divine offices, to be prayed at three hour intervals during the day. The hours are:</b>

<!-- I think a lot of people would frown at me for doing this, since it's technically an improper use of a table. But it's a lot easier than playing with divs or lists. -->
<table>
  <tr>
    <td><a href="matins/">Matins</a><br />Morning</td>
    <td><a href="terce/">Terce</a><br />Mid-Morning</td>
    <td><a href="sext/">Sext</a><br />Noon</td>
  </tr>
  <tr>
    <td><a href="none/">None</a><br />Mid-Afternoon</td>
    <td><a href="vespers/">Vespers</a><br />Evening</td>
    <td><a href="compline/">Compline</a><br />Night</td>
  </tr>
</table>



<p>This project tries to stick closely to the format of these hours as found in the <i>Lutheran Service Book</i> for Matins, Vespers, and Compline. Since Terce, Sext, and None aren't listed in the LSB, it uses the format used at the <a href="http://www.staugustineshouse.org/">St. Augustine's House</a> Lutheran monastery.</p>
<p>One of the intents of the project is to add variety where permitted. For example, there are three styles the Lord's Prayer may be said on a given day. For New Testament readings, two verses from a preset list are chosen, in such a manner that the same pair won't be picked again until every other possible pair has been selected. This gives each office a fresh feel, and also gives the most opportunities for the reader to make connections between verses that weren't seen before.</p>
<p>In particular, Vespers is designed to have no preset New Testament reading for the day. This makes it a good office for one's daily devotional. Simply type in the verses to be read and at the appropriate point, read from the devotional. The reader can also include personal prayers in place of the devotional prayer. If you are in need of a devotional, I would suggest the <a href="http://www.lhm.org/dailydevotions.asp">Lutheran Hour Ministries</a> daily devotional.</p>
<p>Also note the offices do not currently include hymns. I may add those later, with MIDI tracks to sing along to.</p>
<p>This liturgy uses a personalized <a href="psalter/">psalter</a>, which you can read about to learn more.</p>
<?php require("template/template-bottom.php");