<?php

/**
 * Night prayer, which is mostly synonymous with Compline.
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class Night extends Office{
     protected $name = 'Night Prayer';
     
     public function __construct(){
          $this->elements = array(
              'ComplineVersicles',
              'Confession',
              'ComplinePsalms',
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
