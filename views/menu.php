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
		<div id="menu-cont">
			<div id="menu">
				<div class="menu-item">
					<a href="add.php" style="text-decoration:none"><h3 style="text-align:center;color:black;">Agregar Aparato</h3></a>
					<img src="../assets/pc.png" style="margin:auto; padding-left:170px;padding-top:35px;">
				</div>
				<div class="menu-item">
					<a href="viewall.php" style="text-decoration:none"><h3 style="text-align:center;color:black;">Ver Aparatos</h3></a>
					<img src="../assets/fon.png" style="padding-left:170px; padding-top:35px;">
				</div>
			</div>
		</div>
		
		<script type="text/javascript" src="JavaScript/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="JavaScript/javascript.js"></script>
	</body>

</html>