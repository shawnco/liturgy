<?php

/**
 * The office of Matins 
 *
 * @author Shawn Contant
 */
class Matins extends Office {
     protected $name = 'Matins';
     
     public function __construct(){
          $this->elements = array(
              'DayVersicles',
              'Venite',
              'MatinsPsalms',
//              'MatinsHymn',
              'MatinsReadings',
              'MatinsResponsory',
              'MatinsCanticle',
              'Kyrie',
              'MatinsPrayers',
              'LordsPrayer'
          );
     }
}

?>
