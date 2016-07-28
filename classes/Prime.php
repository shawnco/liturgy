<?php

/**
 * Testing office of Prime
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */

// Need to include other classes.
include('Office.php');
include('Element.php');
include('DayVersicles.php');
include('Venite.php');
include('LordsPrayer.php');

class Prime extends Office {
     protected $name = 'Terce';
     
     public function __construct(){
          $this->elements = array(
              new DayVersicles($this->office),
              new Venite(),
              new LordsPrayer($this->office)
          );
     }

}

$prime = new Prime();
$prime->display();

?>
