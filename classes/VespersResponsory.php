<?php

/**
 * Responsory for Vespers
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class VespersResponsory extends Element {
     protected $name = 'Responsory';
     private $responses = array(
          'advent' => array(
               'refrain' => 'This is the name by which He will be called: The Lord is Our Righteousness',
               'verse1' => 'Behold, the days are coming, say the Lord, when I will raise up for David a righteous Branch',
               'verse2' => 'In His days Judah will be saved, and Israel will dwell securely',
               'verse3' => 'Glory be to the Father and to the Son and to the Holy Spirit'
          ),
          'lent' => array(
               'refrain' => 'Rescue me from my enemies, protect me from those who rise against me',
               'verse1' => 'Deliver me, O Lord, my God, for You are the God of my salvation',
               'verse2' => 'In You, O Lord, do I put my trust, leave me not, O Lord, my God',
               'verse3' => 'Deliver me, O Lord, my God, for You are the God of my salvation'
          ),
          'other' => array(
               'refrain' => 'Your Word is a lamp to my feet and a light to my path.',
               'verse1' => 'Teach me Your way, O Lord, that I may walk in Your Truth',
               'verse2' => 'Unite my heart to fear Your name that I may walk in Your Truth',
               'verse3' => 'Glory be to the Father and to the Son and to the Holy Spirit'
          )
     );
     
     public function __construct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
          $this->showName();
          if(in_array($this->season['season'], array('lent', 'advent'))){
               $this->season['season'] = 'other';
          }
          $this->getAudio('vespers', 'responsory');
          $this->lecho($this->responses[$this->season['season']]['verse1']);
          $this->cecho($this->responses[$this->season['season']]['refrain']);
          $this->lecho($this->responses[$this->season['season']]['verse2']);
          $this->cecho($this->responses[$this->season['season']]['refrain']);
          $this->lecho($this->responses[$this->season['season']]['verse3']);
          $this->cecho($this->responses[$this->season['season']]['refrain']);
     }
}

?>
