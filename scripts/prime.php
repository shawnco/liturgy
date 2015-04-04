<?php
require("class.office.php");

class Prime extends Office{
  public function __construct(){
    echo "Begin constructing Prime.";
    $this->name = "Matins";
	$this->season = "advent";
	$this->elements = array(
	  new Versicle($this->name, $this->season),
	  new Canticle("Venite"),
	  new Responsory($this->name, $this->season),
	  new Kyrie(),
	  new Canticle("Magnificat"),
	  new Benediction("Matins")
	);
	echo "A new Prime has been constructed.";
  }
}
// This is going to end so badly.
$prime = new Prime();
$prime->display();

?>
	  