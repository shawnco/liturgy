<?php

/**
 * Words of Confession and Absolution
 *
 * @author Shawn Contant
 */
class Confession extends Element {
     protected $name = 'Confession and Absolution';
     
     public function display(){
          $this->showName();
          $this->lecho('Let us confess our sins in the presence of God and of one another');
          echo '<i>Silence for self-examination</i><br />';          
          $caa = floor(time() / 86400);
          if($caa % 2 == 0){
               $this->cecho('I confess to God Almighty, before the whole company of heaven and to you, my brothers and sisters, that I have sinned in thought, word, and deed by my fault, by my own fault, by my own most grievous fault; wherefore I pray God Almighty to have mercy on me, forgive me all my sins, and bring me to everlasting life. Amen.');
               $this->lecho('The almighty and merciful Lord grant you pardon, forgiveness, and remission of all your sins. Amen.');               
          }else{
               $this->lecho('Holy and gracious God');
               $this->cecho('I confess that I have sinned against you this day. Some of my sin I know - the thoughts and words and deeds of which I am ashamed - but some is known only to you. In the name of Jesus Christ I ask forgiveness. Deliver and restore me that I may rest in peace.');
               $this->lecho('By the mercy of God we are redeemed by Jesus Christ, and in him we are forgiven. We rest now in his peace and rise in the morning to serve him.');
               $this->cecho('Amen.');               
          }
     }
}

?>
