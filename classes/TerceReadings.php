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
             array(
               'Rom. 13:11',
               'Rom 15:4',
               'Phil. 4:4-5',
               '1 Co. 4:12'
             ),
             'Jer. 23:5'
         ),
         'christmas' => array(
             array(
                 'Gal. 4:1-2',
                 'Phil. 2:8-10'
             ),
             'Titus 2:11-12'
             
         ),
         'epiphany' => array(
             array(
                 '1 Cor. 9:24',
                 '2 Cor. 11:19-20',
                 '1 Cor. 13:1'
             ),
             'Isa. 60:1'
         ),
         'lent' => array(
             array(
                 '2 Cor. 6:1-2',
                 '1 Thess. 4:1',
                 'Eph. 5:1-2',
                 'Gal. 4:22-24',
                 'Heb. 9:11-12',
                 'Phil. 2:5-7'
             ),
             'Joel 2:12-13'
             
         ),
         'easter' => array(
             array(
                 'Psalm 118:24'
             ),
             'Rom. 6:9-10'
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
               if($this->season['day'] === 0){
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
