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
             array(
                 'Gal. 4:7',
                 'Col. 3:17'
             ),
             'Heb. 1:11-12'
             
         ),
         'epiphany' => array(
             // first seven follow the ordinary of epiphany
             array(
                 '1 Cor. 10:4-5',
                 '2 Cor. 12:9',
                 '1 Cor. 13:13'
             ),
             'Isa. 60:6'
         ),
         'lent' => array(
             array(
                 '2 Cor. 6:9-10',
                 '1 Thess. 4:7',
                 'Eph. 5:8-9',
                 'Gal. 4:31',
                 'Heb. 9:15',
                 'Phil. 2:10-11'
             ),
             'Isa. 58:7'
         ),
         'easter' => array(
             array(
                 'Psalm 118:24',
             ),
             '1 Peter 3:18'
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
