<?php


/**
 * A description of the psalter used in this project.
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class Psalter {
     public function display(){
          ?>
<div class="office">
<p>A <b>psalter</b> is an arrangement of the psalms to be read according to a schedule. It lists what psalms are to be recited at what points during the day. Monks typically follow a psalter that recites all 150 psalms in one week or one month.</p>
<p>The psalter of this project is an amalgamation of different setups, along with a personal addition. The liturgy project is intended for people who don't have the time to read all 150 psalms in a week, or even a month. Instead it follows a system of psalms to be read on a rotating basis depending church season, day of week, or time of the day.</p>
<p>Here's a breakdown of how the psalter is devised.</p>
<p>Matins and Vespers are Major Hours, and both have two psalms. Terce, Sext, and None are the Little Hours, and have one psalm. Compline fits somewhat awkwardly into the Little Hour category, and has one psalm.</p>
<p>One of the psalms for Matins and both psalms for Vespers come from a table found in the <i>Lutheran Service Book</i>. This table shows psalms to read based upon church season and the day of the week.</p>
<p>Also for Matins, the LSB suggests reading part or all of Psalm 145 to Psalm 150 based on the day of the week. This becomes the second psalm for Matins.</p>
<p>Borrowing from the practice used at St. Augustine's Lutheran Monastery, Psalm 119 is said throughout the week at Terce. Psalm 119 is the longest psalm and chapter of the Bible. Each Terce has a segment of the psalm.</p>
<p>Psalms 120 through 134 are called the Song of Ascents, or Gradual Psalms. In the AD 500s, Saint Benedict wrote a rulebook for monastic life. In his Rule, he devised a system where many of the Gradual Psalms where read each day during Terce, Sext, and None. I have modified this. These psalms are grouped into pairs. The first member of the pair is said at Sext, the second at None. For example, Psalm 120 is recited at Sext, and Psalm 121 at None. The exception is Psalm 132. Since it is twice as long as any other psalm in the group, the first half is said at Sext, and the other half at None.</p>
<p>Compline cycles through Psalm 4 and the two halves of Psalm 91.</p>
</div>
          <?php
     }
}

?>
