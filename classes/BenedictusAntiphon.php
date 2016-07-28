<?php

/**
 * Cantcicles for the Benedictus
 *
 * @author Shawn Contant
 */
class BenedictusAntiphon extends Element {
     
     private $antiphons = array(
         
     );
     
     public function __construct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
          if($this->season['season'] === 'ordinary'){
               return $this->antiphons[date('M')][date('d')];
          }else{
               return $this->antiphons[$this->season['season']][$this->season['week']];
          }
     }
}

?>
