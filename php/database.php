<?php

session_start();

$conexion = new mysqli('localhost','root','f5880509');
$conexion->select_db("tarea10");

if(mysqli_connect_error()){
	echo mysqli_connect_error();
}

?>