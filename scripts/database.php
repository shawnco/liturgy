<?php
/* // Ever been so lazy you could not be bothered to delete a few lines?
require 'dbinfo.php';

// Returns the current church season.
function getSeason(){
  $conn = new PDO("mysql:host=localhost;dbname=shawntc_testing", "shawntc_shawntc", "daftpunk1");
  $query = $conn->prepare("SELECT season FROM plg_church_season");
  $query->execute();
  $result = $query->fetch(PDO::FETCH_ASSOC);
  $conn = null;
  return $result["season"];	// This should work.
}

// Updates the church season based upon user input.
// Assumes a POST variable named "season" has been submitted.
function updateSeason(){
  $conn = new PDO("mysql:host=localhost;dbname=shawntc_testing", "shawntc_shawntc", "daftpunk1");
  $update = $conn->prepare("UPDATE plg_church_season SET season = :season");
  $update->bindParam(":season", $_POST["season"], PDO::PARAM_STR);
  $update->execute();
  $conn = null;  
}
*/
?>