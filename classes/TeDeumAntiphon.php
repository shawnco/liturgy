<?php
/**
 * Antiphon for the Te Deum
 *
 * @author Shawn Contant
 */
class TeDeumAntiphon extends Element {
     
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
