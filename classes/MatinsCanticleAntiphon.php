<?php

/**
 * Gets the antiphon for the Matins canticle
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class MatinsCanticleAntiphon extends Element {
     
     private $antiphons = array(
         'advent' => array(
             'The Holy Spirit will come upon you, O Mary; do not fear, you will bear in your womb the Son of God, alleluia.'
         ),
         'epiphany' => array(
             '',
             'And the third day there was a marriage in Cana of Galilee; and the mother of Jesus was there',
             'When Jesus came down from the mountain, a leper came to Him and bowed down before Him, and said, Lord, if You are willing, You can make me clean. Jesus stretched out His hand and touched him, saying, I am willing; be cleansed.',
             'When He got into the boat, behold, there arose a great storm on the sea, and they came to Him and woke Him, saying, Save us, Lord; we are perishing!',
             'Sir, did you not sow good seed in your field? How then does it have tares? And he said to them, An enemy has done this!'
         )
     );
     
     public function __construct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
         return $this->antiphons[$this->season['season']][$this->season['week']-1];
     }
}

?>
