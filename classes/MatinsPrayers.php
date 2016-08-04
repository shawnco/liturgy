<?php

/**
 * Prayers for Matins.
 * 
 * Mon-Sat this is simply the weekly collect from BCP, morning prayer from POP, and collect for grace.
 * Sun SKIP the kyrie and add the litany before the upper three.
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */

class MatinsPrayers extends Element {
     protected $name = 'Prayers';
     
     public function __construct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
          $this->showName();
          if($this->season['day'] == 0){
               $this->litany();
          }
          $this->cecho($this->weeklyCollect());
          $this->cecho($this->morningPrayer());
          $this->cecho('O Lord, our heavenly Father, almighty and everlasting God, you have safely brought us to the beginning of this day. Defend us in the same with your mighty power and grant that this day we fall into no sin, neither run into any kind of danger, but that all our doings, being ordered by your governance, may be righteous in your sight; through Jesus Christ, your son, our Lord, who lives and reigns with you and the Holy Spirit, one God, now and forever, amen.');
     }
     
     // Only used on Sundays
     private function litany(){}
     
     // From the Book of Common Prayer
     private function weeklyCollect(){
          // TODO: Complete this. Right now we're going to be in Ordinary and Advent for some time. Put those in for testing.
          $collects = array(
              'ordinary' => array(
                  'Remember, O Lord, what you have wrought in us and not
what we deserve; and, as you have called us to your service,
make us worthy of our calling; through Jesus Christ our Lord,
who lives and reigns with you and the Holy Spirit, one God,
now and for ever. Amen.',
                  'Almighty and merciful God, in your goodness keep us, we
pray, from all things that may hurt us, that we, being ready both in mind and body, may accomplish with free hearts
those things which belong to your purpose; through Jesus
Christ our Lord, who lives and reigns with you and the Holy
Spirit, one God, now and for ever. Amen. ',
                  'Grant, O Lord, that the course of this world may be
peaceably governed by your providence; and that your
Church may joyfully serve you in confidence and serenity;
through Jesus Christ our Lord, who lives and reigns with you
and the Holy Spirit, one God, for ever and ever. Amen.',
                  'O God, your never-failing providence sets in order all things
both in heaven and earth: Put away from us, we entreat you,
all hurtful things, and give us those things which are profitable
for us; through Jesus Christ our Lord, who lives and reigns
with you and the Holy Spirit, one God, for ever and ever.
Amen.',
                  'O God, from whom all good proceeds: Grant that by your
inspiration we may think those things that are right, and by
your merciful guiding may do them; through Jesus Christ our
Lord, who lives and reigns with you and the Holy Spirit, one
God, for ever and ever. Amen.',
                  'Keep, O Lord, your household the Church in your steadfast
faith and love, that through your grace we may proclaim
your truth with boldness, and minister your justice with
compassion; for the sake of our Savior Jesus Christ, who
lives and reigns with you and the Holy Spirit, one God, now
and for ever. Amen.',
                  'O Lord, make us have perpetual love and reverence for your
holy Name, for you never fail to help and govern those whom
you have set upon the sure foundation of your loving-kindness;
through Jesus Christ our Lord, who lives and reigns with you
and the Holy Spirit, one God, for ever and ever. Amen.',
                  'Almighty God, you have built your Church upon the
foundation of the apostles and prophets, Jesus Christ himself
being the chief cornerstone: Grant us so to be joined together
in unity of spirit by their teaching, that we may be made a
holy temple acceptable to you; through Jesus Christ our Lord,
who lives and reigns with you and the Holy Spirit, one God,
for ever and ever. Amen.',
                  'O God, you have taught us to keep all your commandments
by loving you and our neighbor: Grant us the grace of your
Holy Spirit, that we may be devoted to you with our whole heart, and united to one another with pure affection; through
Jesus Christ our Lord, who lives and reigns with you and the
Holy Spirit, one God, for ever and ever. Amen. ',
                  'O Lord, mercifully receive the prayers of your people who
call upon you, and grant that they may know and understand
what things they ought to do, and also may have grace and
power faithfully to accomplish them; through Jesus Christ
our Lord, who lives and reigns with you and the Holy Spirit,
one God, now and for ever. Amen.',
                  'Almighty God, the fountain of all wisdom, you know our
necessities before we ask and our ignorance in asking: Have
compassion on our weakness, and mercifully give us those
things which for our unworthiness we dare not, and for our
blindness we cannot ask; through the worthiness of your Son
Jesus Christ our Lord, who lives and reigns with you and the
Holy Spirit, one God, now and for ever. Amen.',
                  'O God, the protector of all who trust in you, without whom
nothing is strong, nothing is holy: Increase and multiply upon
us your mercy; that, with you as our ruler and guide, we may so
pass through things temporal, that we lose not the things eternal;
through Jesus Christ our Lord, who lives and reigns with you
and the Holy Spirit, one God, for ever and ever. Amen.',
                  'Let your continual mercy, O Lord, cleanse and defend your
Church; and, because it cannot continue in safety without
your help, protect and govern it always by your goodness;
through Jesus Christ our Lord, who lives and reigns with you
and the Holy Spirit, one God, for ever and ever. Amen.',
                  'Grant to us, Lord, we pray, the spirit to think and do always
those things that are right, that we, who cannot exist without
you, may by you be enabled to live according to your will;
through Jesus Christ our Lord, who lives and reigns with you
and the Holy Spirit, one God, for ever and ever. Amen.',
                  'Almighty God, you have given your only Son to be for us a
sacrifice for sin, and also an example of godly life: Give us
grace to receive thankfully the fruits of this redeeming work,
and to follow daily in the blessed steps of his most holy life;
through Jesus Christ your Son our Lord, who lives and reigns
with you and the Holy Spirit, one God, now and for ever.
Amen.'
              ),
              'advent' => array(
                  
              )
          );
          return $collects[$this->season['season']][$this->season['week']];
     }
     
     // From the Portals of Prayer booklet
     private function morningPrayer(){
          $prayers = array(
              'Risen Savior, we come before you with great joy in our hearts, as we exlcaim with the psalmist, "Let us go to the house of the Lord!" We thank you for the privilege of gathering for worship with our brothers and sisters in Christ. We are richly blessed each time we come together to sing praises to your holy name and to receive anew, through your Word and Sacraments, the blessings you earned for us through your victorious death and resurrection. Fill us with your grace and Sprit this day, that we may be beacons of your light, love, and saving grace in our daily life and relationships.',
              'Gracious God, you have promised to watch over our coming and going each day and forevermore. Grant us your grace and guidance as we carry out our calling and vocation in life this week. Whatever we do, may we do it to your glory, for the good of those around us, and for the growth of your kingdom. Fill us anew with your love, joy, peace, patience, kindness, goodness, faithfulness, gentleness, and self-control. Help us to reflect these fruits of your Spirit in all of our words, attitudes, and actions. And when we are blessed with success, may we give you all glory, honor, and praise.',
              'Dear Lord, as I rise on this new day, I thank you for preserving me through the night, for guarding me from danger, and for giving me rest. As I make my beginning in you, I ask that all of my interactions with others today would be pleasing to you, that I may generously share your love. Guide me in my work so that I don\'t become overburdened by the challenges of the day, but rahter help me to do my best and trust that you will provide the results. Give me wisdom in times of confusion, creativity in times of new beginnings, and persistence in times of frustration. Go with me as I seek to do your will.',
              'Dearest Jesus as I begin my day, I thank you for your Word, through which I learn of your love and kindness. Give me grace this day to trust in your promises and cling to them. I pray that your Word would pass from my reading and understanding to my doing and living. Help me to be a faithful worker, to be reliable and trustworthy, to be worthy of my hire, and to embrace the vocations you have given me. Help me to rejoice in these tasks, knowing that even the lowliest job can be a testament to your grace in my life as I fulfill my roles as student, worker, classmate, disciple, friend, and more. Go with me through all of my tasks this day.',
              'Gracious God, I praise you for your mercies, which are new every morning. I begin this day asking for your forgiveness, that I might live in the light of your grace the whole day. May I not take the time you give me for granted, but realize that it is a gift from you. Therefore, may I glorify you in all that I do today. Move me to seize the opportunities to share your Word with those whom I encounter who do not know you. May I trust in your constant presence. What a comfort to know that I do not face anything this day without you. Please grant me your joy and peace all the days of my life.',
              'Heavenly Father, today I wake to a new day you have given me. May I be faithful to you as I interact with others today. May I be patient with them as you have been patient with me. May I show kindness and compassion as you have shown to me. May I forgive as you have forgiven me. May I love people sacrificially as your Son has loved me. When I fail, please forgive me for Jesus\'s sake. May I always view others as people whom you love and for whom Jesus died. I thank you for those you have placed in my life who have encouraged me to grow in my Christian faith.',
              'God of time, I thank you for the night now past and the sleep you have given me. I do not know what this day will hold for me, but you do. If it is your will, may I complete all that I need to do today. If it is not your will, then may I humbly accept it. Help me to realize that life is about you, not about me. May I focus on you, not on me. May you be the center of my life out of which everything else flows. Please forgive me when I put myself above you. May I not become my own idol, but rather genuinely serve you as the true God of my life.'
          );
          return $prayers[$this->season['day']];
          
     }
}

?>
