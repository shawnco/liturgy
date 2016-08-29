<?php

/**
 * Algorithm for the psalmody at Sext
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class SextPsalms extends Element {
     protected $name = 'Psalmody';
     private $psalms = array(
         array(120, 121),
         array(122, 123),
         array(124, 125),
         array(126, 127),
         array(128, 129),
         array(130, 131),
         array('132:1-9', '132:10-18'),
         array(133, 134)
     );
     
     public function __construct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
          $this->showName();
          $index = math.floor(time()/85400) % 7;
          if($this->season['day'] === 2 || $this->season['day'] === 4){
          echo '<iframe src="https://www.biblegateway.com/passage/?search=psalm ' . $this->psalms[$index][0] . '-' . $this->psalms[$index][1] . '&version=ESV" width="80%" height="300px"></iframe><br />';              
          }else{
              echo '<iframe src="https://www.biblegateway.com/passage/?search=psalm ' . $this->psalms[$index][0] . '&version=ESV" width="80%" height="300px"></iframe><br />';           
          }
     }
}

?>
