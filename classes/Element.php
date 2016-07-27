<?php

/**
 * The abstract class for an office element
 * @author Shawn Contant <shawnc366@gmail.com>
 * 
 */

abstract class Element {
     protected $name;
     protected $season;
     protected $day;
     protected $dayOfWeek;
     protected $office;
     
     // Must be defined by every element class
     abstract function display();
     
     // Lecturn says
     function lecho($msg){
          echo "<b>L:</b> " . $msg . "<br />";
     }
     
     // Congregation says
     function cecho($msg){
          echo "<b>C:</b> " . $msg . "<br />";
     }
     
     // Grabs the audio and generates the HTML
     function getAudio($office,$name){
     }
     
     // Displays element name
     function showName(){
          echo "<b>" . $this->name . "</b><br />";
     }     
}
?>
