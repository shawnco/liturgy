<?php

/**
 * Office of Terce
 *
 * @author Shawn Contant
 */
class Terce extends Office {
     protected $name = 'Terce';
     
     public function __construct(){
          $this->elements = array(
              'DayVersicles',
              //'TercePsalms',
              //'TerceHymn',
              //'TerceReadings',
              //'TerceResponsory',
              'Kyrie',
              'LordsPrayer'
          );
     }
}

?>
