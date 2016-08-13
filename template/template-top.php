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
          <li><a href="index.php/Matins">Matins</a></li>
          <li><a href="index.php/Terce">Terce</a></li>
          <li><a href="index.php/Sext">Sext</a></li>
          <li><a href="index.php/None">None</a></li>
          <li><a href="index.php/Vespers">Vespers</a></li>
          <li><a href="index.php/Compline">Compline</a></li>
     </ul>
     <ul>
          <li><a href='index.php/Morning'>Morning</a></li>
          <li><a href='index.php/Evening'>Evening</a></li>
          <li><a href='index.php/Night'>Night</a></li>
     </ul>
          

</div>