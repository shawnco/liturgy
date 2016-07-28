<?php

/**
 * Readings at Compline
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class ComplineReadings extends Element {
     protected $name = 'Readings';
     
     private $readings = array(
         'SUN',
         'MON',
         'TUE',
         'WED',
         'THU',
         'FRI',
         'SAT'
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
