<?php 
error_reporting(E_ALL);
defined('URL') or define('URL', 'http://'.$_SERVER['SERVER_NAME']. "/elixo/");
?>
<!DOCTYPE HTML>
<html lang="pl-PL">
        <head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content= "width=device-width, initial-scale=1.0">
		
		
		<link href="<?php echo URL;?>css/style.css" rel="stylesheet" type="text/css" >

		<link rel="icon" href="<?php echo URL;?>img/favicon.png" sizes="16x16">

			<script src="<?php echo URL;?>bootstrap/js/bootstrap.js"></script>
			<link rel="stylesheet" href="<?php echo URL;?>bootstrap/css/bootstrap.css">
			
			<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
			<script src="<?php echo URL;?>js/jquery.min.js"></script>
			
			<link rel="stylesheet" href="<?php echo URL;?>js/simplenotify/simpleNotifyStyle.css">
			<script src="<?php echo URL;?>js/simplenotify/simpleNotify.js"></script>

			<title>Skynet</title>
			
			
<?php include 'zmienne.php';?>
</head>
<body>
