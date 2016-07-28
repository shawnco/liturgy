<?php

/**
 * Class for the Lord's Prayer, with the ability to choose audio files.
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class LordsPrayer extends Element {
     protected $name = 'Lord\'s Prayer';
     private $text = array(
         'old' => 'Our Father, who art in Heaven<br />Hallowed be thy name<br />Thy kingdom come<br />Thy will be done<br />On Earth as it is in Heaven<br />Give us this day our daily bread</br >And forgive us our tresspasses<br />As we forgive those who tresspass against us<br />And lead us not into temptation<br />But deliver us from evil<br />For thine is the kingdom, and the power, and the glory forever and ever, amen',
         'modern' => 'Our Father in Heaven<br />Hallowed be your name<br />Your kingdom come<br />Your will be done<br />On Earth as it is in Heaven<br />Give us today our daily bread<br />Forgive our sins, as we forgive those who sin against us<br />And lead us not into temptation<br />But deliver us from evil<br />For the kingdom, the power, and the glory are yours, now and forever, amen.'
     );
     
     public function __construct($office){
          $this->season = $this->getSeason();
          if(in_array($office, array('Terce', 'Sext', 'None'))){
               $this->office = 'little-hours';
          }else{
               $this->office = $office;
          }
     }
     
     // Stores the logic for showing which version of the LP to show.
     public function display(){
          $this->showName();
          if($this->office === 'little-hours'){
               $this->cecho($this->text['modern']);
          }else{
               // For the non-little-hours there are three variations of the LP to choose from.
               // Each of these hours has an offset so that the variations are constantly cycled through.
               $variations = array('Matins' => 0, 'Vespers' => 1, 'Compline' => 2);
               $lp = ($variations[$this->office] + floor(time()/86400)) % 2;
               
               if($lp == 0){
                    $this->getAudio($this->office, 'lords-prayer-196');
                    $this->cecho($this->text['old']);
               }else if($lp == 1){
                    $this->getAudio($this->office, 'lords-prayer-957');
                    $this->cecho($this->text['old']);
               }else{
                    $this->cecho($this->text['modern']);
               }
          }
          
     }
}

?>
