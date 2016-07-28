<?php

/**
 * Versicles for Vespers
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class VespersVersicles extends Element {
     protected $name = 'Versicles';
     private $responses = array(
          'lent' => 'Praise to you, O Christ, Lamb of our salvation.',
          'advent' => 'Praise to you, O Christ, King who comes to save us.',
          'other' => 'Praise to you, O Christ, alleluia.'
     );
     
     // Constructor
     public function __construct(){
          $this->office = 'Vespers';
          $this->season = $this->getSeason();
     }
     
     // Show the veriscles
     public function display(){
          $this->showName();
          $this->getAudio($this->office, 'versicles');
          
          $this->lecho('O Lord, open my lips.');
	$this->cecho('And my mouth will declare your praise.');
	$this->lecho('Make haste, O God, to deliver me.');
	$this->cecho('Make to help me O Lord. Glory be to the Father and to the Son, and to the Holy Spirit; as it was in the beginning, is now, and will be forever. Amen.');          
          if(in_array($this->season['seaon'], array('lent', 'advent'))){
               $this->cecho($this->responses[$this->season['season']]);
          }else{
               $this->cecho($this->responses['other']);
          }
     }
}

?>
