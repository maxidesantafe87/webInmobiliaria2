<?php

$contraseña = "CodoACodo@2023";
$usuario = "id20019168_codoacodo";
$nombre_base_de_datos = "id20019168_codoacodo";
try{
	$base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
?>

