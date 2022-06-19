<?php 		
	require ('../session.php');
	require ('../header.php');
?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	  
	  
	  
<div class="main">
	<div class="karta">
	<div class="header-logo">
		<svg viewBox="0 0 160 40" xmlns="http://www.w3.org/2000/svg">
		<a xlink:href="https://developer.mozilla.org/"><text x="10" y="25">EliXO</text></a>
		</svg>
	</div>
	
	<div id="formularz-logowania">
		
		<form action="zaloguj.php" method="POST">
			<div class="logowanie-s">
			
				<div class="alert info"><?php if(isset($_SESSION['alert'])) echo $_SESSION['alert'] ; 
	unset($_SESSION['alert']);?></div>
			
				<div class="field">
					<input type="text" id="first" class="log-in-input" autocomplete="off" name="user" placeholder="Login" value="" title="Login lub email" autofocus="autofocus"/>
					<i class="material-icons prefix">apps</i>
				</div>
						
				<div class="field">
					<input type="password" id="second" class="log-in-input" autocomplete="off" name="pass" placeholder="Hasło" value="" autofocus="autofocus"/>
					<i class="material-icons prefix">lock</i>
				</div>
				
				<div class="remember-me">
					<input type="checkbox" value="1" name="user[remember_me]" id="user_remember_me">
					<label for="user_remember_me">Remember me</label>
				</div>
				
				<div id="btn-log-in">
					<button type="submit" class="log-in" id="sub">Sign In</button>
				</div>
				
				<div class="links">
					<a href="/users/password/new">Forgot password?</a>
				</div>
			
		
		</form>
	</div>
	</div>
</div>