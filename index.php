<style>
	.ogloszenie{
		width: 600px;
		overflow: auto;
		padding: 10px;
	}
	.topic{
		width:100%;
		font-size:20px;
		border: 1px solid black;
	}
	.opis2{
		border: 1px solid black;
	}
	.ogloszenia-promowane{
		width: fit-content;
		border: 1px solid black;
	}
</style>
<?php 		
	require ('session.php');
	require ('header.php');
	require ('logo.php');
?>


<div class="content">

<div class="karty-rozwijane">
	<?php include ('menu.php')?>
</div>



	<div class="ogloszenia-promowane">Ogłoszenia promowane
		<div class="ogloszenie">
			<div class="topic">Basen stelażowy okrągły Bestway 56416 366 x 366 cm</div>
			<div class="img inline">
				<img  class="img-og"src="img/basen.png"></img>
			</div>
				<div class="oglo-right inline">
					<div class="cena">CENA: 255 zł</div>
					<div class="opis2">266 osoby kupiły</div>
				</div>
		</div>
		<div class="ogloszenie">
			<div class="topic">Basen stelażowy okrągły Bestway 56416 366 x 366 cm</div>
			<div class="img inline">
				<img  class="img-og"src="img/basen.png"></img>
			</div>
				<div class="oglo-right inline">
					<div class="cena">CENA: 255 zł</div>
					<div class="opis2">266 osoby kupiły</div>
				</div>
		</div>
	</div>
	
	
	<div class="ogloszenia-prawy">
		
	</div>
	
</div>


<?php require('footer.php');?>
