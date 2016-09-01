<?php

/**
 * Algorithm for the psalmody at None
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class NonePsalms extends Element {
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
          $index = floor(time()/86400) % 7;
          if($this->season['day'] === 2 || $this->season['day'] === 4){
            echo '<iframe src="https://www.biblegateway.com/passage/?search=psalm ' . $this->psalms[$index][0] . '; psalm ' . $this->psalms[$index][1] . '&version=ESV" width="80%" height="300px"></iframe><br />';              
          }else{
              echo '<iframe src="https://www.biblegateway.com/passage/?search=psalm ' . $this->psalms[$index][1] . '&version=ESV" width="80%" height="300px"></iframe><br />';           
          }
          $this->cecho('Glory be to the Father, and to the Son, and to the Holy Spirit, as it was in the beginning, is now and will be forever, amen.');          
     }
}

?>
