<?php

/**
 * Versicles for Compline
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class ComplineVersicles extends Element {
     protected $name = 'Versicles';
     
     // Constructor
     public function __construct(){
          $this->type = 'Compline';
     }
     
     // Show the veriscles
     public function display(){
          $this->showName();
          $this->getAudio($this->type, 'versicles');
          
          $this->lecho('The Lord Almighty grant us a quiet night and peace at the last.');
          $this->cecho('Amen.');
          $this->lecho('It is good to give thanks to the Lord.');
          $this->cecho('To sing praise to your name, O Most High.');
          $this->lecho('To herald your love in the morning.');
          $this->cecho('Your truth at the close of the day.');          
     }
}

?>
