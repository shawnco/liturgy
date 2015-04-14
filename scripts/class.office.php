<?php

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

// -------- ELEMENTS --------

// The overall abstract class for the element of an office. Have no idea what they're properly called.
abstract class Element{
  protected $name;
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
  function showName(){
    echo "<b>" . $this->name . "</b><br />";
  }
}

// Versicle
class Versicle extends Element{
  private $responses = array(
    "Matins" => array("lent" => "Praise to you, O Christ, King who comes to save us.",
					 "advent" => "Praise to you, O Christ, Lamb of our salvation.",
					 "other" => "Praise to you, O Christ, alleluia."
	),
	"Vespers" => array("lent" => "Praise to you, O Christ, Lamb of our salvation.",
					  "advent" => "Praise to you, O Christ, King who comes to save us.",
					  "other" => "Praise to you, O Christ, alleluia."
	)
  );
	
  public function __construct($office, $season){
    $this->name = "Versicle";
    $this->season = $season;
	$this->office = $office;
  }
  
  public function standardVersicle(){
    $this->lecho("O Lord, open my lips.");
	$this->cecho("And my mouth will declare your praise.");
	$this->lecho("Make haste, O God, to deliver me.");
	$this->cecho("Make to help me O Lord. Glory be to the Father and to the Son, and to the Holy Spirit; as it was in the beginning, is now, and will be forever. Amen.");  
  }
  public function display(){
    $this->showName();
    if($this->office == "Matins" || $this->office == "Terce" ||
	   $this->office == "Sext" || $this->office == "None" ||
	   $this->office == "Vespers")
	   $this->standardVersicle();
	if($this->office == "Matins" || $this->office == "Vespers"){
	  if($this->season == "advent" || $this->season == "lent")
	    $this->cecho($this->responses[$this->office][$this->season]);
	  else
	    $this->cecho($this->responses[$this->office]["other"]);
	}
	if($this->office == "Compline"){
	  $this->lecho("The Lord Almighty grant us a quiet night and peace at the last.");
	  $this->cecho("Amen.");
	  $this->lecho("It is good to give thanks to the Lord.");
	  $this->cecho("To sing praise to your name, O Most High.");
	  $this->lecho("To herald your love in the morning.");
	  $this->cecho("Your truth at the close of the day.");
	}
  }
}

// Psalmody
class Psalmoldy extends Element{
  public function display(){}
  public function __construct(){
    $this->name = "Psalmody";
  }
}

// Reading
class Reading extends Element{
  public function display(){}
  public function __construct(){
    $this->name = "Reading";
  }
}

// Lord's Prayer
class LordsPrayer extends Element{
  // If there are no variables passed in the constructor, assume it's a little hour.
  public function display(){}
  public function __construct(){
    $this->name = "Lord's Prayer";
  }
}

// Prayer
class Prayer extends Element{
  // Takes the office name and a boolean stating whether it's a collect.
  protected $prayer;
  public function display(){
    $this->showName();
	echo $this->prayer . "<br />";
  }
  public function __construct($p){
    $this->name = "Prayer";
	$this->prayer = $p;
  }
}

// Kyrie
class Kyrie extends Element{
  function display(){
    $this->showName();
    $this->cecho("Lord, have mercy. Christ, have mercy. Lord, have mercy.");
  }
  public function __construct(){
    $this->name = "Kyrie";
  }
}

// Responsory
class Responsory extends Element{
  public $responses = array(
    "Matins" => array(
	  "easter" => array(
	    "refrain" => "Give to the Lord all glory and strength, give him the honor due his name. Alleluia, alleluia.",
		"verse1" => "Sing to the Lord and bless his name, proclaim his salvation from day to day.",
		"verse2" => "Now is Christ risen from the dead and become the firstfruits of them that sleep.",
		"verse3" => "Glory be to the Father and to the Son and to the Holy Spirit."
	  ),
	  "lent" => array(
	    "refrain" => "He was delivered up to death. He was delivered for the sins of the people.",
		"verse1" => "We have an advocate with the Father; Jesus is the propitiation for our sins.",
		"verse2" => "Blessed is he whose transgression is forgiven and whose sin is put away.",
		"verse3" => "We have an advocate with the Father; Jesus is the propitiation for our sins."
	  ),
	  "other" => array(
	    "refrain" => "Lord, I love the habitation of your house and the place where your glory dwells.",
		"verse1" => "Forever, O Lord, your word is firmly set in the heavens.",
		"verse2" => "Blessed are those who hear the Word of God and keep it.",
		"verse3" => "Glory be to the Father and to the Son and to the Holy Spirit."
	  )
	),
	"Vespers" => array(
	  "advent" => array(
	    "refrain" => "This is the name by which He will be called: The Lord is Our Righteousness",
		"verse1" => "Behold, the days are coming, say the Lord, when I will raise up for David a righteous Branch",
		"verse2" => "In His days Judah will be saved, and Israel will dwell securely",
		"verse3" => "Glory be to the Father and to the Son and to the Holy Spirit"
	  ),
	  "lent" => array(
	    "refrain" => "Rescue me from my enemies, protect me from those who rise against me",
		"verse1" => "Deliver me, O Lord, my God, for You are the God of my salvation",
		"verse2" => "In You, O Lord, do I put my trust, leave me not, O Lord, my God",
		"verse3" => "Deliver me, O Lord, my God, for You are the God of my salvation"
	  ),
	  "other" => array(
	    "refrain" => "Your Word is a lamp to my feet and a light to my path.",
		"verse1" => "Teach me Your way, O Lord, that I may walk in Your Truth",
		"verse2" => "Unite my heart to fear Your name that I may walk in Your Truth",
		"verse3" => "Glory be to the Father and to the Son and to the Holy Spirit"
	  )
	),
	"Compline" => array(
	  "refrain" => "Into your hands, I commend my spirit.",
	  "verse1" => "Into your hands, O Lord, I commend my spirit.",
	  "verse2" => "You have redeemed me, O Lord, God of truth.",
	  "verse3" => "Glory be to the Father and to the Son and to the Holy Spirit."
	)
  );
  
