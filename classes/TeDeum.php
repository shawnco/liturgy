<?php

/**
 * Canticle Te Deum
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class TeDeum extends Element {
     protected $name = 'Te Deum';
     
     public function __construct(){
          include('TeDeumAntiphon.php');
          $this->antiphon = new TeDeumAntiphon();
     }
     
     public function display(){
          $this->showName();
          $this->getAudio('matins', 'te-deum');
          $this->lecho($this->antiphon->display());
          $this->lecho(
               'We praise you, O God; we acknowledge you to be the Lord<br />
               All the earth now worships you, the Father everlasting<br /> 
               To you all angels cry aloud, the heavens and all the powers therein<br />
               To you cherubim and seraphim continually do cry:<br /><br />
               Holy, holy, holy, Lord God of Sabaoth<br />
               heaven and earth are full of the majesty of your glory<br />
               The glorious company of the apostles praise you<br />
               The goodly fellowship of the prophets praise you<br /><br />
               The noble army of martyrs praise you<br />
               The holy Church throughout all the world does acknowledge you<br />
               The Father of an infinite majesty; your adorable, true, and only Son<br />
               also the Holy Ghost, the Comforter<br /><br />
               You are the king of glory, O Christ<br />
               You are the everlasting Son of the Father.<br /><br />
               When you took upon yourself to deliver man<br />
               You humbled yourself to be born of a virgin<br />
               When you had overcome the sharpness of death<br />
               You opened the kingdom of heaven to all believers<br />
               You sit at the right hand of God<br />
               In the glory of the Father<br />
               We believe that you will come<br />
               to be our judge<br /><br />
               Therefore we pray you to help your servants<br />
               Whom you have redeemed with your precious blood<br />
               Make them to be numbered with your saints<br />
               In glory everlasting<br /><br />
               O Lord, save your people and bless your heritage<br />
               Govern them and lift them up forever<br />
               Day by day we magnify you<br />
               And we worship your name forever and ever<br /><br />
               Grant, O Lord, to keep us this day without sin<br />
               O Lord, have mercy upon us, have mercy upon us<br />
               O Lord, let your mercy be upon us, as our trust is in you<br />
               O Lord, in you have I trusted; let me never be confounded.<br />'
          );
          $this->lecho($this->antiphon->display());
     }
}

?>
