<?php

/**
 * Algorithm for the psalmody at None
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class NonePsalms extends Element {
     protected $name = 'Psalmody';
     private $psalms = array(
         '121',
         '123',
         '125',
         '127',
         '129',
         '131',
         '132:9-16',
         '134'
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
