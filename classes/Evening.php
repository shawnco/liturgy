<?php

/**
 * Evening prayer, which overlaps quite a bit with Vespers.
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class Evening extends Office {
     protected $name = 'Evening Prayer';
     protected $type = 'vespers';
     
     public function __construct(){
          $this->elements = array(
              'VespersVersicles',
              'VespersPsalms',
              //'VespersHymn',
              'VespersReadings',
              'VespersResponsory',
              'Magnificat',
              'VespersPrayers',
              'LordsPrayer'
          );
     }     
}

?>
