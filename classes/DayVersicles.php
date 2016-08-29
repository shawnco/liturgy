<?php

/**
 * The versicle format used at Matins, Terce, Sext, and None
 * @author Shawn Contant <shawnc366@gmail.com>
 */

class DayVersicles extends Element {
     protected $name = 'Versicles';
     private $responses = array(
         'lent' => 'Praise to You, O Christ, King who comes to save us.',
         'advent' => 'Praise to you, O Christ, Lamb of our salvation.',
         'other' => 'Praise to you, O Christ, alleluia.'
     );
     
     // Constructor
     public function __construct($type){
          $this->season = $this->getSeason();
          $this->type = $type;
     }
     
     // Show the veriscles
     public function display(){
          $this->showName();
          $this->getAudio($this->type, 'versicles');
          
          $this->lecho('O Lord, open my lips.');
	$this->cecho('And my mouth will declare your praise.');
          
          // For Matins I actually want to repeat that first line three times.
          if($this->type == 'matins'){
               $this->lecho('O Lord, open my lips.');
               $this->cecho('And my mouth will declare your praise.');
               $this->lecho('O Lord, open my lips.');
               $this->cecho('And my mouth will declare your praise.');          
          }
          
	$this->lecho('Make haste, O God, to deliver me.');
	$this->cecho('Make haste to help me O Lord. Glory be to the Father and to the Son, and to the Holy Spirit; as it was in the beginning, is now, and will be forever. Amen.');          
          if(in_array($this->season['seaon'], array('lent', 'advent'))){
               $this->cecho($this->responses[$this->season['season']]);
          }else{
               $this->cecho($this->responses['other']);
          }
     }
}
?>
