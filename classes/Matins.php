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
              new DayVersicles($this->name),
              new Venite(),
              //new MatinsPsalms(),
              //new MatinsHymn(),
              new MatinsReadings(),
              new MatinsResponsory(),
              new Benedictus(),
              new Kyrie($this->name),
              new MatinsPrayers(),
              new LordsPrayer($this->name)
          );
     }
}

?>
