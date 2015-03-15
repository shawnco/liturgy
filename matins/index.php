<?php

$pageTitle = "Matins";
$pageHead = "Matins";
require("/../template/template-top.php");
require("/../scripts/functions.php");
$season = getSeasonNew();
$dow = dayOfWeek();
$today = epochTime();
$psalms = getMatinsPsalms($today, $psalmTable);
?>

<p><b>Versicles</b><br />
  <?php
  lecho("O Lord, open my lips.");
  cecho("And my mouth will declare your praise.");
  lecho("Make haste, O God, to deliver me.");
  cecho("Make haste to help me, O Lord. Glory be to the Father and to the Son and to the Holy Spirit; as it was in the beginning, is now, and will be forever. Amen.");
  if($season == "advent")
    cecho("Praise to you, O Christ, King who comes to save us.");
  else if($season == "lent")
    cecho("Praise to you, O Christ, Lamb of our salvation.");
  else
    cecho("Praise to you, O Christ, alleluia.");
  ?>
</p>

<p><b>Venite</b><br />
  <?php
  lecho("Blessed be God the Father, the Son, and the Holy Spirit.");
  cecho("O come, let us worship him.");
  lecho(
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
  lecho("Blessed be God the Father, the Son, and the Holy Spirit.");
  cecho("O come, let us worship him.");
   ?>
</p>

<p><b>Psalmoldy</b><br />
  <iframe src="https://www.biblegateway.com/passage/?search=psalm+<?php echo $psalms[0]; ?>;+psalm+<?php echo $psalms[1]; ?>&version=NASB" width="80%" height="300px"></iframe>
</p>

<p><b>Hymn</b><br />

</p>

<p><b>Readings</b><br />

  <?php
  if($dow == "0")
    $r = "<b>Revelation 7:10, 12:</b> Salvation to our God who sits on the throne, and to the Lamb. Blessing and glory and wisdom and thanksgiving and honor and power and might, be to our God forever and ever. Amen.";
  else if($dow == "1")
    $r = "<b>James 2:12-13:</b> So speak and so act as those who are to be judged by the law of liberty. For judgment will be merciless to one who has shown no mercy; mercy triumphs over judgment.";
  else if($dow == "2")
    $r = "<b>1 Thessalonians 5:4-5:</b> But you, brethren, are not in darkness, that the day would overtake you like a thief; for you are all sons of light and sons of day. We are not of night nor of darkness.";
  else if($dow == "3")
    $r = "<b>Romans 8:35, 37:</b> Who will separate us from the love of Christ? Will tribulation, or distress, or persecution, or famine, or nakedness, or peril, or sword? No, in all these things we overwhelmingly conquer through Him who loved us.";
  else if($dow == "4")
    $r = "<b>1 Peter 4:10-11:</b> As each one has received a special gift, employ it in serving one another as good stewards of the manifold grace of God. Whoever serves is to do so as one who is serving by the strength which God supplies; so that in all things God may be glorified through Jesus Christ.";
  else if($dow == "5")
    $r = "<b>Ephesians 4:29-32:</b> Let no unwholesome word proceed from your mouth, but only such a word as is good for edification according to the need of the moment, so that it will give grace to those who hear. Do not grieve the Holy Spirit of God, by whom you were sealed for the day of redemption. Let all bitterness and wrath and anger and clamor and slander be put away from you, along with all malice. Be kind to one another, tender-hearted, forgiving each other, just as God in Christ also has forgiven you.";
  else
    $r = "<b>2 Peter 1:10-11:</b> Therefore, brethren, be all the more diligent to make certain about His calling and choosing you; for as long as you practice these things, you will never stumble; for in this way the entrance into the eternal kingdom of our Lord and Savior Jesus Christ will be abundantly supplied to you.";
    
  lecho($r);  
  lecho("O Lord, have mercy on us.");
  cecho("Thanks be to God.");
  ?>
</p>

<p><b>Responsory</b><br />
  <?php 
  if($season == "lent"){
    $refrain = "He was delivered up to death. He was delivered for the sins of the people.";
    $l1 = "We have an advocate with the Father; Jesus is the propitiation for our sins.";
    $l2 = "Blessed is he whose transgression is forgiven and whose sin is put away.";
    $l3 = $l1;
  }else if($season == "easter"){
    $refrain = "Give to the Lord all glory and strength, give him the honor due his name. Alleluia, alleluia.";
    $l1 = "Sing to the Lord and bless his name, proclaim his salvation from day to day.";
    $l2 = "Now is Christ risen from the dead and become the firstfruits of them that sleep.";
    $l3 = "Glory be to the Father and to the Son and to the Holy Spirit.";
  }else{
    $refrain = "Lord, I love the habitation of your house and the place where your glory dwells.";
    $l1 = "Forever, O Lord, your word is firmly set in the heavens.";
    $l2 = "Blessed are those who hear the Word of God and keep it.";
    $l3 = "Glory be to the Father and to the Son and to the Holy Spirit.";
  }
  lecho($l1);
  cecho($refrain);
  lecho($l2);
  cecho($refrain);
  lecho($l3);
  cecho($refrain); 
  ?>
</p>

<p><b>Sermon</b><br />
  <iframe src="http://www.lhm.org/dailydevotions.asp" height="300px" width="80%"></iframe>
</p>


<p><b>Canticle</b><br />
  <?php 
  if($today % 2 == 0){
    echo "<i>Te Deum</i><br />";
    lecho(
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
  }else{
    echo "<i>Benedictus</i><br />";
    lecho(
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
   } 
  ?>
</p>

<p><b>Kyrie</b><br />
  <?php
  lecho("Lord, have mercy; Christ, have mercy; Lord have mercy.");
  ?>
</p>

<p><b>Lord's Prayer</b><br />
  <?php
  if($today % 3 == 0){
    //audio("matins","lords-prayer-196");
    cecho("Our Father who art in heaven, hallowed be thy name. Thy kindgom come, thy will be done on Earth as it is in heaven; Give us this day our daily bread; and forgive us our trespasses as we forgive those who trespass against us; and lead us not into temptation, but deliver us from evil. For thine is the kingdom and the power and the glory forever and ever. Amen.");
  }else if($today % 2 == 0){
    //audio("matins","lords-prayer-957");
    cecho("Our Father who art in heaven, hallowed be thy name. Thy kindgom come, thy will be done on Earth as it is in heaven; Give us this day our daily bread; and forgive us our trespasses as we forgive those who trespass against us; and lead us not into temptation, but deliver us from evil. For thine is the kingdom and the power and the glory forever and ever. Amen.");
  }else{
    cecho("Our Father in heaven, hollowed be your name. Your kingdom come, your will be done on Earth as it is in heaven. Give us today our daily bread. Forgive our sins, as we forgive those who sin against us. Lead us not into temptation, but deliver us from evil. For the kingdom, the power, and the glory are yours now and forever. Amen.");
  } 
  ?>
</p>

<p><b>Salutation</b><br />
  <?php
  if($today % 2 == 0){
    lecho("O Lord, hear my prayer.");
    cecho("And let my cry come to you.");
  }else{
    lecho("The Lord be with you.");
    cecho("And with your spirit.");
  }
  ?>
</p>

<p><b>Devotional Prayer</b></p>

<p><b>Collect for the Day</b><br />
  <?php
    if($dow == "0")
      $collect = "Merciful Father, You have given Your only Son as the sacrifice for sinners. Grant us grace to receive the fruits of His redeeming work with thanksgiving and daily to follow in His way.";
    else if($dow == "1")
      $collect = "Eternal God, Your Son Jesus Christ is our true Sabbath rest. Help us to keep each day holy by receiving His Word of comfort 	that we may find our rest in Him.";
    else if($dow == "2")
      $collect = "Almighty and eternal God, Your Son Jesus triumphed over the prince of demons and freed us from bondage to sin. Help us to stand firm against every assault of Satan, and enable us always to do Your will.";
    else if($dow == "3")
      $collect = "Blessed Lord, since You have caused all Holy Scriptures to be written for our learning, grant that we may so hear them, read, mark, learn, and inwardly digest them that we may embrace and ever hold fast the blessed hope of everlasting life.";
    else if($dow == "4")
      $collect = "O God, Your almighty power is made known chiefly in showing mercy. Grant us the fullness of Your grace that we may be called to repentance and made partakers of Your heavenly treasures.";
    else if($dow == "5")
      $collect = "Heavenly Father, though we do not deserve Your goodness, still You provide for all our needs of body and soul. Grant us Your Holy Spirit that we may acknowledge Your gifts, give thanks for all Your benefits, and serve You in willing obedience.";
    else
      $collect = "Gracious Father, Your blessed Son came down from heaven to be the true bread that gives life to the world. Grant that Christ, the Bread of Life, may live in us and we in Him.";
    lecho($collect);
  ?>
</p>

<p><b>Collect for Grace</b><br />
  <?php
  lecho("O Lord, our heavenly Father, almighty and everlasting God, you have safely brought us to the beginning of this day. Defend us in the same with your mighty power and grant that this day we fall into no sin, neither run into any kind of danger, but that all our doings, being ordered by your governance, may be righteous in your sight; through Jesus Christ, your son, our Lord, who lives and reigns with you and the Holy Spirit, one God, now and forever.");
  cecho("Amen.");
  ?>
</p>

<p><b>Benedicamus & Benediction</b><br />
  <?php 
    lecho("Let us bless the Lord.");
    cecho("Thanks be to God.");
    lecho("The grace of our Lord Jesus Christ and the love of God and the communion of the Holy Spirit be with you all.");
    cecho("Amen."); 
  ?>
</p>

<?php require("/../template/template-bottom.php"); ?>