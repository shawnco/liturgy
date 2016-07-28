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
              new VespersVersicles(),
              //new VespersPsalms(),
              //new VespersHymn(),
              new VespersReadings(),
              new VespersResponsory(),
              new Magnificat(),
              new Kyrie($this->name),
              new VespersPrayers(),
              new LordsPrayer($this->name)
          );
     }
}

?>