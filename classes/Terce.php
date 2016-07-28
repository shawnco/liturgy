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
              new DayVersicles($this->name),
              //new TercePsalms(),
              //new TerceHymn(),
              new TerceReadings(),
              //new TerceResponsory(),
              new Kyrie($this->name),
              new LordsPrayer($this->name)
          );
     }
}

?>
