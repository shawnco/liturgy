<?php

/**
 * Holder of both Matins canticles
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class MatinsCanticle extends Element {
     // Name is not defined until the display.
     protected $name;
     
     public function __construct(){
          include('MatinsCanticleAntiphon.php');
          $this->antiphon = new MatinsCanticleAntiphon();
          // Legibility is nice, but this makes me feel clever. I like to feel clever.
          $this->name = (floor(time() / 86400) % 2 === 0) ? 'Benedictus' : 'Te Deum';
     }
     
     public function display(){
          $this->showName();
          if($this->name === 'Benedictus'){
               $this->getAudio('matins', 'benedictus');
               $this->lecho($this->antiphon->display());
               $this->lecho(
                    'Blessed be the Lord God of Israel<br />
                    For he has visited and redeemed his people<br />
                    And has raised up a horn of salvation for us<br />
                    In the house of his servant David<br /><br />
                    As he spoke by the mouth of his holy prophets,<br />
                    Who have been since the world began<br />
                    That we should be saved from our enemies<br />
                    And from the hand of all who hate us<br /><br />
                    To perform the mercy promised to our fathers<br />
                    And to remember his holy covenant<br />
                    The oath that he swore to our father Abraham<br />
                    To grant us that we<br /><br />
                    Being delivered from the hand of our enemies<br />
                    Might serve him without fear<br />
                    In holiness and righteousness before him<br />
                    All the days of our life<br /><br />
                    And you, child, will be called the prophet of the Most High<br />
                    For you will go before the Lord to prepare his ways<br />
                    To give knowledge of salvation to his people<br />
                    In the forgiveness of their sins<br /><br />
                    Through the tender mercy of our God<br />
                    When the day shall dawn upon us from on high<br />
                    To give light to those who sit in darkness and in the shadow of death<br />
                    To guide our feet into the way of peace<br /><br />
                    Glory be to the Father and to the Son and to the Holy Spirit<br />
                    As it was in the beginning, is now, and will be forever. Amen.'
               );               
          }else{
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
                    You opened the kingdom of heaven to all believers<br /><br />
                    You sit at the right hand of God<br />
                    In the glory of the Father<br />
                    We believe that you will come<br />
                    To be our judge<br /><br />
                    We therefore pray you to help your servants<br />
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
          }
          $this->lecho($this->antiphon->display());
     }
}

?>
