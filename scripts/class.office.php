<?php

// Interfaces.
interface Office {
  public function display();
}

abstract class Prayer implements Office { // General prayers, does not include Lord's Prayer
  public $backgroundColor = "#0000ff";
}

abstract class Canticle implements Office { // Magnificat, Nunc Dimittis, etc.
  public $backgroundColor = "#00ffoo";
}

abstract class LordsPrayer implements Office {
  public $backgroundColor = "#001100";
}

// Classes for specific offices.

class Responsory implements Office {
  
  private $title;
  private $response;
  private $verses;
  public function display(){
    for($i = 0; $i < 3; $i++){
	  echo "<b>P</b>: $this->verses[$i]<br/ >";
	  echo "<b>C</b>: $this->response<br />";
	}
  }
  public function __construct($t, $v, $r){
    $this->title = $t;
    $this->verses = $v;
	$this->response = $r;
  }
}

$testResponse = new Responsory(
  "Responsory",
  array("Into your hands, O Lord, I commend my spirit", "You have redeemed me, O Lord, God of truth", "Glory be to the Father, and to the Son, and to the Holy Spirit"),
  "Into your hands I commend my spirit"
);

$testResponse->display();

?>