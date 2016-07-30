<?php

/**
 * Readings at Sext
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class SextReadings extends Element {
     protected $name = 'Readings';
     
     private $readings = array(
         'advent' => array(
         ),
         'christmas' => array(
             
         ),
         'epiphany' => array(
             
         ),
         'lent' => array(
             
         ),
         'easter' => array(
             
         ),
         'ordinary' => array(
             'Gal. 6:2',
             'Rom. 13:8'
         )
     );
     
     public function __construct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
          $this->showName();
          if($this->season['season'] === 'ordinary'){
               if(date('d') === 0){
                    $reading = $this->readings['ordinary'][0];
               }else{
                    $reading = $this->readings['ordinary'][1];
               }
          }else{
               $reading = $this->readings[$this->season['season']][$this->season['week']];
          }
          echo '<iframe src="https://www.biblegateway.com/passage/?search=' . $reading . '&verson=NASB" width="80%" height="300px"></iframe><br />';
     }
}

?>
