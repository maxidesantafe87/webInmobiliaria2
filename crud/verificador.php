<?php

include_once "../registro/base_de_datos.php";
$orador_nombre = $_POST["Nombre"];
$orador_apellido = $_POST["Apellido"];
$orador_dni = $_POST["Dni"];
$orador_tema = $_POST["Tema"];

echo $orador_dni;

if($orador_dni == NULL) {

echo 'Hay galletas';

} else {

echo 'No hay galletas';

}

?>