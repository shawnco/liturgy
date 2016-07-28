<?php

/**
 * Readings at Vespers
 *
 * @author Shawn Contant
 */
class VespersReadings extends Element {
     protected $name = 'Readings';
     
     // Massive freaking array of readings
     private $readings = array(
         'advent' => array(
             array(
                 ''
             )
         ),
         'christmas' => array(
             
         ),
         'epiphany' => array(
             
         ),
         'lent' => array(
             
         ),
         'easter' => array(
             
         ),
         'May' => array(
             
         ),
         'Jun' => array(
             
         ),
         'Jul' => array(
             
         ),
         'Aug' => array(
             
         ),
         'Sep' => array(
             
         ),
         'Oct' => array(
             
         ),
         'Nov' => array(
             
         )
     );
     
     public function __construct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
          if($this->season['season'] == 'ordinary'){
               // Probably incorrect
               $reading = $this->readings[$this->season[date('M')]][$this->season['day']];
          }else{
               $reading = $this->readings[$this->season['season']][$this->season['week']][$this->season['day']];
          }
          $this->showName();
          echo '<iframe src="https://www.biblegateway.com/passage/?search=' . $reading . '&verson=NASB" width="80%" height="300px"></iframe><br />';
     }
}

?>
