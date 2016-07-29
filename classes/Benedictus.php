<?php

/**
 * Canticle Benedictus
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class Benedictus extends Element {
     protected $name = 'Benedictus';
     
     public function __construct(){
          include('BenedictusAntiphon.php');
          $this->antiphon = new BenedictusAntiphon();
     }
     
     public function display(){
          $this->showName();
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
               To guarantee us that we<br /><br />
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
          $this->lecho($this->antiphon->display());
     }
}

?>
