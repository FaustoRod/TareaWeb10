<?php
	session_start();
?>
<!DOCTYPE html>
<html>

	<head>
		<title>ReTech</title>
		<link rel="stylesheet" href="../style.css">
	</head>
	
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
	
	<div id="tech-info">
		<a href="add.php" style="text-decoration:none;padding:5px;border:2px solid black; color:white;background-color:black;font-size:30px;">Agregar Mas</a>
		<?php
		
		include("../php/getTech.php");	
		?>
	</div>
	<body>
	
	</body>

</html>