<?php

$z1 = $_POST['z1'];


				require('../database/db-connect.php');
					$b = "SELECT * FROM `pieczywo` WHERE `kategoria`='".$z1."'";
					$zadanie = $db_PDO->query($b);
					$ile_znalezionych = $zadanie->rowCount();
				
			
					
			for ($i=0; $i < $ile_znalezionych; $i++)
					{
						$wiersz = $zadanie->fetch();
							echo '
							<div class="out">

							<div class="picture">
								<img src="img/'.$wiersz['img'].'.jpg"></img>
							</div>
							
							<div class="opis">

								<div class="name1">'.$wiersz['nazwa'].'</div>
								<div><b>'.$wiersz['cena_sprzedazy'].' PLN</b></div>
								<div><b>'.$wiersz['ilosc_kupiona'].'</b> Dostępnych</div>
								<div>'.$wiersz['waga'].'</div>
								<div class="ddkd"><button id="ddk" value="'.$wiersz['id'].'">Dodaj do koszyka</button></div>

								</div>
							</div>

';
					}
?>
<script>
$(document).on("click", '#firma', function() {
$("#info-box").load("core/firma.php");
$( "#info-box-all" ).slideToggle("slow");

});
</script>