<?php

$pageTitle = "Compline";
$pageHead = "Compline";
require("/../template/template-top.php");
require("/../scripts/functions.php");
$season = getSeasonNew();
$days = epochTime();
$dayOfWk = dayOfWeek();
$psalm = getComplinePsalm();

// Table of prayers.
$prayers = array(
  1 => "Be present, merciful God, and protect us through the hours of this night, so that we who are wearied by the changes and chances of life may find our rest in you; through Jesus Christ, our Lord.",
  2 => "O Lord, support us all the day long of this troubled life, until the shadows lengthen and the evening comes and the busy world is hushed, the fever of life is over, and our work is done. Then, Lord, in your mercy grant us a safe lodging and a holy rest and peace at the last; through Jesus Christ, our Lord.",
  3 => "Be our light in the darkness, O Lord, and in your great mercy defend us from all perils and dangers of this night; for the love of your only Son, Jesus Christ, our Lord.",
  4 => "Visit our dwellings, O Lord, and drive from them all the snares of the enemy; let your holy angels dwell with us to preserve us in peace; and let your blessing be on us always; through Jesus Christ, our Lord.",
  5 => "Eternal God, the hours both of day and night are yours, and to you the darkness is no threat. Be present, we pray, with those who labor in these hours of night, especially those who watch and work on behalf of others. Grant them diligence in their watching, faithfulness in their service, courage in danger, and competence in emergencies. Help them to meet the needs of others with confidence and compassion; through Jesus Christ, our Lord.",
  6 => "Abide with us, Lord, for it is toward evening, and the day is far spent. Abide with us and with your whole Church. Abide with us with your grace and goodness, with your holy Word and Sacrament, with your strength and blessing. Abide with us when the night of affliction and temptation comes upon us, the night of fear and despair, the night when death draws near. Abide with us and with all the faithful, now and forever."
);

// Array of combos.
$combos = array(
  [1,2], [2,3], [3,4], [4,5], [5,6],
  [1,3], [2,4], [3,5], [4,6],
  [1,4], [2,5], [3,6],
  [1,5], [2,6],
  [1,6]
);



// Table of verses.
$verses = array(
  1 => '<b>Jeremiah 14:9:</b> "Why are You like a man dismayed, Like a mighty man who cannot save? Yet You are in our midst, O LORD, And we are called by Your name; Do not forsake us!"',
  2 => "<b>Micah 7:18-19:</b> Who is a God like You, who pardons iniquity And passes over the rebellious act of the remnant of His possession? He does not retain His anger forever, Because He delights in unchanging love.",
  3 => '<b>Matthew 11:28-30:</b> "Come to Me, all who are weary and heavy-laden, and I will give you rest."',
  4 => "<b>John 14:27:</b> Peace I leave with you; My peace I give to you; not as the world gives do I give to you. Do not let your heart be troubled, nor let it be fearful.",
  5 => "<b>Romans 8:38-39:</b> For I am convinced that neither death, nor life, nor angels, nor principalities, nor things present, nor things to come, nor powers, nor height, nor depth, nor any other created thing, will be able to separate us from the love of God, which is in Christ Jesus our Lord.",
  6 => "<b>1 Peter 5:6-9a:</b> Therefore humble yourselves under the mighty hand of God, that He may exalt you at the proper time, casting all your anxiety on Him, because He cares for you. Be of sober spirit, be on the alert. Your adversary, the devil, prowls around like a roaring lion, seeking someone to devour. But resist him, firm in your faith, knowing that the same experiences of suffering are being accomplished by your brethren who are in the world.",
  7 => "<b>Revelation 22:4-5:</b> They will see His face, and His name will be on their foreheads. And there will no longer be any night; and they will not have need of the light of a lamp nor the light of the sun, because the Lord God will illumine them; and they will reign forever and ever.",
  8 => "<b>1 Thessalonians 5:9-10:</b> For God has not destined us for wrath, but for obtaining salvation through our Lord Jesus Christ, who died for us, so that whether we are awake or asleep, we will live together with Him.",
  9 => "<b>Ephesians 4:26-27:</b> BE ANGRY, AND yet DO NOT SIN; do not let the sun go down on your anger, and do not give the devil an opportunity.",
 10 => "<b>1 Thessalonians 5:23:</b> Now may the God of peace Himself sanctify you entirely; and may your spirit and soul and body be preserved complete, without blame at the coming of our Lord Jesus Christ.",
 11 => "<b>Deuteronomy 6:4-7:</b> 'Hear, O Israel! The LORD is our God, the LORD is one! You shall love the LORD your God with all your heart and with all your soul and with all your might. These words, which I am commanding you today, shall be on your heart. You shall teach them diligently to your sons and shall talk of them when you sit in your house and when you walk by the way and when you lie down and when you rise up.'"
);

$vCombos = array( // This will be long.
  [1,2],[2,3],[3,4],[4,5],[5,6],[6,7],[7,8],[8,9],[9,10],[10,11],
  [1,3],[2,4],[3,5],[4,6],[5,7],[6,8],[7,9],[8,10],[9,11],
  [1,4],[2,5],[3,6],[4,7],[5,8],[6,9],[7,10],[8,11],
  [1,5],[2,6],[3,7],[4,8],[5,9],[6,10],[7,11],
  [1,6],[2,7],[3,8],[4,9],[5,10],[6,11],
  [1,7],[2,8],[3,9],[4,10],[5,11],
  [1,8],[2,9],[3,10],[3,11],
  [1,9],[2,10],[2,11],
  [1,10],[2,11],  
  [1,11]
);


