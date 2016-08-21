<?php

/**
 * The Kyrie
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class Kyrie extends Element{
     protected $name = 'Kyrie';
     
     public function __construct($type){
          $this->type = $type;
     }
     
     public function display(){
          $this->showName();
          $this->getAudio($this->type, 'kyrie');
          $this->cecho('Lord, have mercy. Christ, have mercy. Lord, have mercy.');
     }
}

?>
