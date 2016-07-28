<?php

/**
 * General elements of an Office
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class Office{
     protected $name;
     protected $elements;
     
     public function display(){
          foreach($this->elements as $e){
               include('classes/' . $e . '.php');
               $el = new $e($this->name);
               $el->display();
          }
     }
}

?>
