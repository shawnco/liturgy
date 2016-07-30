<?php

/**
 * Readings for Matins
 *
 * @author Shawn Contant
 */
class MatinsReadings extends Element {
     protected $name = 'Reading';
     
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
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             'Acts 24:1-23',
             'Acts 24:24-25:12',
             'Acts 25:13-27'
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
               $reading = $this->readings[date('M')][date('d')];
          }else{
               $reading = $this->readings[$this->season['season']][$this->season['week']][$this->season['day']];
          }
          $this->showName();
          echo '<iframe src="https://www.biblegateway.com/passage/?search=' . $reading . '&verson=NASB" width="80%" height="300px"></iframe><br />';
     }
}

?>
