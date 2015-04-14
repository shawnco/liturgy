<?php
require("class.office.php");

class Prime extends Office{
  public function __construct(){
    echo "Begin constructing Prime.";
    $this->name = "Matins";
	$this->season = "advent";
	$this->collect = "O God, who orders dusk and dawn, lead us through this day in holiness, so that your name may be glorified; through Jesus Christ our Lord, amen.";
	$this->elements = array(
	  new Versicle($this->name, $this->season),
	  new Canticle("Venite"),
	  new Responsory($this->name, $this->season),
	  new Kyrie(),
	  new Prayer($this->collect),
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
	  