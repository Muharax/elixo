<?php 	
	require ('../../session.php');
	require ('../../header.php');
	require ('../../logo.php');
	
require_once ('../../database/db-connect.php');

$id = $_SESSION['id'];
$sql = $db_PDO->prepare('SELECT * FROM `users` WHERE `id`=:id');
$sql->bindParam('id', $_SESSION['id'], PDO::PARAM_INT);
$sql->execute(array("id" => $_SESSION['id']));
$result = $sql->fetch(PDO::FETCH_ASSOC);

// print_r($result);
// echo ($result['imie']);



if(isset($_POST['edytuj-dane'])){
	
	echo '
	<form action="../../core/profil.php" method="post">

	<button type="submit" name="button-anuluj">Anuluj</button>
	
<table>
	<tr>
		<td>Imię: </td>
		<td><input type="text" name="name" value="'.$result['imie'].'"></td>
	</tr>
	
	<tr>
		<td>Nazwisko: </td>
		<td><input type="text" name="name" value="'.$result['nazwisko'].'"</td>
	</tr>

	<tr>
		<td>Adres: </td>
		<td>'.$result['miejscowosc'].', '.$result['ulica'].' '.$result['nr_budynku'].'
		<button>Edytuj</button></td>
	</tr>
	
	<tr>
		<td>Logowania: </td><td>'.$result['logowania'].'</td>
	</tr>
	
	<tr>
		<td>Punkty: </td><td>'.$result['pkt'].'</td>
	</tr>
</table>
	
	<button type="submit" name="button-edytuj-dane">Edytuj</button>
	</form>';
}else{
	echo 'USTAWIONO<br>';
}


$sql = null;
?>