  public function __construct($o,$s){
    $this->name = "Responsory";
    $this->office = $o;
    $this->season = $s;
  }
  
  public function display(){
    $this->showName();
    if($this->office == "Matins"){
	  if($this->season != "easter" && $this->season != "lent")
	    $s = "other";
	  else
	    $s = $this->season;
	  $this->lecho($this->responses["Matins"][$s]["verse1"]);
      $this->cecho($this->responses["Matins"][$s]["refrain"]);
	  $this->lecho($this->responses["Matins"][$s]["verse2"]);
	  $this->cecho($this->responses["Matins"][$s]["refrain"]);
	  $this->lecho($this->responses["Matins"][$s]["verse3"]);
	  $this->cecho($this->responses["Matins"][$s]["refrain"]);	  
	}else if($this->office == "Vespers"){
	  if($this->season != "advent" && $this->season != "lent")
	    $s = "other";
      else
	    $s = "lent";
	  $this->lecho($this->responses["Vespers"][$s]["verse1"]);
      $this->cecho($this->responses["Vespers"][$s]["refrain"]);
	  $this->lecho($this->responses["Vespers"][$s]["verse2"]);
	  $this->cecho($this->responses["Vespers"][$s]["refrain"]);
	  $this->lecho($this->responses["Vespers"][$s]["verse3"]);
	  $this->cecho($this->responses["Vespers"][$s]["refrain"]);	
	}else if($this->office == "Compline"){
	  $this->lecho($this->responses["Compline"]["verse1"]);
      $this->cecho($this->responses["Compline"]["refrain"]);
	  $this->lecho($this->responses["Compline"]["verse2"]);
	  $this->cecho($this->responses["Compline"]["refrain"]);
	  $this->lecho($this->responses["Compline"]["verse3"]);
	  $this->cecho($this->responses["Compline"]["refrain"]);		
	}else{
	  echo "Responsory not found.";
	}
  }  
}

