<?php

/**
 * Algorithm for the psalmody at Terce
 *
 * @author Shawn Contant <shawnc366@gmail.com>
 */
class TercePsalms extends Element {
     protected $name = 'Psalmody';
     private $octaves = array(
         '1-8',
         '9-16',
         '17-24',
         '25-32',
         '33-40',
         '41-48',
         '49-56',
         '57-64',
         '65-72',
         '73-80',
         '81-88',
         '89-94',
         '95-102',
         '103-110',
         '111-118',
         '119-126',
         '127-134',
         '135-140',
         '141-148',
         '149-156',
         '157-164',
         '165-172'
     );
     
     public function __construct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
          $this->showName();
          // For now just manually enter the psalm...
          echo '<iframe src="https://www.biblegateway.com/passage/?search=psalm 119:' . $this->octaves[0] . '&version=ESV" width="80%" height="300px"></iframe><br />';
     }
}

?>
