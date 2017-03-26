<?php

require_once("database.php");

$nombre = $_POST['user_nombre'];
$apellido = $_POST['user_apellido'];
$email = $_POST['email'];
$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "INSERT INTO usuario (nombre,apellido,email,user,password) VALUES ('$nombre', '$apellido', '$email', '$user', '$pass')";

$conexion->query($sql);

if($conexion->affected_rows  === 1){
	header("Location:../index.php");
}else{
	header("Location:../views/error.php");
}

?>