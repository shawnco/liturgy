<?php

/**
 * Readings at Vespers
 *
 * @author Shawn Contant
 */
class VespersReadings extends Element {
     protected $name = 'Readings';
     
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
             
         ),
         'Jun' => array(
             
         ),
         'Jul' => array(
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '1 Sam 14:47—15:9',
             '1 Sam 15:10–35',
             '1 Sam 16:1–23'             
         ),
         'Aug' => array(
             '1 Sam 17:1–19',
             '1 Sam 17:20–47',
             '1 Sam 17:48-18:9',
             '1 Sam 18:10–30',
             '1 Sam 19:1–24',
             '1 Sam 20:1–23',
             '1 Sam 20:24–42',
             '1 Sam 24:1–22',
             '1 Sam 25:1–22',
             '1 Sam 25:23–44',
             '1 Sam 26:1–25',
             '1 Sam 28:3–25',
             '1 Sam 31:1–13',
             '2 Sam 1:1–27',
             '2 Sam 5:1–25',
             '2 Sam 6:1–19',
             '2 Sam 7:1–17',
             '2 Sam 7:18–29',
             '2 Sam 11:1–27',
             '2 Sam 12:1–25',
             '1 King 1:1–4, 15–35',
             '1 King 2:1–27',
             '1 King 3:1–15',
             '1 King 5:1–18',
             '1 King 7:51-8:21',
             '1 King 8:22–30, 46–63',
             '1 King 9:1–9; 10:1–13',
             '1 King 11:1–26',
             '1 King 11:42-12:19',
             '1 King 12:20-13:5, 33–34',
             '1 King 16:29-17:24'
         ),
         'Sep' => array(
             '1 King 18:1–19',
             '1 King 18:20–40',
             '1 King 19:1–21',
             '2 King 2:1–18',
             '2 King 2:19–25; 4:1–7',
             '2 King 4:8–22, 32–37',
             '2 King 4:38—5:8',
             '2 King 5:9–27',
             '2 King 6:1–23',
             '2 King 9:1–13; 10:18–29',
             '2 Chr 29:1–24',
             '2 Chr 31:1–21',
             '2 Chr 32:1–22',
             '2 Chr 33:1–25',
             '2 Chr 34:1–4, 8–11, 14–33',
             '2 Chr 35:1–7, 16–25',
             '2 Chr 36:1–23',
             'Neh 1:1—2:10',
             'Neh 2:11–20; 4:1–6',
             'Neh 4:7–23',
             'Neh 5:1–16; 6:1–9, 15–16',
             'Neh 7:1–4; 8:1–18',
             'Neh 9:1–21',
             'Neh 9:22–38',
             'Mal 1:1–14',
             'Mal 2:1—3:5',
             'Mal 3:6—4:6',
             'Deut 1:1–18',
             'Deut 1:19–36',
             'Deut 1:37—2:15'
         ),
         'Oct' => array(
             'Deut 2:16–37',
             'Deut 3:1–29',
             'Deut 4:1–20',
             'Deut 4:21–40',
             'Deut 5:1–21',
             'Deut 5:22-6:9',
             'Deut 6:10–25',
             'Deut 7:1–19',
             'Deut 8:1–20',
             'Deut 9:1–22',
             'Deut 9:23-10:22',
             'Deut 11:1–25',
             'Deut 11:26-12:12',
             'Deut 12:13–32',
             'Deut 13:1–18',
             'Deut 14:1–2, 22–23, 14:28—15:15',
             'Deut 15:19-16:22',
             'Deut 17:1–20',
             'Deut 18:1–22',
             'Deut 19:1–20',
             'Deut 20:1–20',
             'Deut 21:1–23',
             'Deut 24:10-25:10',
             'Deut 25:17-26:19',
             'Deut 27:1–26',
             'Deut 28:1–22',
             'Deut 29:1–29',
             'Deut 30:1–20',
             'Deut 31:1–29',
             'Deut 31:30-32:27',
             'Deut 32:28–52'
         ),
         'Nov' => array(
             
         )
     );
     
     public function __construct(){
          $this->season = $this->getSeason();
     }
     
     public function display(){
          if($this->season['season'] == 'ordinary'){
               // Probably incorrect
               $reading = $this->readings[date('M')][date('d') - 1];
          }else{
               $reading = $this->readings[$this->season['season']][$this->season['week']][$this->season['day']];
          }
          $this->showName();
          echo '<iframe src="https://www.biblegateway.com/passage/?search=' . $reading . '&verson=NASB" width="80%" height="300px"></iframe><br />';
     }
}

?>
