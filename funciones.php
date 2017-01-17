<?php 

function conexion($database, $usuario, $pass){
	try {
		$conexion = new PDO("mysql:host=localhost;dbname=$database", $usuario, $pass);
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}


function mostrarError($error){
	echo "<p class='error'> $error</p>";
}
?>