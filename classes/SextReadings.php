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
             array(
                 'Rom. 3:12',
                 'Rom 15:5-6',
                 'Phil. 4:6',
                 '1 Cor. 4:3'
             ),
             'Jer. 23:6'
         ),
         'christmas' => array(
             array(
                 'Gal. 4:4-5',
                 'Phil. 2:10'
             ),
             'Heb. 1:10'
             
         ),
         'epiphany' => array(
             array(
                 '1 Cor. 9:25',
                 '2 Cor. 11:25',
                 '1 Cor. 13:8-9'
             ),
             'Isa. 60:4'
             
         ),
         'lent' => array(
             array(
                 '2 Cor. 6:2-3',
                 '1 Thess. 4:3-4',
                 'Eph. 5:5',
                 'Gal. 4:27',
                 'Heb. 9:13-14',
                 'Phil. 2:8-9'
             ),
             'Isa. 55:7'
         ),
         'easter' => array(
             array(
                 'Psalm 118:24'
             ),
             '1 Cor. 15:20-22'
             
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
