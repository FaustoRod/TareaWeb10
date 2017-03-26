<?php
session_start();
include("database.php");

$sql = "SELECT * FROM aparato WHERE id_user = ".$_SESSION['id_user']."";
														 
$result = $conexion->query($sql);

	if($row=mysqli_fetch_array($result)){
	echo "
	<link rel='stylesheet' href='../style.css' type='text/css'>
	<div class='card'>
			<div class='card-cont card-img'>
				<img src=".$row['foto']." style='width:100%;height:100%;'>
			</div>			
			<div class='card-cont card-div'>
			</div>
			<div class='card-cont card-text'>
				<p>".$row['marca']."</p>
				<p>".$row['modelo']."</p>			
				<p>".$row['tipo']."</p>
				<p>".$row['peso']."</p>
				<p>".$row['color']."</p>
			</div>			
			<div class='card-cont card-div'>
			</div>
			<div class='card-cont card-coment'>
			
				<p>Fecha: ".$row['fecha']."</p>
				<p style='width:150px;'>".$row['comentario']."</p>
			
			</div>
		</div>";
}													 
?>