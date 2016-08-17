<?php

/**
 * Readings at None
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class NoneReadings extends Element {
     protected $name = 'Readings';
     
     private $readings = array(
         'advent' => array(
             array(
                 'Rom. 13:13-14',
                 'Rom. 15:13',
                 'Phil. 4:7',
                 '1 Cor. 4:5'
             ),
             'Isa. 14:1'
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
             '1 Co. 6:20',
             '1 Pet. 1:17b-19'
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
