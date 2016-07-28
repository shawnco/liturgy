<?php

/**
 * Office of Sext
 *
 * @author Shawn Contant
 */
class Sext extends Office {
     protected $name = 'Sext';
     
     public function __construct(){
          $this->elements = array(
              new DayVersicles($this->name),
              //new SextPsalms(),
              //new SextHymn(),
              new SextReadings(),
              //new SextResponsory(),
              new Kyrie($this->name),
              new LordsPrayer($this->name)
          );
     }
}

?>