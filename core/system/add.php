<?php 	
define('URL', 'http://'.$_SERVER['SERVER_NAME']. "/elixo/");


if(!isset($_POST['dodaj-ogloszenie-button'])){
	echo 'NIE USTAWIONO<br>';
}else{
	echo 'USTAWIONO<br>';
}

if(empty($_POST['dodaj-ogloszenie-input-tytul'])){
	echo 'PUSTE 2<br>';
}else{
	echo 'NIE PUSTE 2<br>';
}
	
if(empty($_POST['dodaj-ogloszenie-textarea-opis'])){
	echo 'PUSTE 3<br>';
}else{
	echo 'NIE PUSTE 3<br>';
}

if(isset($_FILES["files"])) {
   $tmp_name = $_FILES["files"]["tmp_name"];
   $name = basename($_FILES["files"]["name"]);
   move_uploaded_file($tmp_name, "uploads/".$name);
   
   echo $name;
}else{
	echo 'PLIK BLE';
}
?>
