<?php

/**
 * Gets the antiphon for the Matins canticle
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class MatinsCanticleAntiphon extends Element {
     
     private $antiphons = array();
     
     public function __contruct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
     }
}

?>
