<?php
error_reporting (0);
	
	if($_SERVER["REQUEST_METHOD"] === "POST"){
		
		if(empty($_POST['user']) || empty($_POST['pass'])){
			session_start();
			$_SESSION['alert'] = '<div id="dodano">UZUPEŁNIJ DANE</div>';
			header('Location: ../index.php');
			exit();
		}else{
			$login = htmlentities($_POST['user']);
			$pass = htmlentities($_POST['pass']);
		
		if(is_numeric($login) || is_numeric($pass)){
			session_start();
			$_SESSION['alert'] = 'Co to ?';
			header('Location: ../logowanie/log-in.php');
			exit();
		}
	
		if(!empty($login) && !empty($pass) && !empty($_POST['user']) && !empty($_POST['pass'])){
				if(strlen($pass) >= 5 && strlen($pass) <= 20){
					if($login === $pass){
						session_start();
						$_SESSION['alert'] = 'Login i hasło nie mogą być takie same';
						header('Location: ../logowanie/log-in.php');
						exit;
					}else{
						if(strlen($login) >= 5 && strlen($login) <= 20){
							require_once ('../database/db.php');
							$sql = 'SELECT * FROM `users` WHERE `user`="' . htmlentities($login) . '" LIMIT 1';
							if(empty($db_PDO)){
									echo 'ERROR DB';
									exit;
							}
							$zadanie = $db_PDO->query($sql);
							$ilu = $zadanie->rowCount();
					if($ilu > 0){
						$wiersz = $zadanie->fetch();
						if(password_verify(htmlentities($pass), htmlentities($wiersz['pass']))){
							
								session_start();
								
								$_SESSION['zalogowany'] 	= true;
								$_SESSION['ready'] 			= "ready";
								$_SESSION['id'] 			= $wiersz['id'];
								$_SESSION['user'] 			= $wiersz['user'];
								$_SESSION['imie'] 			= $wiersz['imie'];
								$_SESSION['nazwisko'] 		= $wiersz['nazwisko'];
								$_SESSION['uprawnienia'] 	= $wiersz['uprawnienia'];
								$_SESSION['pkt'] 			= $wiersz['pkt'];
								$_SESSION['logo'] 			= $wiersz['logo'];
								
								$logowania 					= $wiersz['logowania'];
								$user 						= $wiersz['user'];
								$log 						= $logowania + 1;
								$zadanie = $db_PDO->query("UPDATE `users` SET `logowania`='$log' WHERE user='$user'");
								
								
								
							 session_write_close();
							 header('Location: ../index.php');
							 exit;
						}else{
							session_start();
							$_SESSION['alert'] = 'ZŁE HASŁO';
							header('Location: ../logowanie/log-in.php');
							exit;
						}	
					}else{
						session_start();
						$_SESSION['alert'] = 'Brak użytkownika w bazie';
						header('Location: ../logowanie/log-in.php');
						exit();
					}
				}else{
					session_start();
					$_SESSION['alert'] = 'Login min 5 max 20 znaków</div>';
					header('Location: ../logowanie/log-in.php');
					exit;
				}}}else{
					session_start();
					$_SESSION['alert'] = '<div id="dodano">Hasło min 5 max 20 znaków</div>';
					header('Location: ../logowanie/log-in.php');
					exit;
					}}}}else{
						echo 'NO POST REQUEST';
					}
		 
		

?>