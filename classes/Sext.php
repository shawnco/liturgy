<?php

/**
 * Office of Sext
 *
 * @author Shawn Contant
 */
class Sext extends Office {
     protected $name = 'Sext';
     protected $type = 'little-hours';
     
     public function __construct(){
          $this->elements = array(
              'DayVersicles',
              //'SextPsalms',
              //'SextHymn',
              'SextReadings',
              //'SextResponsory',
              'Kyrie',
              'LordsPrayer'
          );
     }
}

?>