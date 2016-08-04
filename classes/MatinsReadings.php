<?php

/**
 * Readings for Matins
 *
 * @author Shawn Contant
 */
class MatinsReadings extends Element {
     protected $name = 'Reading';
     
     // Massive freaking array of readings
     private $readings = array(
         'advent' => array(
             array(
                 ''
             )
         ),
         'christmas' => array(
             
         ),
         'epiphany' => array(
             
         ),
         'lent' => array(
             
         ),
         'easter' => array(
             
         ),
         'May' => array(
             18 => 'John 5:1-18',
             19 => 'John 5:19-29',
             20 => 'John 5:30-47',
             21 => 'John 6:1-21',
             22 => 'John 6:22-40',
             23 => 'John 6:41-59',
             24 => 'John 6:60-71',
             25 => 'John 7:1-13',
             26 => 'John 7:14-31',
             27 => 'John 7:32-53',
             28 => 'John 8:1-20',
             29 => 'John 8:21-38',
             30 => 'John 8:39-59',
             31 => 'John 9:1-23'
             
         ),
         'Jun' => array(
             'John 9:24–41',
             'John 10:1–21',
             'John 10:22–42',
             'John 11:1–16',
             'John 11:17–37',
             'John 11:38–57',
             'John 12:1-19',
             'John 12:20-36a',
             'John 12:36b-50',
             'John 13:1-20',
             'John 13:21-38',
             'John 14:1-17',
             'John 14:18-31',
             'John 15:1-11',
             'John 15:12-27',
             'John 16:1-16',
             'John 16:17-33',
             'John 17:1-26',
             'John 18:1-14',
             'John 18:15-40',
             'John 19:1-22',
             'John 19:23-42',
             'John 20:1-18',
             'John 20:19-31',
             'John 21:1-25',
             'Acts 8:1-25',
             'Acts 8:26-40',
             'Acts 9:1-22',
             'Acts 9:23-43',
             'Acts 10:1-17'
             
         ),
         'Jul' => array(
             'Acts 10:18-33',
             'Acts 10:34-48',
             'Acts 11:1-18',
             'Acts 11:19-30',
             'Acts 12:1-25',
             'Acts 13:1-12',
             'Acts 13:13-41',
             'Acts 13:42-52',
             'Acts 14:1-18',
             'Acts 14:19-15:5',
             'Acts 15:6-21',
             'Gal 1:1-24',
             'Gal 2:1-21',
             'Gal 3:1-22',
             'Gal 3:23-4:11',
             'Gal 4:12-31',
             'Gal 5:1-26',
             'Gal 6:1-18',
             'Acts 15:22-41',
             'Acts 16:1-22',
             'Acts 16:23-40',
             'Acts 18:1-11,23-28',
             'Acts 19:1-22',
             'Acts 21:15-36',
             'Acts 21:37-22:16',
             'Acts 22:17-29',
             'Acts 22:30-23:11',
             'Acts 23:12-35',
             'Acts 24:1-23',
             'Acts 24:24-25:12',
             'Acts 25:13-27'
         ),
         'Aug' => array(
             'Acts 26:1-23',
             'Acts 26:24-27:8',
             'Acts 27:9-26',
             'Acts 27:27-44',
             'Acts 28:1-15',
             'Acts 28:16-31',
             '1 Cor 1:1-25',
             '1 Cor 1:26-2:16',
             '1 Cor 3:1-23',
             '1 Cor 4:1-21',
             '1 Cor 5:1-13',
             '1 Cor 6:1-20',
             '1 Cor 7:1-24',
             '1 Cor 7:25-40',
             '1 Cor 8:1-13',
             '1 Cor 9:1-23',
             '1 Cor 9:24-10:22',
             '1 Cor 10:23-11:16',
             '1 Cor 11:17-34',
             '1 Cor 12:1-13',
             '1 Cor 12:14-31',
             '1 Cor 13:1-13',
             '2 Cor 1:23-2:17',
             '2 Cor 3:1-18',
             '2 Cor 4:1-18',
             '2 Cor 5:1-21',
             '2 Cor 6:1-18',
             '2 Cor 7:1-16',
             '2 Cor 8:1-24',
             '2 Cor 9:1-15'
         ),
         'Sep' => array(
             'Eph 1:1-23',
             'Eph 2:1-22',
             'Eph 3:1-21',
             'Eph 4:1-24',
             'Eph 4:25-5:14',
             'Eph 5:15-33',
             'Eph 6:1-24',
             'Phil 1:1-20',
             'Phil 1:21-2:11',
             'Phil 2:12-30',
             'Phil 3:1-21',
             'Phil 4:1-23',
             'Col 1:1-23',
             'Col 1:24-2:7',
             'Col 2:8-23',
             'Col 3:1-25',
             'Col 4:1-18',
             '1 Tim 1:1-20',
             '1 Tim 2:1-15',
             '1 Tim 3:1-16',
             '1 Tim 4:1-16',
             '1 Tim 5:1-16',
             '1 Tim 5:17-6:2',
             '1 Tim 6:3-21',
             'Matt 3:1-17',
             'Matt 4:1-11',
             'Matt 4:12-25',
             'Matt 5:1-20',
             'Matt 5:21-48',
             'Matt 6:1-15'
         ),
         'Oct' => array(
             'Matt 6:16-34',
             'Matt 7:1-12',
             'Matt 7:13-29',
             'Matt 8:1-17',
             'Matt 8:18-34',
             'Matt 9:1-17',
             'Matt 9:18-38',
             'Matt 10:1-23',
             'Matt 10:24-42',
             'Matt 11:1-19',
             'Matt 11:20-30',
             'Matt 12:1-21',
             'Matt 12:22-37',
             'Matt 12:38-50',
             'Matt 13:1-23',
             'Matt 13:24-43',
             'Matt 13:44-58',
             'Matt 14:1-21',
             'Matt 14:22-36',
             'Matt 15:1-20',
             'Matt 15:21-39',
             'Matt 16:1-12',
             'Matt 16:13-28',
             'Matt 17:1-13',
             'Matt 17:14-27',
             'Matt 18:1-20',
             'Matt 18:21-35',
             'Matt 19:1-15',
             'Matt 19:16-30',
             'Matt 20:1-16',
             'Matt 20:17-34'
         ),
         'Nov' => array(
             
         )
     );
     
     public function __construct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
          if($this->season['season'] == 'ordinary'){
               $reading = $this->readings[date('M')][date('d')-1];
          }else{
               $reading = $this->readings[$this->season['season']][$this->season['week']][$this->season['day']];
          }
          $this->showName();
          echo '<iframe src="https://www.biblegateway.com/passage/?search=' . $reading . '&verson=NASB" width="80%" height="300px"></iframe><br />';
     }
}

?>
