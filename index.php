<?php

// See if an office has been specified and if so, make that office.

if(isset($_GET['office'])){
     $o = $_GET['office'];
     include('classes/Office.php');
     include('classes/Element.php');
     include('classes/' . $o . '.php');
     $of = new $o();
     $of->display();
}else{
?>     
<table>
  <tr>
    <td><a href='index.php/Matins'>Matins</a><br />Morning</td>
    <td><a href='index.php/Terce'>Terce</a><br />Mid-Morning</td>
    <td><a href='index.php/Sext'>Sext</a><br />Noon</td>
  </tr>
  <tr>
    <td><a href='index.php/None'>None</a><br />Mid-Afternoon</td>
    <td><a href='index.php/Vespers'>Vespers</a><br />Evening</td>
    <td><a href='index.php/Compline'>Compline</a><br />Night</td>
  </tr>
</table>
     
<?php     
}
?>
