<?php
echo "Starting script.";
require("class.office.php");
echo "Current version of the liturgy project is $version.<br />";

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
	  new Benediction("Matins")
	);
	echo "A new Prime has been constructed.";
  }
  public function display(){
    foreach($this->elements as $e){
	  $e->display();
	}
  }
}

// This is going to end so badly.
$prime = new Prime();
$prime->display();

?>
	  