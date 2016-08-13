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
              ),
              'advent' => array(
                  'O Lord, stir up your power and come, that by your protection we may deserve to be rescued from the threatending dangers of our sins, and to be saved by your deliverance.'
              )
          );
          var_dump($this->season['week']);
          return $collects[$this->season['season']][$this->season['week'] - 1];
     }
     
     private function eveningPrayer(){
          $prayers = array(
              'SUNDAY',
              'MONDAY',
              'TUESDAY',
              'WEDNESDAY',
              'THURSDAY',
              'FRIDAY',
              'SATURDAY'
          );
          return $prayers[$this->season['day']];
     }
}

?>
