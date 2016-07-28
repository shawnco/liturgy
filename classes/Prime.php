<?php

/**
 * Testing office of Prime
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */

// Need to include other classes.
include('Office.php');
include('Element.php');
include('VespersVersicles.php');
include('Magnificat.php');
include('LordsPrayer.php');
include('ComplineReadings.php');

class Prime extends Office {
     protected $name = 'Terce';
     
     public function __construct(){
          $this->elements = array(
              new VespersVersicles(),
              new Magnificat(),
              //new ComplineReadings(),
              new LordsPrayer('Matins')
          );
     }

}

$prime = new Prime();
$prime->display();

?>
