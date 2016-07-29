<?php

/**
 * Responsory at Compline
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class ComplineResponsory extends Element {
     protected $name = 'Responsory';
          
     // Compline responsory is so basic there's little need to complicate things.
     public function display(){
          $this->showName();
          $this->getAudio('compline', 'responsory');
          
          $this->lecho('Into your hands, O Lord, I commend my spirit.');
          $this->cecho('Into your hands, I commend my spirit.');
          $this->lecho('You have redeemed me, O Lord, God of truth.');
          $this->cecho('Into your hands, I commend my spirit.');
          $this->lecho('Glory be to the Father and to the Son and to the Holy Spirit.');
          $this->cecho('Into your hands, I commend my spirit.');
     }
}

?>
