<?php

/**
 * Readings at Terce
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class TerceReadings extends Element {
     protected $name = 'Readings';
     
     private $readings = array(
         'advent' => array(
             'Rom. 13:11',
             'Rom 15:4',
             'Phil. 4:4-5',
             '1 Co. 4:12'
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
             '1 John 4:16',
             'Jer. 17:14'
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
