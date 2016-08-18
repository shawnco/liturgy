<html>
<head>
<title><?php echo $title; ?> | Personal Liturgy Generator</title>
<?php $domain = "http://" . $_SERVER["HTTP_HOST"]; ?>
<link rel="stylesheet" type="text/css" href="<?php echo $domain; ?>/liturgy/style/general.css" />
</head>
<body>
<div id="container">
<div id="header"><h1><?php echo $title; ?></h1></div>
<div id="menu">
     <ul>
          <li><a href="Matins">Matins</a></li>
          <li><a href="Terce">Terce</a></li>
          <li><a href="Sext">Sext</a></li>
          <li><a href="None">None</a></li>
          <li><a href="Vespers">Vespers</a></li>
          <li><a href="Compline">Compline</a></li>
     </ul>
     <ul>
          <li><a href='Morning'>Morning</a></li>
          <li><a href='Evening'>Evening</a></li>
          <li><a href='Night'>Night</a></li>
     </ul>
          

</div>