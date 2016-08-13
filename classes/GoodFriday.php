<?php

/**
 * A special liturgy for the Good Friday service
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class GoodFriday extends Element{
     public function display(){
          $this->showName('Opening Prayers');
          $this->lecho('Blessed be our God.');
          $this->cecho('Forever and ever. Amen');
          $this->lecho('Let us pray. Almighty God, we pray you graciously to behold this your family, for whom our Lord Jesus Christ was willing to be betrayed, and given into the hands of sinners, and to suffer death upon the cross; who now lives and reigns with you and the Holy Spirit, one God, for ever and ever. Amen.');
          
          $this->showName('Readings');
          $this->lecho('The Passion of our Lord Jesus Christ, according to John.');
          
          $this->showName('Message');
          $this->showName('Hymn');
          
          $this->showName('Solemn Prayers');
          $this->lecho('Dear People of God: Our heavenly Father sent his Son into the world, not to condemn the world, but that the world through him might be saved; that all who believe in him might be delivered from the power of sin and death, and become heirs with him of everlasting life.<br /><br />We pray, therefore, for people everywhere according to their
needs.');
          $this->lecho('Let us pray for the holy Church of Christ throughout the world:');
          $this->cecho('For its unity in witness and service,');
          $this->lecho('For all priests, pastors, and campus minister,');
          $this->lecho('And for all Christians in this community,');
          $this->lecho('That God will confirm his Church in faith, increase it in love, and preserve it in peace.');
     }
     
     public function showName($text){
          echo '<br /><b>' . $text . '</b><br />';
     }
}

?>
