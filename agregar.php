<?php
echo "Agregado el Orador: ".$_POST["Nombre"].", ".$_POST["Apellido"].". DNI: ".$_POST["Dni"].", Tema: ".$_POST["Tema"]  ;
?>

<?php

include_once "../registro/base_de_datos.php";
$orador_nombre = $_POST["Nombre"];
$orador_apellido = $_POST["Apellido"];
$orador_dni = $_POST["Dni"];
$orador_tema = $_POST["Tema"];
?>

<?php
$sentencia = $base_de_datos->prepare("INSERT INTO tabla_oradores(nombre, apellido, tema, inscripcion, dni) VALUES (?, ?, ?, current_timestamp(), ?);");
$resultado = $sentencia->execute([$orador_nombre, $orador_apellido, $orador_tema, $orador_dni]); # Pasar en el mismo orden de los ?

echo '<script language="javascript">alert("Orador Agregado Correctamente");</script>
<script>window.location.reload()</script> ';
?>

