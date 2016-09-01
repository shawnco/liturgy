<?php

/**
 * Psalmody at Compline
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class ComplinePsalms extends Element {
     protected $name = 'Psalmody';
     
     private $psalms = array('4', '91:1-8', '91:9-16');
     
     public function display(){
          $p = $this->psalms[floor(time() / 86400) % 3];
          
          $this->showName();
          echo '<iframe src="https://www.biblegateway.com/passage/?search=psalm ' . $p . '&version=ESV" width="80%" height="300px"></iframe><br />';
          $this->cecho('Glory be to the Father, and to the Son, and to the Holy Spirit, as it was in the beginning, is now and will be forever, amen.');          
     }
}

?>
