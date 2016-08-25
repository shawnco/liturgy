<?php

/**
 * Algorithm for the psalmody at Sext
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class SextPsalms extends Element {
     protected $name = 'Psalmody';
     private $psalms = array(
         '120',
         '122',
         '124',
         '126',
         '128',
         '130',
         '132:1-8',
         '133'
     );
     
     public function __construct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
          $this->showName();
          // For now just manually enter the psalm...
          echo '<iframe src="https://www.biblegateway.com/passage/?search=psalm ' . $this->psalms[0] . '&version=ESV" width="80%" height="300px"></iframe><br />';
     }
}

?>
