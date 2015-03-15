<?php

// The master psalm array.
$psalmTable = array(
  "lent" => array(
    "0" => array("morning" => "84", "evening" => array("32","42")),
    "1" => array("morning" => "119:73-80", "evening" => array("6","121")),
    "2" => array("morning" => "34", "evening" => array("25","91")),
    "3" => array("morning" => "5", "evening" => array("27","51")),
    "4" => array("morning" => "38", "evening" => array("102","126")),
    "5" => array("morning" => "22", "evening" => array("107","130")),
    "6" => array("morning" => "43", "evening" => array("31","143")),
  ),
  "easter" => array(
    "0" => array("morning" => "93", "evening" => array("117","132")),
    "1" => array("morning" => "97", "evening" => array("115","124")),
    "2" => array("morning" => "98", "evening" => array("66","116")),
    "3" => array("morning" => "99", "evening" => array("8","118")),
    "4" => array("morning" => "47", "evening" => array("68","113")),
    "5" => array("morning" => "96", "evening" => array("50","138")),
    "6" => array("morning" => "92", "evening" => array("23","114")),  
  ), 
  "gen1" => array(
    "0" => array("morning" => "103", "evening" => array("117","139")),
    "1" => array("morning" => "5", "evening" => array("29","84")),
    "2" => array("morning" => "42", "evening" => array("102","133")),
    "3" => array("morning" => "89", "evening" => array("1","33")),
    "4" => array("morning" => "97", "evening" => array("16","62")),
    "5" => array("morning" => "51", "evening" => array("65","142")),
    "6" => array("morning" => "104", "evening" => array("111","118")),   
  ),
  "gen2" => array(
    "0" => array("morning" => "19", "evening" => array("81","113")),
    "1" => array("morning" => "136", "evening" => array("97","112")),
    "2" => array("morning" => "123", "evening" => array("30","86")),
    "3" => array("morning" => "15", "evening" => array("4","84")),
    "4" => array("morning" => "36", "evening" => array("27","80")),
    "5" => array("morning" => "130", "evening" => array("32","139")),
    "6" => array("morning" => "56", "evening" => array("62","100")),   
  ),
  "gen3" => array(
    "0" => array("morning" => "67", "evening" => array("46","93")),
    "1" => array("morning" => "51", "evening" => array("47","85")),
    "2" => array("morning" => "54", "evening" => array("28","99")),
    "3" => array("morning" => "65", "evening" => array("91","125")),
    "4" => array("morning" => "143", "evening" => array("81","116")),
    "5" => array("morning" => "86", "evening" => array("6","19")),
    "6" => array("morning" => "122", "evening" => array("90","141")),   
  ),
  "gen4" => array(
    "0" => array("morning" => "110", "evening" => array("23","66")),
    "1" => array("morning" => "62", "evening" => array("8","73")),
    "2" => array("morning" => "13", "evening" => array("5","36")),
    "3" => array("morning" => "96", "evening" => array("132","134")),
    "4" => array("morning" => "116", "evening" => array("26","130")),
    "5" => array("morning" => "85", "evening" => array("25","40")),
    "6" => array("morning" => "61", "evening" => array("98","138")),   
  ),
  "advent" => array(
    "0" => array("morning" => "24", "evening" => array("25","110")),
    "1" => array("morning" => "122", "evening" => array("40","67")),
    "2" => array("morning" => "33", "evening" => array("85","91")),
    "3" => array("morning" => "50", "evening" => array("14","16")),
    "4" => array("morning" => "18:1-20", "evening" => array("62","126")),
    "5" => array("morning" => "102", "evening" => array("16","130")),
    "6" => array("morning" => "90", "evening" => array("72","80")),   
  ),
  "christmas1" => array("morning" => "19", "evening" => array("114","132")),
  "christmas2" => array("morning" => "2", "evening" => array("96","98")),
  "christmas3" => array("morning" => "116", "evening" => array("27","119:1-24")),
  "christmas4" => array("morning" => "34", "evening" => array("19","121")),
  "christmas5" => array("morning" => "2", "evening" => array("110","111")),
  "christmas6" => array("morning" => "96", "evening" => array("97","132")),
  "christmas7" => array("morning" => "93", "evening" => array("89")),
  "christmas8" => array("morning" => "98", "evening" => array("45","96")),
  "christmas9" => array("morning" => "97", "evening" => array("8","99")),
  "christmas10" => array("morning" => "48", "evening" => array("29","45")),
  "christmas11" => array("morning" => "111", "evening" => array("15","107")),
  "christmas12" => array("morning" => "103", "evening" => array("93","97")),
  "christmas13" => array("morning" => "99", "evening" => array("96","110")),
  "christmas14" => array("morning" => "72", "evening" => array("67","110"))
);

