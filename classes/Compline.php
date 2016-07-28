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
              new ComplineVersicles(),
              new Confession(),
              //new ComplinePsalms(),
              //new ComplineHymn(),
              new ComplineReadings(),
              new ComplineResponsory(),
              new ComplinePrayers(),
              new LordsPrayer($this->name),
              new NuncDimittis()
          );
     }
}

?>