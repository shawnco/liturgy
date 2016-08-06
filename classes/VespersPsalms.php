<?php

/**
 * Psalmody at Vespers
 *
 * @author Shawn Contant
 */
class VespersPsalms extends Element {
     protected $name = 'Psalmody';
     
     
     // This is used when I'm not doing the 'entire psalter' challenge.
     private $psalmTable = array(
         'lent' => array(
               '42;32',
               '121;6',
               '25;91',
               '27;51',
               '126;102',
               '107;130',
               '31;143',
          ),
         'easter' => array(
               '136;117',
               '124;115',
               '66;116',
               '8;118',
               '68;138',
               '50;138',
               '23;114'
         ),
         'gen1' => array(
             '117;139',
             '84;29',
             '102;133',
             '1;33',
             '16;62',
             '142;65',
             '118;111'
         ),
         'gen2' => array(
             '81;113',
             '97;112',
             '30;86',
             '48;4',
             '80;27',
             '32;139',
             '100;62'
         ),
         'gen3' => array(
             '46;93',
             '85;47',
             '28;99',
             '125;91',
             '81;116',
             '6;19',
             '141;90'
         ),
         'gen4' => array(
             '66;23',
             '73;8',
             '36;5',
             '132;134',
             '26;130',
             '25;40',
             '138;98'
         ),
         'advent' => array(
             '25;110',
             '40;67',
             '85;91',
             '14;16',
             '126;62',
             '130;16',
             '80;72'
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
               $weekly = $this->psalmTable['gen' . (($this->season['week'] % 4) + 1)][$this->season['day']];
          }
          $psalms = explode(';', $weekly);
          
          echo '<iframe src="https://www.biblegateway.com/passage/?search=psalm ' . $psalms[0] . '; psalm ' . $psalms[1] . '&version=ESV" width="80%" height="300px"></iframe><br />';
     }
}

?>