<?php
include('config/routes.php');
// See if an office has been specified and if so, make that office.
if(isset($_GET['office']) && $_GET['office'] !== '' && in_array($_GET['office'], $routes)){
     $o = $routes[$_GET['office']];
     $title = $o;
     include('template/template-top.php');
     include('classes/Office.php');
     include('classes/Element.php');
     include('classes/' . $o . '.php');
     $of = new $o();
     $of->display();
}else{
     $title = 'Liturgy';
     include('template/template-top.php');
?>     
<p><i>A prayer before office:</i> Open my lips, O Lord, that I may praise your Holy Name; cleanse my heart from all vain, evil, and wandering thoughts; enlighten my understanding and kindle my affection, that praying attentively and devoutly I may be heard in the presence of your divine Majesty, through Jesus Christ, our Lord. Amen.</p>
<p>Select an office from the full liturgy below to begin:</p>
<table>
  <tr>
    <td><a href='Matins'>Matins</a><br />Morning</td>
    <td><a href='Terce'>Terce</a><br />Mid-Morning</td>
    <td><a href='Sext'>Sext</a><br />Noon</td>
  </tr>
  <tr>
    <td><a href='None'>None</a><br />Mid-Afternoon</td>
    <td><a href='Vespers'>Vespers</a><br />Evening</td>
    <td><a href='Compline'>Compline</a><br />Night</td>
  </tr>
</table>

<p>Or, if you're using the shortened three office system, pick from below:</p>
<table>
     <tr>
          <td><a href='Morning'>Morning Prayer</a></td>
          <td><a href='Evening'>Evening Prayer</a></td>
          <td><a href='Night'>Night Prayer</a></td>
     </tr>
</table>
<?php     
}
include('template/template-bottom.php');
?>
