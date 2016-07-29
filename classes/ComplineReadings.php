<?php

/**
 * Readings at Compline
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class ComplineReadings extends Element {
     protected $name = 'Readings';
     
     private $readings = array(
         'Rev. 22:4-5',
         '1 Thes. 5:9-10',
         '1 Pet. 5:8-9',
         'Eph. 4:26-27',
         '1 Thes. 5:23',
         'Jer. 14:9',
         'Deut. 6:4-7'
     );
     
     public function __construct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
          $reading = $this->readings[$this->season['day']];
          $this->showName();
          echo '<iframe src="https://www.biblegateway.com/passage/?search=' . $reading . '&verson=NASB" width="80%" height="300px"></iframe><br />';
     }
}

?>
