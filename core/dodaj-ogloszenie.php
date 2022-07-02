<?php 	
	require ('../session.php');
	require ('../header.php');
	require ('../logo.php');
	

?>

<div class="ogloszenie-1">
	<form action="system/add" method="POST">
	<div class="dodaj-ogloszenie-ramka">
		<div class="dodaj-ogloszenie-title inline">Tytuł</div>
		<div class="dodaj-ogloszenie-input inline">
			<input type="text" name="dodaj-ogloszenie-input-tytul" placeholder="Wprowadź tytuł aukcji">
		</div>
	</div>
	
	<div class="dodaj-ogloszenie-ramka">
		<div class="dodaj-ogloszenie-title inline">OPIS</div>
		<div class="dodaj-ogloszenie-input inline">
			<textarea type="text" name="dodaj-ogloszenie-textarea-opis" autocomplete="off" rows="11" placeholder="Wprowadź tytuł aukcji" class="dodaj-ogloszenie-textarea"></textarea>
		</div>
	</div>
	
	<div class="dodaj-ogloszenie-ramka">
	
    <input type="file" class="custom-file-input"  name="image[]" multiple="" accept=".png, .jpeg, .jpg">

	</div>
	
	
	
	<div><button type="submit" name="dodaj-ogloszenie-button">Dodaj ogłoszenie</button></div>
</div>
</form>