<?php 

$pageTitle = "Vespers";
$pageHead = "Vespers";
require("/../template/template-top.php");
require("/../scripts/functions.php");
$days = epochTime();
$season = getSeason($days);
$dow = dayOfWeek();
$psalms = getVespersPsalms($dow, $psalmTable);


?>

  <p>
     <b>Versicles</b><br />
     <?php 
       audio("vespers","versicles");
       lecho("O Lord, open my lips");
       cecho("And my mouth will declare Your praise");
       lecho("Make haste, O God, to deliver me");
       cecho("Make haste to help me, O Lord");
       cecho("Glory be to the Father and to the Son and to the Holy Spirit; as it was in the beginning, is now, and will be forever. Amen.");
       if($season == "advent") $response = "Praise to you, O Christ, King who comes to save us";
       else if($season == "lent") $response = "Praise to you, O Christ, Lamb of our salvation";
       else $response = "Praise to you, O Christ, alleluia";
       cecho($response); 
       ?>
  </p>
  
  <p>
    <b>Psalmoldy</b>
    <br /><iframe src="https://www.biblegateway.com/passage/?search=psalm+<?php echo $psalms[0]; ?>%3B+psalm+<?php echo $psalms[1]; ?>%3B+&version=NASB" width="80%" height="300px"></iframe>
  </p>

  <p>
    <b>Reading of the Day</b>
    <br /><iframe src="http://www.biblegateway.com" width="80%" height="300px"></iframe>
  </p>
    
  <p>
    <b>Responsory</b><br />
     <?php 
       audio("vespers","responsory");
       if($season == "advent"){
         $refrain = "This is the name by which He will be called: The Lord is Our Righteousness";
         lecho("Behold, the days are coming, say the Lord, when I will raise up for David a righteous Branch");
         cecho($refrain);
         lecho("In His days Judah will be saved, and Israel will dwell securely");
         cecho($refrain);
         lecho("Glory be to the Father and to the Son and to the Holy Spirit");
         cecho($refrain);
       }else if($season == "lent"){
         $refrain = "Rescue me from my enemies, protect me from those who rise against me";
         lecho("Deliver me, O Lord, my God, for You are the God of my salvation");
         cecho($refrain);
         lecho("In You, O Lord, do I put my trust, leave me not, O Lord, my God");
         cecho($refrain);
         lecho("Deliver me, O Lord, my God, for You are the God of my salvation");
         cecho($refrain);
       }else{
         $refrain = "Your Word is a lamp to my feet and a light to my path.";
         lecho("Teach me Your way, O Lord, that I may walk in Your Truth");
         cecho($refrain);
         lecho("Unite my heart to fear Your name that I may walk in Your Truth");
         cecho(refrain);
         lecho("Glory be to the Father and to the Son and to the Holy Spirit");
         cecho($refrain);
       } 
     ?>
  </p>
  
  <p>
    <b>Message or Catechetical Instruction</b>
  </p>
  
  <p>
    <b>Magnificat</b><br />
      <?php 
        audio("vespers","magnificat");
        lecho("Let my prayer rise before you as incense.");
        cecho("And the lifting up of my hands at the evening sacrifice");
        cecho("My soul magnifies the Lord, and my spirit rejoices in God, my Savior");
        lecho("For He has regarded the lowliness of his hand-maiden");
        cecho("For behold, from this day all generations will call me blessed");
        lecho("For the Mighty One has done great things to me, and holy is his name");
        cecho("And his mercy is on those who fear him from generation to generation");
        lecho("He has shown strength with his arm; he has scattered the proud in the imagination of their hearts");
        cecho("He has cast down the mighty from their thrones and has exalted the lowly");
        lecho("He has filled the hungry with good things, and the rich he has sent empty away");
        cecho("He has helped his servant Israel in remembrance of his mercy as he spoke to our fathers, to Abraham and to his seed forever");
        cecho("Glory be to the Father and to the Son and to the Holy Spirit; as it was in the beginning, is now and will be forever. Amen."); 
      ?>
  </p>
  
  <p>
    <b>Kyrie</b><br />
     <?php 
       audio("vespers","kyrie");
       cecho("Lord, have mercy. Christ, have mercy. Lord, have mercy."); 
     ?>
  </p>
  
  <p>
    <b>Lord's Prayer</b><br />
      <?php 
        if($days % 3 == 0){
          cecho("Our Father in heaven, hollowed be your name. Your kingdom come, your will be done on Earth as it is in heaven. Give us today our daily bread. Forgive our sins, as we forgive those who sin against us. Lead us not into temptation, but deliver us from evil. For the kingdom, the power, and the glory are yours now and forever. Amen.");
        }else if($days % 2 == 0){
          audio("vespers","lords-prayer-196");
          cecho("Our Father who are in heaven, hallowed be thy name. Thy kindgom come, thy will be done on Earth as it is in heaven; Give us this day our daily bread; and forgive us our trespasses as we forgive those who trespass against us; and lead us not into temptation, but deliver us from evil. For thine is the kingdom and the power and the glory forever and ever. Amen.");
        }else{
          audio("vespers","lords-prayer-957");
          cecho("Our Father who are in heaven, hallowed be thy name. Thy kindgom come, thy will be done on Earth as it is in heaven; Give us this day our daily bread; and forgive us our trespasses as we forgive those who trespass against us; and lead us not into temptation, but deliver us from evil. For thine is the kingdom and the power and the glory forever and ever. Amen.");    
        } 
      ?>
  </p>
  
  <p>
    <b>Salutation</b><br />
    <?php 
      audio("vespers","salutation");
      if($days % 2 == 0){
        lecho("The Lord be with you");
        cecho("And with your spirit");
      }else{
        lecho("O Lord, hear my prayer");
        cecho("And let my cry come to you");
      } 
    ?>
  </p>
  
  <p>
    <b>Devotional Prayer</b>
  </p>
  
  <p>
    <b>Prayer for the Day</b><br />
    <?php
    
    if($dow == 0){
      $prayerOTD = "Dear Lord, this is the day we rest from work and celebrate Jesus's resurrection. You raised Jesus back to life, and you also give use new life through him. Continue to enable us to live in a way that is pleasing and honorable to you.";
    }else if($dow == 1){
      $prayerOTD = "Almighty God, you have given your church the task of being your witnesses to the world. Help us shine our lights, so that the world may come to you.";
    }else if($dow == 2){
      $prayerOTD = "Merciful Father, life is full of trouble and pain. You promise to comfort us through the Holy Spirit. Send your Spirit so we can be strengthened to endure both the good and bad in life.";
    }else if($dow == 3){
      $prayerOTD = "Creator of the universe, we acknowledge that nothing we own is truly ours. You give us possessions to manage as your stewards. Give us wisdom to use these things in a way that glorifies you.";
    }else if($dow == 4){
      $prayerOTD = "Incredible Lord, despite your endless grace we have sinned and ignored your will many times today. Convict us where we go wrong, and lead us in the path of righteousness.";
    }else if($dow == 5){
      $prayerOTD = "Judge of mankind, you give everyone a limited amount of time on this Earth. Help us to serve You dutifully in the time we have, that we may be found holy and free from sin.";
    }else{ // Useful to catch Saturdays, as well as general errors.
      $prayerOTD = "Eternal God, you are a source of awe and wonder. Let this reverence permeate our lives, so that we operate in a manner that reflects it.";
    }
    lecho($prayerOTD);
    
    ?>
  </p>
   
  <p>
     <b>Collect for Peace</b><br />
     <?php
       lecho("O God, from whom come all holy desires, all good counsels, and all just works, give to us, your servants, that peace which the world cannot give, that our hearts may be set to obey your commandments and also that we, being defended from the fear of our enemies, may live in peace and quietness; through Jesus Christ, Your Son, our Lord, who lives and reigns with you and the Holy Spirit, one God, now and forever.");
       cecho("Amen.");
     ?>
  </p>
  
  <p>
    <b>Benedicamus and Benediction</b><br />
      <?php
        audio("vespers","benedicamus-benediction");
        lecho("Let us bless the Lord");
        cecho("Thanks be to God");
        lecho("The grace of our Lord Jesus Christ and the love of God and the communion of the Holy Spirit be with you all");
        cecho("Amen.");
      ?>
  </p>
     
</div>
<?php disclaimer(); require("/../template/template-bottom.php"); ?>