<?php

// The overall abstract class for the office.
class Office{
  protected $name; // Name of this office.
  protected $elements; // The elements of the office.
  protected $season; // Current church season.
  protected $day; // Days since Unix epoch.
  protected $dayOfWeek; // Day of the week.
  function display(){ // Requires every class to have a means of displaying its offices.
    foreach($elements as $elem){
	  $elem.display();
	}
  }
  function getSeason(){}
  function getDay(){}
  function getDayOfWeek(){}
  function disclaimer(){}
}

class Matins extends Office{
  function __construct(){
    $this->name = "Matins";
	$this->season = $this->getSeason(); 
	$this->day = $this->getDay();
	$this->dayOfWeek = $this->getDayOfWeek();
    $this->elements = array(
	  new Versicle("Matins",$this->season),
	  new Canticle(),
	  new Psalmody("Matins",$this->season),
	  new Reading("Matins",$this->dayOfWeek),
	  new Responsory("Matins",$this->season),
	  new Canticle(),
	  new Kyrie(),
	  new LordsPrayer("Matins",$this->day),
	  new Salutation($this->day),
	  new Prayer("Matins",true),
	  new Benediction()
	);
  }  
}

class Terce implements Office{
  function __construct(){
    $this->name = "Terce";
	$this->season = $this->getSeason();
	$this->day = $this->getDay();
	$this->dayOfWeek = $this->getDayOfWeek();
	$this->elements = array(
	  new Versicle("Terce"),
	  new Psalmody("Terce",$this->dayOfWeek),
	  new Reading("Terce",$this->dayOfWeek),
	  new Kyrie(),
	  new LordsPrayer(),
	);
  }
}

class Sext implements Office{
  function __construct(){
    $this->name = "Terce";
	$this->season = $this->getSeason();
	$this->day = $this->getDay();
	$this->dayOfWeek = $this->getDayOfWeek();
	$this->elements = array(
	  new Versicle("Sext"),
	  new Psalmody("Sext",$this->day),
	  new Reading("Sext",$this->day),
	  new Kyrie(),
	  new LordsPrayer(),
	);
  }
}

class None implements Office{
  function __construct(){
    $this->name = "Terce";
	$this->season = $this->getSeason();
	$this->day = $this->getDay();
	$this->dayOfWeek = $this->getDayOfWeek();
	$this->elements = array(
	  new Versicle("None"),
	  new Psalmody("None",$this->day),
	  new Reading("None", $this->day),
	  new Kyrie(),
	  new LordsPrayer(),
	);
  }
}

class Vespers implements Office{
  function __construct(){
    $this->name = "Vespers";
	$this->season = $this->getSeason();
	$this->day = $this->getDay();
	$this->dayOfWeek = $this->getDayOfWeek();
	$this->elements = array(
	  new Veriscle("Vespers",$this->season),
	  new Psalmody("Vespers",$this->season, $this->dayOfWeek),
	  new Reading("Vespers"),
	  new Responsory("Vespers",$this->season),
	  new Canticle(),
	  new Kyrie(),
	  new LordsPrayer("Vespers"),
	  new Salutation("Vespers",$this->day),
	  new Prayer("Vespers",false),
	  new Prayer("Vespers",true),
	  new Benediction(),
	);
  }
}

class Compline implements Office{
  function __construct(){
    $this->name = "Compline";
	$this->season = $this->getSeason();
	$this->day = $this->getDay();
	$this->dayOfWeek = $this->getDayOfWeek();
	$this->elements = array(
	  new Versicle("Compline"),
	  new Confession($this->day),
	  new Psalmody("Compline"),
	  new Reading("Compline", $this->day),
	  new Responsory("Compline"),
	  new Prayer("Compline"),
	  new LordsPrayer("Compline"),
	  new Canticle(),
	  new Benediction()
	);
  }	  
}

// The overall abstract class for the element of an office. Have no idea what they're properly called.
abstract class Element{
  protected $season;
  protected $day;
  protected $dayOfWeek;
  protected $office;
  abstract function display(); // Requires every Element to have a means of displaying its office.
  function lecho($msg){
    echo "<b>L:</b> " . $msg . "<br />";
  }
  function cecho($msg){
    echo "<b>C:</b> " . $msg . "<br />";
  }
  function getAudio($office,$name){
  }
}

class Versicle implements Element{

  private $responses = array(
    "Matins" = array("lent" => "Praise to you, O Christ, King who comes to save us.",
					 "advent" => "Praise to you, O Christ, Lamb of our salvation.",
					 "other" => "Praise to you, O Christ, alleluia."
	),
	"Vespers" = array("lent" => "Praise to you, O Christ, Lamb of our salvation.",
					  "advent" => "Praise to you, O Christ, King who comes to save us.",
					  "other" => "Praise to you, O Christ, alleluia."
	)
	
  public function __construct($office, $season){
    $this->season = $season;
	$this->office = $office;
  }
  
  // This set of responses is typical enough it merits its own method.
  public function standardVersicle(){
    lecho("O Lord, open my lips.");
	cecho("And my mouth will declare your praise.");
	lecho("Make haste, O God, to deliver me.");
	cecho("Make to help me O Lord. Glory be to the Father and to the Son, and to the Holy Spirit; as it was in the beginning, is now, and will be forever. Amen.");  
  }
  public function display(){
    if($this->office == "Matins" || $this->office == "Terce" ||
	   $this->office == "Sext" || $this->office == "None" ||
	   $this->office == "Vespers")
	   standardVersicle();
	if($this->office == "Matins" || $this->office == "Vespers"){
	  if($this->season == "advent" || $this->season == "lent")
	    cecho($this->responses[$this->office][$this->season];
	  else
	    cecho($this->responses[$this->office]["other"];
	}
	if($this->office == "Compline"){
	  lecho("The Lord Almighty grant us a quiet night and peace at the last.");
	  cecho("Amen.");
	  lecho("It is good to give thanks to the Lord.");
	  cecho("To sing praise to your name, O Most High.");
	  lecho("To herald your love in the morning.");
	  cecho("Your truth at the close of the day.");
	}
  }
}


class Psalmoldy implements Element{
}

class Hymn implements Element{
}

class Reading implements Element{
}

class LordsPrayer implements Element{
  // If there are no variables passed in the constructor, assume it's a little hour.
}

class Prayer implements Element{
  // Takes the office name and a boolean stating whether it's a collect.
}

class Kyrie extends Element{
  function display(){
    cecho("Lord, have mercy. Christ, have mercy. Lord, have mercy.");
  }
}

class Reponsory implements Element{
}

class Canticle implements Element{
}

class Benediction implements Element{
}

?>