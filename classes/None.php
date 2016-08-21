<?php

/**
 * Office of None
 *
 * @author Shawn Contant
 */
class None extends Office {
     protected $name = 'None';
     protected $type = 'little-hours';
     
     public function __construct(){
          $this->elements = array(
              'DayVersicles',
//              'NonePsalms',
//              'NoneHymn',
              'NoneReadings',
              'NoneResponsory',
              'Kyrie',
              'LordsPrayer'
          );
     }
}

?>