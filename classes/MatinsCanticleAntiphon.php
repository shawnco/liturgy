<?php

/**
 * Gets the antiphon for the Matins canticle
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class MatinsCanticleAntiphon extends Element {
     
     private $antiphons = array(
         'advent' => array(
             'The Holy Spirit will come upon you, O Mary; do not fear, you will bear in your womb the Son of God, alleluia.'
         )
     );
     
     public function __contruct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
     }
}

?>
