<?php
session_start();

if(isset($_SESSION['imie']) && isset($_SESSION['id'])){
	echo 'Witaj ' . $id;






				require('database/db-connect.php');
					$b = 'SELECT * FROM `koszyk` WHERE `id_user`="'.$ids.'"';
					$zadanie = $db_PDO->query($b);
					$ile_znalezionych = $zadanie->rowCount();
					if($ile_znalezionych === 0){
						echo 'TWÓJ KOSZYK JEST PUSTY';
					}
			
					
			for ($i=0; $i < $ile_znalezionych; $i++)
					{
						$wiersz = $zadanie->fetch();
						
						
						
					$a = "SELECT * FROM `pieczywo` WHERE `id`='".$id."'";
					$zadanie = $db_PDO->query($a);
					$ile_znalezionych = $zadanie->rowCount();
					for ($i=0; $i < $ile_znalezionych; $i++)
					{
					$wiersz = $zadanie->fetch();
					
							echo '
							<div class="out">

							<div class="picture-koszyk">
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
					
					
					
					}
					}else{
						
						echo '
						
						<a href="#">Zaloguj się</a>';
						
					}
?>