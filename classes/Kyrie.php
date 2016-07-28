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
          $this->getAudio($this->office, 'kyrie');
          $this->cecho('Lord, have mercy. Christ, have mercy. Lord, have mercy.');
     }
}

?>
