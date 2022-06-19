<?php 	
	require ('../../session.php');
	require ('../../header.php');
	require ('../../logo.php');
	
require_once ('../../database/db-connect.php');

$sql = $db_PDO->prepare('SELECT id, imie, nazwisko, logowania, pkt FROM `users` WHERE `id`=:id');
$sql->bindParam('id', $_SESSION['id'], PDO::PARAM_INT);
$sql->execute(array("id" => $_SESSION['id']));
$result = $sql->fetch(PDO::FETCH_ASSOC);

// print_r($result);
// echo ($result['imie']);



if(isset($_POST['dane'])){
	echo '
	<form action="edytuj-dane.php" method="POST">
	<table>
	<tr>
	<td>Imię: </td><td>'.$result['imie'].'</td>
	</tr>
	<tr>
	<td>Nazwisko: </td><td>'.$result['nazwisko'].'</td>
	</tr>
	<tr>
	<td>Logowania: </td><td>'.$result['logowania'].'</td>
	</tr>
	<tr>
	<td>Punkty: </td><td>'.$result['pkt'].'</td>
	</tr>
	</table>
	<input type="hidden" name="user-id" value="'.$_SESSION['id'].'">
	<button type="submit" name="zmien-haslo">Zmień hasło</button>
	<button type="submit" name="edytuj-dane">Edytuj dane</button>
	</form>';
}else{
	echo 'USTAWIONO<br>';
}


$sql = null;
?>
