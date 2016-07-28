<?php
/**
 * Prayers at Vespers
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class VespersPrayers extends Element {
     private $name = 'Prayers';
     
     public function __construct(){
          parent::__construct();
          $this->season = $this->getSeason();
     }
     
     public function display(){
          $this->showName();
          $this->cecho($this->breviaryCollect());
          $this->cecho($this->eveningPrayer());
          $this->cecho('O God, from whom come all holy desires, all good counsels, and all just works, give to us, your servants, that peace which the world cannot give, that our hearts may be set to obey your commandments and also that we, being defended from the fear of our enemies, may live in peace and quietness; through Jesus Christ, Your Son, our Lord, who lives and reigns with you and the Holy Spirit, one God, now and forever.');
     }
     
     private function breviaryCollect(){
          // TODO: finish this
          $collects = array(
              'ordinary' => array(
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'o1',
              ),
              'advent' => array(
                  
              )
          );
          return $collects[$this->season['season']][$this->season['week']];
     }
     
     private function eveningPrayer(){
          $prayers = array(
              'SUNDAY',
              'MONDAY',
              'TUESDAY',
              'WEDNESDAY',
              'THURSDAY',
              'FRIDAY',
              'SATURDAY'
          );
          return $prayers[$this->season['day']];
     }
}

?>
