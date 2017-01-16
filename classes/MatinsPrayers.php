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
          if($this->season['day'] !== 0){
              $this->cecho('Creator of all knowledge, bless my academic efforts. Give me focus and endurance to learn and understand course material, patience with homework, and humility to ask others for help.');
          }
          $this->cecho($this->morningPrayer());
          $this->cecho('O Lord, our heavenly Father, almighty and everlasting God, you have safely brought us to the beginning of this day. Defend us in the same with your mighty power and grant that this day we fall into no sin, neither run into any kind of danger, but that all our doings, being ordered by your governance, may be righteous in your sight; through Jesus Christ, your son, our Lord, who lives and reigns with you and the Holy Spirit, one God, now and forever.');
     }
     
     // Only used on Sundays
     private function litany(){
          $this->lecho('O Lord');
          $this->cecho('Have mercy');
          $this->lecho('O Christ');
          $this->cecho('Have mercy');
          $this->lecho('O Lord');
          $this->cecho('Have mercy');
          $this->lecho('O Christ');
          $this->cecho('Hear us');
          
          $this->lecho('God the Father in heaven');
          $this->cecho('Have mercy');
          $this->lecho('God the Son, Redeemer of the world');
          $this->cecho('Have mercy');
          $this->lecho('God the Holy Spirit');
          $this->cecho('Have mercy');
          
          $this->lecho('Be gracious to us');
          $this->cecho('Spare us, good Lord');
          $this->lecho('Be gracious to us');
          $this->cecho('Help us, good Lord');          
          
          $this->lecho('From all sin, from all error, from all evil; <br />
               From the crafts and assaults of the devil; from sudden and evil death; <br />
               From pestilence and famine; from war and bloodshed; from sedition and from rebellion; <br />
               From lightning and tempest; from all calamity by fire and water; and from everlasting death: ');
          $this->cecho('Good Lord, deliver us');
          $this->lecho('By the mystery of Your holy incarnation; by Your holy nativity; <br />
               By Your baptism, fasting, and temptation; by Your agony and bloody sweat; by Your cross and passion; by Your precious death and burial; <br />
               By Your glorious resurrection and ascension; and by the coming of the Holy Spirit, the Comforter: ');
          $this->cecho('Help us, good Lord');
          $this->lecho('In all time of our tribulation; in all time of our prosperity; in the hour of death; and in the day of judgment: ');
          $this->cecho('Help us, good Lord');
          $this->lecho('We poor sinners implore you');
          $this->cecho('To hear us, O Lord');
          
          $this->lecho('To rule and govern Your holy Christian Church; to preserve all pastors and ministers of Your Church in the true knowledge and understanding of Your wholesome Word and to sustain them in holy living; <br />
               To put an end to all schisms and causes of offense; to bring into the way of truth all who have erred and are deceived; <br />
               To beat down Satan under our feet; to send faithful laborers into Your harvest; and to accompany Your Word with Your grace and Spirit');
          $this->cecho('We implore you to hear us, good Lord');
          $this->lecho('To raise those who fall and to strengthen those who stand; and to comfort and help the weakhearted and the distressed: ');
          $this->cecho('We implore you to hear us, good Lord');
          
          $this->lecho('To give to all peoples concord and peace; to preserve our land from discord and strife; to give our country Your protection in every time of need; <br />
               To direct and defend our president and all in authority; to bless and protect our magistrates and all our people; <br />
               To watch over and help all who are in danger, necessity, and tribulation; to protect and guide all who travel; <br />
               To grant all women with child, and all mothers with infant children, increasing happiness in their blessings; to defend all orphans and widows and provide for them; <br />
               To strengthen and keep all sick persons and young children; to free those in bondage; and to have mercy on us all: ');
          $this->cecho('We implore you to hear us, good Lord');
          $this->lecho('To forgive our enemies, persecutors, and slanderers and to turn their hearts; to give and preserve for our use the kindly fruits of the earth; and graciously to hear our prayers: ');
          $this->cecho('We implore you to hear us, good Lord');
          
          $this->lecho('Lord Jesus Christ, Son of God:');
          $this->cecho('We implore you to hear us');
          
          $this->lecho('Christ, the Lamb of God, who takes away the sin of the world, ');
          $this->cecho('Have mercy');
          $this->lecho('Christ, the Lamb of God, who takes away the sin of the world, ');
          $this->cecho('Have mercy');
          $this->lecho('Christ, the Lamb of God, who takes away the sin of the world, ');
          $this->cecho('Grant us your peace');
          
          $this->lecho('O Christ');
          $this->cecho('Hear us');
          $this->lecho('O Lord');
          $this->cecho('Have mercy');
          $this->lecho('O Christ');
          $this->cecho('Have mercy');
          $this->lecho('O Lord');
          $this->cecho('Have mercy, amen.');
     }
     
     // From the Book of Common Prayer
     private function weeklyCollect(){
          // TODO: Complete this. Right now we're going to be in Ordinary and Advent for some time. Put those in for testing.
          $collects = array(
              'epiphany' => array(
                  '',
                  'Almighty God, whose Son our Savior Jesus Christ is the light
of the world: Grant that your people, illumined by your Word
and Sacraments, may shine with the radiance of Christ\'s
glory, that he may be known, worshiped, and obeyed to the
ends of the earth.',
                  'Give us grace, O Lord, to answer readily the call of our
Savior Jesus Christ and proclaim to all people the Good News
of his salvation, that we and the whole world may perceive
the glory of his marvelous works.',
                  'Almighty and everlasting God, you govern all things both in
heaven and on earth: Mercifully hear the supplications of
your people, and in our time grant us your peace.',
                  'Set us free, O God, from the bondage of our sins, and give us
the liberty of that abundant life which you have made known
to us in your Son our Savior Jesus Christ.',
                  'O God, the strength of all who put their trust in you:
Mercifully accept our prayers; and because in our weakness
we can do nothing good without you, give us the help of your
grace, that in keeping your commandments we may please
you both in will and deed.',
                  'O Lord, you have taught us that without love whatever we
do is worth nothing; Send your Holy Spirit and pour into our
hearts your greatest gift, which is love, the true bond of peace
and of all virtue, without which whoever lives is accounted
dead before you.',
                  'Most loving Father, whose will it is for us to give thanks for
all things, to fear nothing but the loss of you, and to cast all our care on you who care for us: Preserve us from faithless
fears and worldly anxieties, that no clouds of this mortal life
may hide from us the light of that love which is immortal,
and which you have manifested to us in your Son Jesus Christ
our Lord',
                  'O God, who before the passion of your only-begotten Son
revealed his glory upon the holy mountain: Grant to us that
we, beholding by faith the light of his countenance, may be
strengthened to bear our cross, and be changed into his
likeness from glory to glory.'
              ),
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
Amen.',
                  'Grant, O merciful God, that your Church, being gathered
together in unity by your Holy Spirit, may show forth your power among all peoples, to the glory of your Name; through Jesus Christ our Lord, who lives and reigns with you and the Holy Spirit, one God, for ever and ever. Amen. ',
                  'Lord of all power and might, the author and giver of all good things: Graft in our hearts the love of your Name; increase in us true religion; nourish us with all goodness; and bring forth in us the fruit of good works; through Jesus Christ our Lord, who lives and reigns with you and the Holy Spirit, one God, for ever and ever. Amen.',
                  'Grant us, O Lord, to trust in you with all our hearts; for, as you always resist the proud who confide in their own strength, so you never forsake those who make their boast of your mercy; through Jesus Christ our Lord, who lives and reigns with you and the Holy Spirit, one God, now and for ever. Amen.',
                  'O God, because without you we are not able to please you, mercifully grant that your Holy Spirit may in all things direct and rule our hearts; through Jesus Christ our Lord, who lives and reigns with you and the Holy Spirit, one God, now and for ever. Amen.',
                  'Grant us, Lord, not to be anxious about earthly things, but to love things heavenly; and even now, while we are placed among things that are passing away, to hold fast to those that shall endure; through Jesus Christ our Lord, who lives and reigns with you and the Holy Spirit, one God, for ever and ever. Amen.'
              ),
              'advent' => array(
                  'Almighty God, give us grace to cast away the works of
darkness, and put on the armor of light, now in the time of
this mortal life in which your Son Jesus Christ came to visit
us in great humility; that in the last day, when he shall come
again in his glorious majesty to judge both the living and the
dead, we may rise to the life immortal.',
                  'Merciful God, who sent your messengers the prophets to
preach repentance and prepare the way for our salvation:
Give us grace to heed their warnings and forsake our sins,
that we may greet with joy the coming of Jesus Christ our
Redeemer.',
                  'Stir up your power, O Lord, and with great might come
among us; and, because we are sorely hindered by our sins,
let your bountiful grace and mercy speedily help and deliver
us.',
                  'Purify our conscience, Almighty God, by your daily visitation,
that your Son Jesus Christ, at his coming, may find in us a
mansion prepared for himself.'
              )
          );
          return $collects[$this->season['season']][$this->season['week']-1];
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
