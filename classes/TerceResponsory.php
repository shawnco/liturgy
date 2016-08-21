<?php

/**
 * Responsory at Terce
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class TerceResponsory extends Element{
     protected $name = 'Responsory';
     
     private $responses = array(
         'advent',
         'christmas',
         'epiphany',
         'lent',
         'easter',
         'ordinary' => array(
               'You have been my helper, case me not off.',
               'Forsake me not, O God of my salvation!'
         )
     );
     
     public function __construct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
          $this->showName();
          if($this->season['season'] === 'ordinary'){
               $this->lecho($this->responses['ordinary'][0]);
               $this->cecho($this->responses['ordinary'][1]);
          }
     }
}

?>
