<?php

/**
 * Prayers at compline
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class ComplinePrayer extends Element {
     private $name = 'Prayers';
     
     public function __construct(){
          parent::__construct();
     }
     
     public function display(){
          $this->getAudio('compline','prayer');
          $this->lecho('Hear my prayer, O Lord');
          $this->cecho('Listen to my cry');
          $this->lecho('Keep me as the apple of your eye');
          $this->cecho('Hide me in the shadow of your wings');
          $this->lecho('In righteousness I shall see you');
          $this->cecho('When I awake, your presence will give me joy');
          
          $prayers = array(
              'SUN',
              'MON',
              'TUE',
              'WED',
              'THU',
              'FRI',
              'SAT'
          );
          
          $this->cecho($prayers[$this->season['day']]);
     }
}

?>
