<?php
	session_start();
?>
<!DOCTYPE html>
<html>

	<head>
		<title>ReTech</title>
		<link rel="stylesheet" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body>
		<div class="header">
			<div class="header-main">			
				<div class="header-item logo-cont">
					<div class="logo">
						<img src="assets/logo.png" style="width:100%;height:100%;">
					</div>

					<div class="titulo">
					<h1>My-Tech</h1>
					</div>
				</div>

				<div class="header-item">
				</div>

				<div class="header-item">
					redes
				</div>
			</div>
		</div>	
		
		<div class="section">
			<div class="login-form-cont">
				<h2 style="text-align:center">Log In</h2>
				<form action="php/login.php" method="post" style="margin-left:100px;margin-top:10px;">
					<div class="login-item-cont">
						<input class="login-input user-login" type=text name="user" placeholder="username"maxlength="15">
					</div>
					
					<div class="login-item-cont">
						<input class="login-input pass-login" type=password name="pass" placeholder="Password" maxlength="10">
					</div>
					<button type="submit" name="btn-login" style="border:none; width:67%; height:25px; background-color:#1579AD; color:white;" width>Login</button>
					<p>Si no tienes cuenta, <a href="views/signup.php">Registrate.</a></p>
				</form>	
			</div>
		</div>
		<script type="text/javascript" src="JavaScript/javascript.js"></script>
		<script type="text/javascript" src="JavaScript/jquery-3.1.1.min.js"></script>
	</body>

</html>