<?php

/**
 * The Kyrie
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class Kyrie extends Element{
     protected $name = 'Kyrie';
     
     public function __construct($office){
          $this->office = $office;
     }
     
     public function display(){
          $this->showName();
          if(in_array($this->office, array('Terce', 'Sext', 'None'))){
               $this->office = 'little-hours';
          }
          $this->getAudio($this->office, 'kyrie');
          $this->cecho('Lord, have mercy. Christ, have mercy. Lord, have mercy.');
     }
}

?>
