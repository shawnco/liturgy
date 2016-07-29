<?php

/**
 * Office of Vespers
 *
 * @author Shawn Contant
 */
class Vespers extends Office {
     protected $name = 'Vespers';
     
     public function __construct(){
          $this->elements = array(
              'VespersVersicles',
              //'VespersPsalms',
              //'VespersHymn',
              'VespersReadings',
              'VespersResponsory',
              'Magnificat',
              'Kyrie',
              'VespersPrayers',
              'LordsPrayer'
          );
     }
}

?>