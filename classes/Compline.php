<?php

/**
 * Office of Compline
 *
 * @author Shawn Contant
 */
class Compline extends Office {
     protected $name = 'Compline';
     
     public function __construct(){
          $this->elements = array(
              'ComplineVersicles',
              'Confession',
              //'ComplinePsalms',
              //'ComplineHymn',
              'ComplineReadings',
              'ComplineResponsory',
              'ComplinePrayer',
              'LordsPrayer',
              'NuncDimittis'
          );
     }
}

?>