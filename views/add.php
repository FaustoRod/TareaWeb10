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
		<div class="add-main">
			<div id="add-form-cont">
				<div class="add-form-item">
					<form action="../php/addTech.php" method="post" enctype="multipart/form-data">
						<div class="add-form-field">
							<label for="marca">Marca:</label><br>
							<select name="marca">
								<option>LG</option>
								<option>Sony</option>
								<option>Toshiba</option>
								<option>Samsung</option>
								<option>hp</option>
								<option>Lenovo</option>
								<option>Apple</option>
								<option>AOC</option>
								<option>msi</option>
								<option>hier</option>
							</select>
						</div>
						<div class="add-form-field">
							<label for="Modelo">Modelo:</label><br>
							<input type="text" name="modelo"></input>
						</div>
						<div class="add-form-field">
							<label for="date">Fecha de Compra:</label><br>
							<input type="date" name="date"></input>
						</div>
						<div class="add-form-field">
							<label for="tipo">Tipo:</label><br>
							<input type="radio" name="tipo" value="TV">TV</input>
							<input type="radio" name="tipo" value="Laptop">Laptop</input>
							<input type="radio" name="tipo" value="SmartPhone">SmartPhone</input>
							<input type="radio" name="tipo" value="Tablet">Tablet</input>
							<input type="radio" name="tipo" value="Video Juego">Video Juego</input>
						</div>
						<div class="add-form-field">
							<label for="Color">Color:</label><br>
							<select name="color">
								<option>Negro</option>
								<option>Blanco</option>
								<option>Gris</option>
								<option>Plateado</option>
								<option>Rojo</option>
							</select>
						</div>
						<div class="add-form-field">
							<label for="Foto">Foto:</label><br>
							<input type="file" name="foto"></input>
						</div>
						<div class="add-form-field">
							<label for="Comentario">Comentario:</label><br>
							<textarea name="comentario" maxlenght="200" rows="5" cols="50"></textarea>
						</div>
						<button type="submit" name="addTechBtn" id="addTechBtn">Agregar</button>
					</form>
				</div>
				
				<div class="add-form-item">
				</div>
			</div>
		</div>
		<script type="text/javascript" src="../JavaScript/javascript.js"></script>
		<script type="text/javascript" src="../JavaScript/jquery-3.1.1.min.js"></script>
	</body>

</html>