// Canticle
class Canticle extends Element{
  // Currently, the canticles in the liturgy project are Venite, Te Deum, Benedictus, Magnificat, and Nunc Dimittis.
  public $canticleName;
  public function __construct($cn){
    $this->name = "Canticle";
    $this->canticleName = $cn;
  }
  public function showCanticleName(){
    echo "<i>" . $this->canticleName . "</i><br />";
  }
  public function display(){
    $this->showName();
    $this->showCanticleName();
    if($this->canticleName == "Venite"){
	  $this->lecho("Blessed be God the Father, the Son, and the Holy Spirit.");
      $this->cecho("O come, let us worship him.");
      $this->lecho(
        "O come let us sing to the Lord<br />
        Let us make a joyful noise to the Rock of our salvation.<br />
        Let us come into His presence with thanksgiving;<br />
        Let us make a joyful noise unto Him with songs of praise.<br /> <br />    

        For the Lord is a great God<br />
        And a great King above all gods.<br />
        The deep places of the Earth are in his hand<br />
        The strength of the hills is His also.<br /><br />

        The sea is His, for he made it<br />
        And His hand formed the dry land.<br />
        Oh, come let us worship and bow down;<br />
        Let us kneel before the Lord our maker.<br /><br />

        For He is our God<br />
        And we are the people of His pasture <br />
        And the sheep of His hand.<br /><br />

        Glory be to the Father and to the Son<br />
        And to the Holy Spirit<br />
        As it was in the beginning, is now,<br />
        And ever shall be; world without end. Amen.");
      $this->lecho("Blessed be God the Father, the Son, and the Holy Spirit.");
      $this->cecho("O come, let us worship him.");
	}else if($this->canticleName == "Te Deum"){
      $this->lecho(
        "We praise you, O God; we acknowledge you to be the Lord<br />
        All the earth now worships you, the Father everlasting<br /> 
        To you all angels cry aloud, the heavens and all the powers therein<br />
        To you cherubim and seraphim continually do cry:<br /><br />

        Holy, holy, holy, Lord God of Sabaoth<br />
        heaven and earth are full of the majesty of your glory<br />
        The glorious company of the apostles praise you<br />
        The goodly fellowship of the prophets praise you<br /><br />

        The noble army of martyrs praise you<br />
        The holy Church throughout all the world does acknowledge you<br />
        The Father of an infinite majesty; your adorable, true, and only Son<br />
        also the Holy Ghost, the Comforter<br /><br />

        You are the king of glory, O Christ<br />
        You are the everlasting Son of the Father.<br /><br />

        When you took upon yourself to deliver man<br />
        You humbled yourself to be born of a virgin<br />
        When you had overcome the sharpness of death<br />
        You opened the kingdom of heaven to all believers<br />
        You sit at the right hand of God<br />
        In the glory of the Father<br />
        We believe that you will come<br />
        to be our judge<br /><br />

        Therefore we pray you to help your servants<br />
        Whom you have redeemed with your precious blood<br />
        Make them to be numbered with your saints<br />
        In glory everlasting<br /><br />

        O Lord, save your people and bless your heritage<br />
        Govern them and lift them up forever<br />
        Day by day we magnify you<br />
        And we worship your name forever and ever<br /><br />

        Grant, O Lord, to keep us this day without sin<br />
        O Lord, have mercy upon us, have mercy upon us<br />
        O Lord, let your mercy be upon us, as our trust is in you<br />
        O Lord, in you have I trusted; let me never be confounded.<br />
      ");
	}else if($this->canticleName == "Benedictus"){
      $this->lecho(
        "Blessed be the Lord God of Israel<br />
        For he has visited and redeemed his people<br />
        And has raised up a horn of salvation for us<br />
        In the house of his servant David<br /><br />

        As he spoke by the mouth of his holy prophets,<br />
        Who have been since the world began<br />
        That we should be saved from our enemies<br />
        And from the hand of all who hate us<br /><br />

        To perform the mercy promised to our fathers<br />
        And to remember his holy covenant<br />
        The oath that he swore to our father Abraham<br />
        To guarantee us that we<br /><br />

        Being delivered from the hand of our enemies<br />
        Might serve him without fear<br />
        In holiness and righteousness before him<br />
        All the days of our life<br /><br />

        And you, child, will be called the prophet of the Most High<br />
        For you will go before the Lord to prepare his ways<br />
        To give knowledge of salvation to his people<br />
        In the forgiveness of their sins<br /><br />

        Through the tender mercy of our God<br />
        When the day shall dawn upon us from on high<br />
        To give light to those who sit in darkness and in the shadow of death<br />
        To guide our feet into the way of peace<br /><br />

        Glory be to the Father and to the Son and to the Holy Spirit<br />
        As it was in the beginning, is now, and will be forever. Amen.
      ");
	}else if($this->canticleName == "Magnificat"){
      $this->lecho("Let my prayer rise before you as incense.");
      $this->cecho("And the lifting up of my hands at the evening sacrifice");
      $this->cecho("My soul magnifies the Lord, and my spirit rejoices in God, my Savior");
      $this->lecho("For He has regarded the lowliness of his hand-maiden");
      $this->cecho("For behold, from this day all generations will call me blessed");
      $this->lecho("For the Mighty One has done great things to me, and holy is his name");
      $this->cecho("And his mercy is on those who fear him from generation to generation");
      $this->lecho("He has shown strength with his arm; he has scattered the proud in the imagination of their hearts");
      $this->cecho("He has cast down the mighty from their thrones and has exalted the lowly");
      $this->lecho("He has filled the hungry with good things, and the rich he has sent empty away");
      $this->cecho("He has helped his servant Israel in remembrance of his mercy as he spoke to our fathers, to Abraham and to his seed forever");
      $this->cecho("Glory be to the Father and to the Son and to the Holy Spirit; as it was in the beginning, is now and will be forever. Amen."); 	
	}else if($this->canticleName == "Nunc Dimittis"){
      $this->lecho("Guide us waking, O Lord, and guard us sleeping that awake we may watch with Christ and asleep  we may rest in peace");
      $this->cecho("Lord, now you let your servant go in peace; your word has been fulfilled. My own eyes have seen the salvation which you have prepared in the sight of every people: a light to reveal you to the nations and the glory of your people Israel. Glory be to the Father and to the Son and to the Holy Spirit; as it was in the beginning, is now, and will be forever. Amen. Guide us waking, O Lord, and guard us sleeping that awake we may watch with Christ and asleep we may rest in peace.");	
	}else{
	  echo "Canticle not found.";
	}
  }
}

// Benediction
class Benediction extends Element{
  public function __construct($o){
    $this->name = "Benedicamus and Benediction";
    $this->office = $o;
  }
  public function display(){
    $this->showName();
    if($this->office == "Matins" || $this->office == "Vespers"){
	  $this->lecho("Let us bless the Lord.");
      $this->cecho("Thanks be to God.");
      $this->lecho("The grace of our Lord Jesus Christ and the love of God and the communion of the Holy Spirit be with you all.");
      $this->cecho("Amen.");
	}else if($this->office == "Compline"){
	  $this->lecho("The almighty and merciful Lord, the Father, the Son, and the Holy Spirit, bless you and keep you.");
      $this->cecho("Amen.");
	}else{
	  echo "Benediction not found.";
	}
  }
}

?>