<?php

/**
 * Psalmody at Matins
 *
 * @author Shawn Contant
 */
class MatinsPsalms extends Element {
     protected $name = 'Psalmody';
     
     private $dailyPsalms = array(
         '150',
         '145',
         '146',
         '147:1-10',
         '147:11-20',
         '148',
         '149'
     );
     
     // This is used when I'm not doing the 'entire psalter' challenge.
     private $psalmTable = array(
         'lent' => array(
               '84',
               '119:73-80',
               '34',
               '5',
               '38',
               '22',
               '43',
          ),
         'easter' => array(
               '93',
               '97',
               '98',
               '99',
               '47',
               '96',
               '92'
         ),
         'gen1' => array(
             '103',
             '5',
             '42',
             '89',
             '87',
             '51',
             '104'
         ),
         'gen2' => array(
             '19',
             '136',
             '123',
             '15',
             '36',
             '130',
             '56'
         ),
         'gen3' => array(
             '67',
             '51',
             '54',
             '65',
             '143',
             '86',
             '122'
         ),
         'gen4' => array(
             '110',
             '62',
             '13',
             '96',
             '116',
             '85',
             '61'
         ),
         'advent' => array(
             '24',
             '122',
             '33',
             '50',
             '18:1-20',
             '102',
             '90'
         ) 
         // TODO: Account for Christmas
     );
     
     public function __construct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
          $this->showName();
          $daily = $this->dailyPsalms[$this->season['day']];
          
          if(in_array($this->season['season'], array('lent', 'easter', 'advent'))){
               $weekly = $this->psalmTable[$this->season['season']][$this->season['day']];
          }else{
               $weekly = $this->psalmTable['gen' . (1 + ($this->season['week'] % 4))][$this->season['day']];
          }
          
          echo '<iframe src="https://www.biblegateway.com/passage/?search=psalm ' . $daily . '; psalm ' . $weekly . '&version=ESV" width="80%" height="300px"></iframe><br />';
          $this->cecho('Glory be to the Father, and to the Son, and to the Holy Spirit, as it was in the beginning, is now and will be forever, amen.');          
     }
}

?>
