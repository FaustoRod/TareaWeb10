<?php

session_start();
require_once("database.php");

$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM usuario where user = '$user' and password = '$pass'";

$result = $conexion->query($sql);

if(!$row = mysqli_fetch_array($result)){
	header("Location:../views/error.php");
}else{
	$_SESSION['id_user'] = $row['id'];
	header("Location:../views/menu.php");
}


?>