?>

  
  <p><b>Versicles</b><br />
    <?php
    audio("compline","versicles");
    lecho("The Lord Almighty grant us a quiet night and peace at the last");
    cecho("Amen");
    lecho("It is good to give thanks to the Lord");
    cecho("To sing praise to your name, O Most High");
    lecho("To herald your love in the morning");
    cecho("Your truth at the close of the day");
    ?>
  </p>
  
  <p><b>Confession</b><br />
    <?php
    lecho("Let us confess our sins in the presence of God and of one another");
    echo "<i>Silence for self-examination</i><br />";
    if($days % 2 == 0){
      cecho("I confess to God Almighty, before the whole company of heaven and to you, my brothers and sisters, that I have sinned in thought, word, and deed by my fault, by my own fault, by my own most grievous fault; wherefore I pray God Almighty to have mercy on me, forgive me all my sins, and bring me to everlasting life. Amen.");
      lecho("The almighty and merciful Lord grant you pardon, forgiveness, and remission of all your sins. Amen.");
    }else{
      lecho("Holy and gracious God");
      cecho("I confess that I have sinned against you this day. Some of my sin I know - the thoughts and words and deeds of which I am ashamed - but some is known only to you. In the name of Jesus Christ I ask forgiveness. Deliver and restore me that I may rest in peace.");
      lecho("By the mercy of God we are redeemed by Jesus Christ, and in him we are forgiven. We rest now in his peace and rise in the morning to serve him.");
      cecho("Amen.");
    }
    ?>
  </p>
  
  <p><b>Psalmoldy</b><br />
    <iframe src="http://www.biblegateway.com/passage/?search=psalm+<?php echo $psalm; ?>&version=nasb" width="80%" height="300px"></iframe>
  </p>

  <p><b>Readings</b><br />
    <!-- Implement something to pick these. -->
    <?php 
      $pair = $days % 55;
      lecho($verses[$vCombos[$pair][0]]);
      lecho($verses[$vCombos[$pair][1]]);
    
    ?>
  </p>
  
  <p><b>Responsory</b><br />
    <?php
    audio("compline","responsory");
    lecho("Into your hands, O Lord, I commend my spirit");
    cecho("Into your hands, I commend my spirit.");
    lecho("You have redeemed me, O Lord, God of truth");
    cecho("Into your hands, I commend my spirit.");
    lecho("Glory be to the Father and to the Son and to the Holy Spirit");
    cecho("Into your hands, I commend my spirit.");
    ?>
  </p>
  
  <p><b>Prayer</b><br />
    <?php
    audio("compline","prayer");
    lecho("Hear my prayer, O Lord");
    cecho("Listen to my cry");
    lecho("Keep me as the apple of your eye");
    cecho("Hide me in the shadow of your wings");
    lecho("In righteousness I shall see you");
    cecho("When I awake, your presence will give me joy");
         
     // This will give us the address in $combos to use.
     $pair = $days % 15;
     lecho($prayers[$combos[$pair][0]]);
     lecho($prayers[$combos[$pair][1]]);
     
     //lecho($prayers[$combos[$x][0]]);
     //lecho($prayers[$combos[$x][1]]);
    cecho("Amen");
    ?>
  </p>
  
  <p><b>Lord's Prayer</b><br />
    <?php
    if($days % 3 == 0){
      audio("compline","lords-prayer-957");
      cecho("Our Father who are in heaven, hallowed be thy name. Thy kindgom come, thy will be done on Earth as it is in heaven; Give us this day our daily bread; and forgive us our trespasses as we forgive those who trespass against us; and lead us not into temptation, but deliver us from evil. For thine is the kingdom and the power and the glory forever and ever. Amen.");
    }else if($days % 2 == 0){
      cecho("Our Father in heaven, hollowed be your name. Your kingdom come, your will be done on Earth as it is in heaven. Give us today our daily bread. Forgive our sins, as we forgive those who sin against us. Lead us not into temptation, but deliver us from evil. For the kingdom, the power, and the glory are yours now and forever. Amen.");    
    }else{
      audio("compline","lords-prayer-196");
      cecho("Our Father who are in heaven, hallowed be thy name. Thy kindgom come, thy will be done on Earth as it is in heaven; Give us this day our daily bread; and forgive us our trespasses as we forgive those who trespass against us; and lead us not into temptation, but deliver us from evil. For thine is the kingdom and the power and the glory forever and ever. Amen.");
    }
    ?>
  </p>
  
  <p><b>Nunc Dimittis & Benediction</b><br />
    <?php
    audio("compline","nunc-dimittis-benediction");
    lecho("Guide us waking, O Lord, and guard us sleeping that awake we may watch with Christ and asleep  we may rest in peace");
    cecho("Lord, now you let your servant go in peace; your word has been fulfilled. My own eyes have seen the salvation which you have prepared in the sight of every people: a light to reveal you to the nations and the glory of your people Israel. Glory be to the Father and to the Son and to the Holy Spirit; as it was in the beginning, is now, and will be forever. Amen. Guide us waking, O Lord, and guard us sleeping that awake we may watch with Christ and asleep we may rest in peace.");
    lecho("The almighty and merciful Lord, the Father, the Son, and the Holy Spirit, bless you and keep you.");
    cecho("Amen");
    ?>
  </p>
  
  <?php disclaimer(); require("/../template/template-bottom.php"); ?>