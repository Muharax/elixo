<div class="logo-out">
	<div class="logo">

		<div class="logo-w1">
			<a href="<?php echo URL;?>index.php">
				<img class="w50" src="<?php echo URL;?>img/shop.png">
			</a>
		</div>
		
		<div class="logo-w2">
			<a href="<?php echo URL;?>">eliXo</a>
			<!-- SKYNET.BETA-->
		</div>
		
	</div>
<div class="koszyk">
	<img class="w50" src="<?php echo URL;?>img/pusty-koszyk-png.png"></img>
</div>
<?php 

if(isset($_SESSION['zalogowany'])){
	echo '<div class="dane">';
	echo '<div class="table_center">
				  <div class="drop-down">
					<div id="dropDown" class="drop-down__button">
					<img class="w50" src="'.URL.'img/'.$_SESSION['logo'].'.png"></img>
						<span class="drop-down__name">'.$_SESSION['user'].'</span>
					</div>
					<div class="drop-down__menu-box">
					  <ul class="drop-down__menu">
					  
						<li data-name="profile" class="drop-down__item">
							<a href="'.URL.'core/dodaj-ogloszenie.php">Dodaj ogłoszenie</a>
						</li>
						
						
						<li data-name="profile" class="drop-down__item">
							<a href="'.URL.'core/profil.php">Dane osobowe</a>
						</li>';
						
						if($_SESSION['uprawnienia'] === 1 ){
						echo '<li data-name="dashboard" class="drop-down__item">
							<a href="#">Administracja</a></li>';
						}
						
						echo '<li data-name="activity" class="drop-down__item">
							<a href="'.URL.'logout.php"><button class="custom-btn btn-8"><span>LOGOUT</span></button></a></li>
					  </ul>
					</div>
				  </div>
				</div>
				</div>';		
}else{
	echo '<div class="dane">
				<form action="logowanie/log-in.php">
			<button type="submit" id="log-in">LOG-IN</button>
				</form>
			</div>';
}




	
			?>

	
<div id="clear-both">
</div>
</div>




<script>
$(document).ready(function(){
  $('#dropDown').click(function(event){
    $('.drop-down').toggleClass('drop-down--active');
    event.stopPropagation();
  });
  $(document).click(function(event) {
    	if (!$(event.target).hasClass('drop-down--active')) {
      		$(".drop-down").removeClass("drop-down--active");
    	}
  	});
});
</script>

