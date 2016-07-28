<?php

// See if an office has been specified and if so, make that office.

if(isset($_GET['office'])){
     $o = $_GET['office'];
     include('classes/Office.php');
     include('classes/Element.php');
     include('classes/' . $o . '.php');
     $of = new $o();
     $of->display();
}
?>
