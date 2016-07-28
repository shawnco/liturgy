<?php

/**
 * Canticle Magnificat
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */

class Magnificat extends Element {
     protected $name = 'Magnificat';
     
     public function __construct(){
          $this->antiphon = new MagnificatAntiphon();
     }
     
     public function display(){
          $this->showName();
          $this->getAudio('vespers', 'magnificat');
          $this->lecho($this->antiphon->display());
          // TODO: Not include the standard antiphon unless one is not found.
          //$this->lecho('Let my prayer rise before you as incense.');
          //$this->cecho('And the lifting up of my hands at the evening sacrifice');
          $this->cecho('My soul magnifies the Lord, and my spirit rejoices in God, my Savior');
          $this->lecho('For He has regarded the lowliness of his hand-maiden');
          $this->cecho('For behold, from this day all generations will call me blessed');
          $this->lecho('For the Mighty One has done great things to me, and holy is his name');
          $this->cecho('And his mercy is on those who fear him from generation to generation');
          $this->lecho('He has shown strength with his arm; he has scattered the proud in the imagination of their hearts');
          $this->cecho('He has cast down the mighty from their thrones and has exalted the lowly');
          $this->lecho('He has filled the hungry with good things, and the rich he has sent empty away');
          $this->cecho('He has helped his servant Israel in remembrance of his mercy as he spoke to our fathers, to Abraham and to his seed forever');
          $this->cecho('Glory be to the Father and to the Son and to the Holy Spirit; as it was in the beginning, is now and will be forever. Amen.');     
          $this->lecho($this->antiphon->display());          
     }
}

?>
