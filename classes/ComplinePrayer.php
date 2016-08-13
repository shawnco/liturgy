<?php

/**
 * Prayers at compline
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class ComplinePrayer extends Element {
     protected $name = 'Prayers';
     
     public function __construct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
          $this->getAudio('compline','prayer');
          $this->lecho('Hear my prayer, O Lord');
          $this->cecho('Listen to my cry');
          $this->lecho('Keep me as the apple of your eye');
          $this->cecho('Hide me in the shadow of your wings');
          $this->lecho('In righteousness I shall see you');
          $this->cecho('When I awake, your presence will give me joy');
          $this->cecho('O God, help me have a heart for people. Inspire me to be interested in the lives and welfare of those around me. Open my eyes to their complexity and uniqueness, and push me to want to explore it.');          
          $prayers = array(
              'Abide with us, Lord, for it is toward evening, and the day is far spent. Abide with us and with your whole Church. Abide with us with your grace and goodness, with your holy Word and Sacrament, with your strength and blessing. Abide with us when the night of affliction and temptation comes upon us, the night of fear and despair, the night when death draws near. Abide with us and with all the faithful, now and forever.',
              'Visit our dwellings, O Lord, and drive from them all the snares of the enemy; let your holy angels dwell with us to preserve us in peace; and let your blessing be on us always; through Jesus Christ, our Lord.',
              'Eternal God, the hours both of day and night are yours, and to you the darkness is no threat. Be present, we pray, with those who labor in these hours of night, especially those who watch and work on behalf of others. Grant them diligence in their watching, faithfulness in their service, courage in danger, and competence in emergencies. Help them to meet the needs of others with confidence and compassion; through Jesus Christ, our Lord.',
              'Be present, merciful God, and protect us through the hours of this night, so that we who are wearied by the changes and chances of life may find our rest in you; through Jesus Christ, our Lord.',
              'Keep watch, dear Lord, with those who work, or watch, or weep this night, and give your angels charge over those who sleep. Tend the sick, Lord Christ; give rest to the weary, bless the dying, soothe the suffering, pity the afflicted, shield the joyous; and all for your love\'s sake. Amen. ',
              'Be our light in the darkness, O Lord, and in your great mercy defend us from all perils and dangers of this night; for the love of your only Son, Jesus Christ, our Lord.',
              'O Lord, support us all the day long of this troubled life, until the shadows lengthen and the evening comes and the busy world is hushed, the fever of life is over, and our work is done. Then, Lord, in your mercy grant us a safe lodging and a holy rest and peace at the last; through Jesus Christ, our Lord.'
          );
          $this->cecho($prayers[$this->season['day']]);
     }
}

?>
