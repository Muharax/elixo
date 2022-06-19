<?php

				require('../database/db-connect.php');
					$b = "SELECT * FROM `pieczywo`";
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
								<div>Z: '.$wiersz['miejscowosc'].' ( <a href="#" id="firma">Kondispal</a> )</div>
								<div>'.$wiersz['stan'].'</div>
								<div>Cena: <b>'.$wiersz['cena_sprzedazy'].' PLN</b></div>
								<div><b>'.$wiersz['ilosc_kupiona'].'</b> Dostępnych</div>
								<div>Dostawa 1 KM/2,8zł <a href="#">?</a></div>
								<div>Waga: '.$wiersz['waga'].'</div>
								<div><a href="#" id="ddk">Dodaj do koszyka</a></div>

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