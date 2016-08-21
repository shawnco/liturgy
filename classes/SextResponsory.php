<?php

/**
 * Responsory at Sext
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class SextResponsory extends Element{
     protected $name = 'Responsory';
     
     private $responses = array(
         'advent',
         'christmas',
         'epiphany',
         'lent',
         'easter',
         'ordinary' => array(
               'The Lord is my shepherd, I shall not want.',
               'He makes me lie down in green pastures.'
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
