<?php

require("class.element.php");
require("class.database.php");
// Version number, also good for testing purposes.
$version = "0.2";

// -------- OFFICES --------

// The overall abstract class for the office.
class Office{
  protected $name; // Name of this office.
  protected $elements; // The elements of the office.
  protected $season; // Current church season.
  protected $day; // Days since Unix epoch.
  protected $dayOfWeek; // Day of the week.
  function display(){
    foreach($this->elements as $e){
	  $e->display();
	}
  }
  function getSeason(){}
  function getDay(){
  }
  function getDayOfWeek(){
    return date("w");
  }
  
  // A disclaimer for legal purposes.
  function disclaimer(){
    echo "<p><i>Audio is from the <a href='http://www.lcms.org/resources/audio'>LCMS website</a> and protected under fair use policy, as this is non-commercial. </i></p>";
  }
}

// Matins
class Matins extends Office{
  protected $collect;
  function __construct(){
    $this->name = "Matins";
	$this->season = $this->getSeason(); 
	$this->day = $this->getDay();
	$this->dayOfWeek = $this->getDayOfWeek();
	$this->collect = "O Lord, our heavenly Father, almighty and everlasting God, you have safely brought us to the beginning of this day. Defend us in the same with your mighty power and grant that this day we fall into no sin, neither run into any kind of danger, but that all our doings, being ordered by your governance, may be righteous in your sight; through Jesus Christ, your son, our Lord, who lives and reigns with you and the Holy Spirit, one God, now and forever.";
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
	  new Prayer($this->collect),
	  new Prayer(),
	  new Benediction()
	);
  }  
}

// Terce
class Terce extends Office{
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

// Sext
class Sext extends Office{
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

// None
class None extends Office{
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

// Vespers
class Vespers extends Office{
  protected $collect;
  function __construct(){
    $this->name = "Vespers";
	$this->season = $this->getSeason();
	$this->day = $this->getDay();
	$this->dayOfWeek = $this->getDayOfWeek();
	$this->collect = "O God, from whom come all holy desires, all good counsels, and all just works, give to us, your servants, that peace which the world cannot give, that our hearts may be set to obey your commandments and also that we, being defended from the fear of our enemies, may live in peace and quietness; through Jesus Christ, Your Son, our Lord, who lives and reigns with you and the Holy Spirit, one God, now and forever.";
	$this->elements = array(
	  new Veriscle("Vespers",$this->season),
	  new Psalmody("Vespers",$this->season, $this->dayOfWeek),
	  new Reading("Vespers"),
	  new Responsory("Vespers",$this->season),
	  new Canticle(),
	  new Kyrie(),
	  new LordsPrayer("Vespers"),
	  new Salutation("Vespers",$this->day),
	  new Prayer(),
	  new Prayer($this->collect),
	  new Benediction(),
	);
  }
}

// Compline
class Compline extends Office{
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

?>