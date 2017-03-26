<?php

session_start();
require_once("database.php");

$dir = "../images".basename($_FILES['foto']['name']);
$file = $_FILES['foto']['tmp_name'];

$id_user = $_SESSION['id'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$fecha = $_POST['date'];
if(isset($_POST['tipo'])){
	$tipo = $_POST['tipo'];
}

$color = $_POST['color'];
if(move_uploaded_file($file,$dir)){
	$foto = $dir;
}

$comentario = $_POST['comentario'];
	
$sql = "INSERT INTO aparato (id_user, marca, modelo, fecha, tipo, color, foto, comentario) VALUES ('$id_user','$marca','$modelo','$fecha','$tipo', '$color','$foto','$comentario')";	

$conexion->query($sql);

if($conexion->affected_rows === 1){
	header("Location:../views/viewall.php");
}else{
	header("Location:../views/error.php");
}
?>