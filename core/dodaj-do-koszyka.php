<?php

$z1 = $_POST['z1'];

	require('database/db-connect.php');
			$b = "SELECT * FROM `koszyk`";
			$zadanie = $db_PDO->query($b);
			$ile_znalezionych = $zadanie->rowCount();
			
			
		for ($i=0; $i < $ile_znalezionych; $i++)
					{
						$wiersz = $zadanie->fetch();
						
						echo '<div>
						
						</div>';
						
						
					}