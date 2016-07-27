<?php

/**
 * The versicle format used at Matins, Terce, Sext, and None
 * @author Shawn Contant <shawnc366@gmail.com>
 */

class DayVersicles extends Element {
     private $name = 'Versicles';
     private $responses = array(
         'lent' => 'Praise to You, O Christ, King who comes to save us.',
         'advent' => 'Praise to you, O Christ, Lamb of our salvation.',
         'other' => 'Praise to you, O Christ, alleluia.'
     );
     
}
?>
