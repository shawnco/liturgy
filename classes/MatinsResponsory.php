<?php

/**
 * Responsories used for Matins
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class MatinsResponsory extends Element {
     protected $name = 'Responsory';
     private $responses = array(
          'easter' => array(
               'refrain' => 'Give to the Lord all glory and strength, give him the honor due his name. Alleluia, alleluia.',
               'verse1' => 'Sing to the Lord and bless his name, proclaim his salvation from day to day.',
               'verse2' => 'Now is Christ risen from the dead and become the firstfruits of them that sleep.',
               'verse3' => 'Glory be to the Father and to the Son and to the Holy Spirit.'
          ),
          'lent' => array(
               'refrain' => 'He was delivered up to death. He was delivered for the sins of the people.',
               'verse1' => 'We have an advocate with the Father; Jesus is the propitiation for our sins.',
               'verse2' => 'Blessed is he whose transgression is forgiven and whose sin is put away.',
               'verse3' => 'We have an advocate with the Father; Jesus is the propitiation for our sins.'
          ),
          'other' => array(
               'refrain' => 'Lord, I love the habitation of your house and the place where your glory dwells.',
               'verse1' => 'Forever, O Lord, your word is firmly set in the heavens.',
               'verse2' => 'Blessed are those who hear the Word of God and keep it.',
               'verse3' => 'Glory be to the Father and to the Son and to the Holy Spirit.'
          )
     );
     
     public function __construct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
          $this->showName();
          if(!in_array($this->season['season'], array('lent', 'advent'))){
               $this->season['season'] = 'other';
          }
          $this->getAudio('matins', 'responsory');
          $this->lecho($this->responses[$this->season['season']]['verse1']);
          $this->cecho($this->responses[$this->season['season']]['refrain']);
          $this->lecho($this->responses[$this->season['season']]['verse2']);
          $this->cecho($this->responses[$this->season['season']]['refrain']);
          $this->lecho($this->responses[$this->season['season']]['verse3']);
          $this->cecho($this->responses[$this->season['season']]['refrain']);
     }
}

?>
