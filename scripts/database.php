<?php

class Database{

  private $con;

  // Fetches a verse from the NASB Bible database.
  public function getVerse($book, $addr){
    // The book is already provided, now we need to parse the address. This comes in a few forms:
	// 3 - usually with psalms
	// 3:16
	// 3:16-20
	// 3:16-4:1
	
	if(strpos($addr,":")===FALSE) echo "[no colon,"; else echo "[colon,";
	if(strpos($addr,"-")===FALSE) echo "no hyphen]"; else echo "hyphen";
	
	// First, get an entire chapter. ie 3
	if( (strpos($addr, ":") === FALSE) && (strpos($addr, "-") === FALSE)){
	  echo "here";
	  // Easy, just get the entire verse.
	  $query = $this->con->prepare("SELECT `verse`, `NASB` from `nasb` WHERE `book` = :book AND `chapter` = :chapter");
	  $query->bindParam(":book", $book);
	  $query->bindParam(":chapter", $addr);
	  $query->execute();
	  //foreach($query->fetch(PDO::FETCH_ASSOC) as $result){
	    //var_dump($result);
	  //}
	  $result = $query->fetchAll(PDO::FETCH_ASSOC);
	  //var_dump($result);
	  foreach($result as $verse){
	    echo " <b>" . $verse["verse"] . "</b> " . $verse["NASB"];
		if($book == "Psalms") echo "<br />";
	  }
	}
	
	// Next get a chapter and a verse.  ie 3:16
	else if( (strpos($addr, ":") !== FALSE) && (strpos($addr, "-")===FALSE)){
	  echo "here too";
	  // Split $addr for chapter and verse.
	  $pieces = explode(":", $addr);
	  $query = $this->con->prepare("SELECT `verse`, `NASB` from `nasb` WHERE `book` = :book AND `chapter` = :chapter AND `verse` = :verse");
	  $query->bindParam(":book", $book);
	  $query->bindParam(":chapter", $pieces[0]);
	  $query->bindParam(":verse", $pieces[1]);
	  $query->execute();
	  $result = $query->fetchAll(PDO::FETCH_ASSOC);
	  foreach($result as $verse){
	    echo " <b>" . $verse["verse"] . "</b> " . $verse["NASB"];
		if($book == "Psalms") echo "<br />";
	  }
	}
	
	// Third possibility is a chapter and range of verses in the same chapter. ie 3:16-20 or 3:16-4:1
	else if( (strpos($addr, ":") !== FALSE) && (strpos($addr, "-" !== FALSE))){
	  $pieces = explode("-", $addr);
	  $firstPiece = $pieces[0]; // This first piece will have the chapter and starting verse.
	  $starting = explode(":", $firstPiece[0]);
	  $chapter = $starting[0];
	  $start = $starting[1];
	  $secondPiece = $pieces[1]; // If there is no 4:1 issue, this is just the ending verse.
	  
	  // What we do here depends on whether or not there's a colon in the second piece.
	  if(strpos($secondPiece, ":") !== FALSE){
	    // This is the very annoying fourth possibility.
	  }else{
	    $query = $this->con->prepare("SELECT `verse`, `NASB` from `nasb` WHERE `book` = :book AND `chapter` = :chapter AND (`verse` >= :start AND `verse` <= :end)");
		$query->bindParam(":book", $book);
		$query->bindParam(":chapter", $chapter);
		$query->bindParam(":start", $start);
		$query->bindParam(":end", $secondPiece);
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as $verse){
		  echo " <b>" . $verse["verse"] . "</b> " . $verse["NASB"];
		  if($book == "Psalms") echo "<br />";
		}
	  
	  }
	
	}
	
  }

  // Make a new connection.
  public function __construct(){
    $this->con = new PDO("mysql:dbname=bible;host=localhost", "shawntc", "daftpunk1!");
	echo "Connection made?";
  }
  
  // This is called when the Database connection is no longer needed.
  public function __destruct(){
    $this->con = null;  
  }

}

$db = new Database();
//$db->getVerse("Psalms", "1");
//$db->getVerse("Ecclesiastes", "12");
$db->getVerse("John", "3:16");
$db->getVerse("Ecclesiastes", "1:2");
$db->getVerse("John", "3:15-16");
?>