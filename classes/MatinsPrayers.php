<?php

/**
 * Prayers for Matins.
 * 
 * Mon-Sat this is simply the weekly collect from BCP, morning prayer from POP, and collect for grace.
 * Sun SKIP the kyrie and add the litany before the upper three.
 *
 * @author Shawnco
 */

class MatinsPrayers extends Element {
     private $name = 'Prayers';
     
     public function __construct(){
          parent::__construct();
          $this->season = $this->getSeason();
     }
     
     public function display(){
          $this->showName();
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
              
          );
          return $prayers[$this->season['day']];
          
     }
}

?>