// Central Standard, suckaaaaas
date_default_timezone_set("America/Mexico_City");
// Fetch the number of days that have passed since the Unix epoch.
// Used mainly to determine which version of a rotating element (ie Lord's Prayer, Salutation, Prayer) to use.
function epochTime(){
  return floor( time()/86400 );
}

// Fetch numerical value showing day of week.
function dayOfWeek(){
  return date("w");
}

// Shorthand for showing it's the congregation's line.
function cecho($msg){
  echo "<span id='congregation'><b>C:</b> " . $msg . "</span><br />";
}

// Shorthand for showing it's the lecturn's line.
function lecho($msg){
  echo "<span id='lecturn'><b>L:</b> " . $msg . "</span><br />";
}

// Shorthand for including audio files
function audio($office, $src){
  echo "<audio controls>";
  echo "  <source src='../" . $office . "-audio/" . $src . ".ogg' />";
  echo "  <source src='../" . $office . "-audio/" . $src . ".mp3' />";
  echo "</audio><br />";
}

// Disclaimer
function disclaimer(){
  echo "<p><i>Audio is from the <a href='http://www.lcms.org/resources/audio'>LCMS website</a> and protected under fair use policy, as this is non-commercial.</i></p>";
}



// Better version of the season getter. Instead of specifying today, it can be used for any date in general.
function getSeason($today){  // Where $today is previously made via epochTime.
  $easter = floor(easter_date(date("Y"))/86400);
  $christmas = floor(mktime(0,0,0,12,24,date("Y")) / 86400);
  
  // Lent
  if( ($today >= $easter-46) && ($today < $easter) )
    return "lent";
  else if( ($today >= $easter) && ($today < $easter+50) )
    return "easter";
  else{
    $i = 24;
    while( 4 != date("w", mktime(0, 0, 0, 11, $i, date("Y"))) ){
      $i++;
    }
    $advent = mktime(0, 0, 0, 11, $i, date("Y"));
    $advent = floor($advent/86400);
    $advent += 3;
    if( ($today >= $advent) && ($today < $christmas) )
   	  return "advent";
    else if($today == $christmas) return "christmas1";
    else if($today == $christmas+1) return "christmas2";
    else if($today == $christmas+2) return "christmas3";
    else if($today == $christmas+3) return "christmas4";
    else if($today == $christmas+4) return "christmas5";
    else if($today == $christmas+5) return "christmas6";
    else if($today == $christmas+6) return "christmas7";
    else if($today == $christmas+7) return "christmas8";	
	else{
	  $today += 4;
      $week = $today / 7;
	  if($week % 4 == 0) return "gen1";
      else if($week % 4 == 1) return "gen2";
      else if($week % 4 == 2) return "gen3";
      else if($week % 4 == 3) return "gen4";
	}
  }  
  
  // There has been a failure of divine proportions.
  return "Failed to generate season.";
}



