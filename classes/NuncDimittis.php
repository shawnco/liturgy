<?php

/**
 * Canticle Nunc Dimittis
 *
 * @author Shawn Contant
 */
class NuncDimittis extends Element {
     private $name = 'Nunc Dimittis';
     
     public function __construct(){
          parent::__construct();
     }
     
     public function display(){
          $this->showName();
          $this->getAudio('compline', 'nunc-dimittis-benediction');
          $this->lecho('Guide us waking, O Lord, and guard us sleeping that awake we may watch with Christ and asleep  we may rest in peace');
          $this->cecho('Lord, now you let your servant go in peace; your word has been fulfilled. My own eyes have seen the salvation which you have prepared in the sight of every people: a light to reveal you to the nations and the glory of your people Israel. Glory be to the Father and to the Son and to the Holy Spirit; as it was in the beginning, is now, and will be forever. Amen. Guide us waking, O Lord, and guard us sleeping that awake we may watch with Christ and asleep we may rest in peace.');
     }
}

?>
