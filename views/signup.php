<?php
	session_start();
?>
<!DOCTYPE html>
<html>

	<head>
		<title>ReTech</title>
		<link rel="stylesheet" href="../style.css">
	</head>
	
	<body>
		<div class="header">
			<div class="header-main">			
				<div class="header-item logo-cont">
					<div class="logo">
						<img src="../assets/logo.png" style="width:100%;height:100%;">
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
		
		<div id="signup-cont">	
			<div id="signup-form">
				<div id="signup-form-cont">
					<h2>Registro</h2>
					<form action="../php/signup.php" method="post">
						<div class="signup-field">
							<label for="user_nombre">Nombre:</label><br>
							<input type="text" name="user_nombre">
						</div><br>
						<div class="signup-field">
							<label for="user_apellido">Apellido:</label><br>
							<input type="text" name="user_apellido">
						</div><br>
						<div class="signup-field">
							<label for="email">E-Mail:</label><br>
							<input type="text" name="email">
						</div><br>
						<div class="signup-field">
							<label for="user">Usuario:</label><br>
							<input type="text" name="user">
						</div><br>
						<div class="signup-field">
							<label for="pass">Password:</label><br>
							<input type="text" name="pass">
						</div>
						<button type="submit" name="reg-user-btn" style="width:100%;height:30px;margin-top:20px;">Registrarse</button>
					</form>
				</div>	
			</div>
		</div>
	</body>

</html>