<?php

/**
 * Canticle Venite
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */

class Venite extends Element {
     protected $name = 'Venite';
     
     public function __construct(){
     }
     
     public function display(){
          $this->showName();
          $this->getAudio('matins', 'venite');
          $this->lecho('Blessed be God the Father, the Son, and the Holy Spirit.');
          $this->cecho('O come, let us worship him.');
          $this->lecho(
            'O come let us sing to the Lord<br />
            Let us make a joyful noise to the Rock of our salvation.<br />
            Let us come into His presence with thanksgiving;<br />
            Let us make a joyful noise to Him with songs of praise.<br /> <br />    
            For the Lord is a great God<br />
            And a great King above all gods.<br />
            The deep places of the Earth are in his hand<br />
            The strength of the hills is His also.<br /><br />
            The sea is His, for he made it<br />
            And His hand formed the dry land.<br />
            Oh, come let us worship and bow down;<br />
            Let us kneel before the Lord our maker.<br /><br />
            For He is our God<br />
            And we are the people of His pasture <br />
            And the sheep of His hand.<br /><br />
            Glory be to the Father and to the Son<br />
            And to the Holy Spirit<br />
            As it was in the beginning, is now,<br />
            And will be forever, amen.');
          $this->lecho('Blessed be God the Father, the Son, and the Holy Spirit.');
          $this->cecho('O come, let us worship him.');
     }
}

?>
