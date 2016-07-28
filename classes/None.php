<?php

/**
 * Office of None
 *
 * @author Shawn Contant
 */
class None extends Office {
     protected $name = 'None';
     
     public function __construct(){
          $this->elements = array(
              new DayVersicles($this->name),
              //new NonePsalms(),
              //new NoneHymn(),
              new NoneReadings(),
              //new NoneResponsory(),
              new Kyrie($this->name),
              new LordsPrayer($this->name)
          );
     }
}

?>