<?php
/**
 * Prayers at Vespers
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class VespersPrayers extends Element {
     protected $name = 'Prayers';
     
     public function __construct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
          $this->showName();
          $this->cecho($this->breviaryCollect());
          $this->cecho($this->eveningPrayer());
          $this->cecho('O God, from whom come all holy desires, all good counsels, and all just works, give to us, your servants, that peace which the world cannot give, that our hearts may be set to obey your commandments and also that we, being defended from the fear of our enemies, may live in peace and quietness; through Jesus Christ, Your Son, our Lord, who lives and reigns with you and the Holy Spirit, one God, now and forever.');
     }
     
     private function breviaryCollect(){
          // TODO: finish this
          $collects = array(
              'advent' => array(
                  'O Lord, we ask, stir up your power and come, that by your protection we may deserve to be rescued from the threatening dangers of our sins, and to be saved by your deliverance.',
                  'Stir up our hearts, O Lord, to prepare the ways of your only-begotten Son, that we may attain to serve you with purified minds, through his advent.',
                  'Incline your ears to our prayers, we ask, O Lord, and brighten the darkness of our minds by the grace of your visitation.',
                  'Stir up your power, we ask, O Lord, and come, and help us with great might that, by the help of your grace, what is hindered by our sins, may be hastened by the bounty of your mercy.'
              ),
              'christmas',
              'epiphany' => array(
                  'Attend, O Lord, we ask, of your heavenly mercy, to the desires of your supplicant people, and grant that they may both perceive what they ought to do, and may have strength to fulfill the same.',
                  'Almighty and everlasting God, you govern all things in heaven and on earth. In your mercy hear the requests of your pepole, and grant your peace in our times.',
                  'Almighty and everlasting God, graciously look upon our infirmity and, for our protection, stretch forth the right hand of your Majesty.',
                  'God, you know that, placed as we are amid such great dangers, we cannot by reason of our own human frailty stand. Grant us health of mind and body that, by your help, we may overcome the things which we suffer for our sins.',
                  'We ask you, O Lord, in your unceasing goodness, guard your family, that we who lean only upon the hope of your heavenly grace, may be always be defended by your protection.',
                  'Grant, we ask you, almighty God, that ever fixing our thoughts on such things that are reasonable, we may both in word and in work do that which is pleasing to you.'                  
              ),
              'lent',
              'easter' => array(
                  'first week of easter has its own collects',
                  'Grant, we ask, O Almighty God, that we who have been celebrating the Easter festivities may, through your bounty, ever retain their effect, both in life and conversation.',
                  'O God, who by the humility of your Son have raised up a fallen world, grant everlasting joy to your faithful people, that those whom you have rescued from the perils of endless death, you may cause to enjoy endless happiness.',
                  'O God, to those who go astray, you display the light of your truth that they may return into the way of righteousness. Grant to all those who profess themselves Christians, both to avoid the things which are contrary to that name, and to follow those which are agreeable to it.',
                  'O God, you make the minds of the faithful to be of one will. Grant to your people to love that which you command, and to desire that which you promise, that amidst the changes of this world, our hearts may be fixed where there are true joys.',
                  'O God, from whom all good things proceed, grant to your supplicants, that by your inspiration we may think those things that are right, and under your guidance perform them.',
                  'Almighty and everlasting God, grant us both ever to have a will devoted to you, and to serve your Majesty with a sincere heart.',
                  'seventh week?'
              ),
              'ordinary' => array(
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'o1',
                  'Almighty and merciful God, of whose gift it comes that your faithful people can do you worthy and laudable service, grant, we ask, that we may run without stumbling to the attainment of your promises.',
                  'Almighty and everlasting God, give us an increase of faith, hope, and love, and that we may deserve to obtain that which you promise, make us love that which you command.',
                  'Protect, we ask you, O Lord, your church with your perpetual mercy, and because without you human frailty goes astray, may we be ever withheld by your grace from what is hurtful, and directed toward what is profitable.',
                  'May your continual pity, O Lord, cleanse and defend your church, and because without you she cannot endure in safety, may she ever be governed by your bounty.',
                  'Let your grace, we ask, O Lord, always go before us and follow us, and make us continually intent upon good works.',
                  'Grant to your people, we ask, O Lord, to avoid every contamination of the devil, and with pure minds, to follow you, the only God.',
                  'May the working of your mercy direct our hearts, we ask, O Lord, for without you we are not able to please you.',
                  'Almighty and merciful God, in your bounty, graciously defend us all from that is harmful, that free in mind and body, we may with ready minds carry out the things that are yours.',
                  'Be appeased, O Lord, we ask, and grant to your faithful people pardon and peace, that they may both be cleansed from all their offenses, and serve you with secure minds.',
                  'Guard your household, we ask, O Lord, with continued goodness, that through your protection, it may be free from all adversities, and by good works be devoted to your name.',
                  'O God our refuge and strength, the author of all peity, give ear to the devout prayers of your church, and grant that what we ask in faith, we may obtain effectually.',
                  'Absolve your people from their offenses, we ask, O Lord, that through your bountiful goodness we may be delivered from the bonds of sin, which through our frailty we have contracted.',
                  'Almighty and everlasting God, graciously look upon our infirmity and, for our protection, stretch forth the right hand of your Majesty.',
                  'God, you know that, placed as we are amid such great dangers, we cannot by reason of our own human frailty stand. Grant us health of mind and body that, by your help, we may overcome the things which we suffer for our sins.',
                  'We ask you, O Lord, in your unceasing goodness, guard your family, that we who lean only upon the hope of your heavenly grace, may be always be defended by your protection.',
                  'Grant, we ask you, almighty God, that ever fixing our thoughts on such things that are reasonable, we may both in word and in work do that which is pleasing to you.',
                  'Stir up, we ask, O Lord, the wills of your faithful people, that more earnestly seeking after the fruit of good works, they may receive more abundant help from your mercy.'
              )
          );
          return $collects[$this->season['season']][$this->season['week']-1 ];
     }
     
     private function eveningPrayer(){
          $prayers = array(
              'Blessed Redeemer, as this Sunday draws to a close, we again lift up our eyes to "You who are enthroned in the heavens!". We have been blessed to gather with fellow believers to offer you prayers and praise and to receive your rich blessings for our faith and life through your Word and blessed Sacraments. As we prepare to fulfill our roles in life this week in our jobs, schools, and wherever you lead us, enable us by your grace and Spirit to reflect your kindness and serve your purposes in whatever we say and do. Forgive us when we fall short of your perfect will.',
              'Loving Lord, we look back over our day with gratitude for all of your kindness and care for us. But we also remember the ways we have offended you and hurt those around us. How grateful we are that you are "merciful and gracious, slow to anger and abounding in steadfast love." Cleanse us of all our wrongs and failures, sweep away the clouds of guilt that trouble us, and refresh us with your forgiving love and healing power. Empower us by your Spirit to love and forigve others who have hurt or offended us with the same measure that you love us and forgive us - completely and unconditionally.',
              'O Holy Father, who rested on the seventh day of creation, be near me as I rest and relax. As the sun sets and day is nearly done, I pray for your blessings on my homecoming. Help me to lay aside my tasks for the day and to rest in your protecting presence. Be with friends and family near and far from me and give them peace this night. Bless the interactions I have, and be the tie that binds us together. I pray that as I rest, you would help me to be still and know that you are God.',
              'In the evening hours of the day, dear Lord, I ask for your mercy. Grant me peace and rest as I turn from my work and turn to you in prayer. Give me restful sleep, that my body may be rejuvenated for another day of service to you. I don\'t know what the future holds, dear Lord, but I trust that with you by my side, you will help me in all circumstances. I lay my burdens into your strong and loving arms and ask for your blessing. You are my Good Shepherd and I pray that I would rest safely in your arms as your dear lamb.',
              'Dear Jesus, I thank you for your goodness showered on me today: friends, home, food, clothing, good health, forgiveness, salvation, and countless other blessings. I deserve nothing that you give me, but I receive them all with humble thanksgiving. May I not waste the days you give me. Give me grace to serve you willingly and faithfully all the days of my life. Use me as you wish to accomplish your will. May I also be your instrument in ministering to others. Please grant me a peaceful night\'s rest, that I may be refreshed for the work of tomorrow.',
              'Dear Father, another day is almost ended and night approaches. Please forgive me all the sins I have committed this day, both those of which I am aware, and those of which I am unaware. I know that Jesus paid the price of death and damnation on the cross for my sins, so please have mercy on me for his sake. Only by your grace can I sleep in peace. Thank you for sustaining my faith, that I continue to trust you and live for you. Thank you for the life you have given me as your child and the joy of knowing you. I enjoy walking with you each day and thank you for your unfailing love for me, shown most perfectly in your Son.',
              'Gracious Father, as this day comes to a close, I reflect on my actions this past week. Far too often I fell short of your glory. Forgive me for Jesus\'s sake. Thank you for loving me though I am sinful. Thank you for your constant presence and guidance. Without you, I am lost. With you, life is a joy. Thank you for giving my life purpose and meaning. Instill in me a love for worshipping you. May I look forward to tomorrow morning when I will have the privilege of worshipping you with my brothers and sisters in Christ. As I receive your mercy tomorrow through Word and Sacrament, may I be equipped to live all the more faithfully for you.',
          );
          return $prayers[$this->season['day']];
     }
}

?>
