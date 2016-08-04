<?php

/**
 * Antiphon for the Magnificat
 *
 * @author Shawn Contant
 */
class MagnificatAntiphon extends Element {
     
     private $antiphons = array(
         'advent' => array(
             'Behold the name of the Lord comes from afar, and the whole earth is full of his glory.'
         )
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
