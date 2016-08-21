<?php

/**
 * Responsory at None
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class NoneResponsory extends Element{
     protected $name = 'Responsory';
     
     private $responses = array(
         'advent',
         'christmas',
         'epiphany',
         'lent',
         'easter',
         'ordinary' => array(
               'Cleanse me from hidden faults.',
               'Keep back your servant also from presumptuous sins.'
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
