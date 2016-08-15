<?php
/**
 * Morning Prayer, which overlaps quite a bit with Matins.
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class Morning extends Office {
     protected $name = 'Morning Prayer';
     protected $type = 'matins';
     
     public function __construct(){
          $this->elements = array(
              'DayVersicles',
              'MatinsPsalms',
//              'MatinsHymn',
              'MatinsReadings',
              'MatinsResponsory',
              'MatinsCanticle',
              'MatinsPrayers',
              'LordsPrayer'
          );
     }     
}

?>
