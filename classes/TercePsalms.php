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
         '89-96',
         '97-104',
         '105-112',
         '113-120',
         '121-128',
         '129-136',
         '137-144',
         '145-152',
         '153-160',
         '161-168',
         '169-176'
     );
     
     public function __construct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
          $this->showName();
          // For now just manually enter the psalm...
          
          /**
           * The algorithm for this is, for every week since August 21, add 5 to the count. Then count the amount of non-Tuesday, non-Thursday days that have passed in this current week.
           */
          $days = array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 2,
              4 => 3,
              5 => 3,
              6 => 4
          );
          
          $base = strtotime('August 21, 2016') / 86400;
          $pastSunday = strtotime('last Sunday') / 86400;
          $sum = ($pastSunday - $base) + $days[$this->season['day']]; 
          echo '<iframe src="https://www.biblegateway.com/passage/?search=psalm 119:' . $this->octaves[$sum % 21] . '&version=ESV" width="80%" height="300px"></iframe><br />';
          $this->cecho('Glory be to the Father, and to the Son, and to the Holy Spirit, as it was in the beginning, is now and will be forever, amen.');          
     }
}

?>
