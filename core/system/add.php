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



if(isset($_FILES['image'])){
     $errors= array();
     $file_name = $_FILES['image']['name'];
     $file_size =$_FILES['image']['size'];
     $file_tmp =$_FILES['image']['tmp_name']; 
     $file_type=$_FILES['image']['type'];
     $extensions= array("jpeg","jpg","png", "pdf"); 
     foreach($file_name as $key => $value){ 
         $tmp = explode('.',$_FILES['image']['name'][$key]);
         $file_ext = strtolower(end($tmp));
         if(in_array($file_ext,$extensions)=== false){
             $errors[]="Rozszerzenie niedozwolone.";
         } 
         if($file_size[$key] > 5097152){
             $errors[]='Plik nie może być większy niż 5 MB.';
         } 
     }  
     if(empty($errors)==true){        
		move_uploaded_file($file_tmp[$key],"pliki/".date('Y-m-d').'_'.$file_name[$key]);
         foreach($file_name as $key => $value){ 
             echo "Pliki poprawnie wysłane!";
         } 
     }
     else{
     print_r($errors);
     }
 }
 
 else{
	echo 'PLIK BLE';
}
?>
