<html>
<head>
<title><?php echo $pageHead; ?> | Personal Liturgy Generator</title>
<?php $domain = "http://" . $_SERVER["HTTP_HOST"]; ?>
<link rel="stylesheet" type="text/css" href="<?php echo $domain; ?>/liturgy/style/general.css" />
</head>
<body>
<div id="container">
<div id="header"><h1><?php echo $pageTitle ?></h1></div>
<div id="menu">
  <ul>
    <li><a href="<?php echo $domain; ?>/liturgy/matins">Matins</a></li>
    <li><a href="<?php echo $domain; ?>/liturgy/terce">Terce</a></li>
    <li><a href="<?php echo $domain; ?>/liturgy/sext">Sext</a></li>
    <li><a href="<?php echo $domain; ?>/liturgy/none">None</a></li>
    <li><a href="<?php echo $domain; ?>/liturgy/vespers">Vespers</a></li>
    <li><a href="<?php echo $domain; ?>/liturgy/compline">Compline</a></li>
  </ul>
</div>