// Tests to see if the current day falls under Advent, Christmas, Easter,  Epiphany/General, or Lent, 
function getSeasonNew(){
  $today = epochTime();

  $easter = floor(easter_date(date("Y"))/86400);
  
  $christmas = floor(mktime(0, 0, 0, 12, 24, date("Y")) / 86400); // Christmas Eve.
  
  // Lent is 46 days prior to Easter.
  if( ($today >= $easter-46) && ($today < $easter) )
    return "lent";
    
  // Easter lasts 50 days.
  if( ($today >= $easter) && ($today < $easter+50) )
    return "easter";
  
  // Advent is the four weeks prior to the first Sunday of Christmas.
  // This falls on any date between 27 Nov and 3 Dec. Find which one of these is a Thursday, then Advent starts three days later.
  $i = 24;
  while( 4 != date("w", mktime(0, 0, 0, 11, $i, date("Y"))) ){
    $i++;
  }
  $advent = mktime(0, 0, 0, 11, $i, date("Y"));
  $advent = floor($advent/86400);
  $advent += 3;
  
  if( ($today >= $advent) && ($today < $christmas) ){
    return "advent";
  }
  
  // Christmas season lasts 12 days. I'll be nice and return which day of the Christmas season it's on.
  // Christmas season is actually a very annoying edge case. So long as the date is between Dec. 24 and Dec. 31, we have no problems.
  if($today == $christmas) return "christmas1";
  if($today == $christmas+1) return "christmas2";
  if($today == $christmas+2) return "christmas3";
  if($today == $christmas+3) return "christmas4";
  if($today == $christmas+4) return "christmas5";
  if($today == $christmas+5) return "christmas6";
  if($today == $christmas+6) return "christmas7";
  if($today == $christmas+7) return "christmas8";
  
  // Once we're Jan. 1 through Jan. 6, we need to try a more manual approach. It's just easier, if less pretty.
  if($today == (floor(mktime(0,0,0,1,1,date("Y"))/86400 ))) return "christmas9";
  if($today == (floor(mktime(0,0,0,1,2,date("Y"))/86400 ))) return "christmas10";
  if($today == (floor(mktime(0,0,0,1,3,date("Y"))/86400 ))) return "christmas11";
  if($today == (floor(mktime(0,0,0,1,4,date("Y"))/86400 ))) return "christmas12";
  if($today == (floor(mktime(0,0,0,1,5,date("Y"))/86400 ))) return "christmas13";
  if($today == (floor(mktime(0,0,0,1,6,date("Y"))/86400 ))) return "christmas14";
  
  // The very last thing we do. Find which general/Epiphany week we are in.
  $today += 4;
  $week = $today / 7;
  
  if($week % 4 == 0) return "gen1";
  if($week % 4 == 1) return "gen2";
  if($week % 4 == 2) return "gen3";
  if($week % 4 == 3) return "gen4";
  
  // This shouldn't happen.
  return "Error: Did not correctly compute season.";
  
}

function getMatinsPsalms($day, $psalmTable){
  $season = getSeason(epochTime());
  $dow = dayOfWeek();
  if($season == "advent" || $season == "easter" || $season == "gen1" || $season == "gen2" ||
    $season == "gen3"   || $season == "gen4"   || $season == "lent"){
    $psalm1 = $psalmTable[$season][$dow]["morning"][0];  
  }else{ // It's a Christmas season
    $psalm1 = $psalmTable[$season]["morning"][0];
  } 
  if($dow == "0") $psalm2 = "150";
  else if($dow == "1") $psalm2 = "145";
  else if($dow == "2") $psalm2 = "146";
  else if($dow == "3") $psalm2 = "147:1-11";
  else if($dow == "4") $psalm2 = "147:12-20";
  else if($dow == "5") $psalm2 = "148";
  else $psalm2 = "149";
  return array($psalm1, $psalm2);
}

function getTercePsalm($day){
  // I want this to actually depend on the day of the week of the specified date. 
  $day *= 86400;
  $dow = date("w", $day);
  $r = "";
  if($dow == "0") $r = "1-32";
  else if($dow == "1") $r = "33-56";
  else if($dow == "2") $r = "57-80";
  else if($dow == "3") $r = "81-104";
  else if($dow == "4") $r = "105-128";
  else if($dow == "5") $r = "129-152";
  else $r = "153-76";
  return "119:" . $r;
}

/* ---- These functions will do the work of calculating the psalms for each office. Better than what I am currently doing.
function getSextPsalm($day){

}

function getNonePsalm($day){
}

function getVespersPsalms($day){
}

function getComplinePsalm($day){
  // Alright, admit this one is kinda pointless. It always returns the same psalm...
  return 4;
}


*/




?>