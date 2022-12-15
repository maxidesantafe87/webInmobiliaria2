<?php
//echo "seleccionando servidor aguarde..."."<br>"; B@sededatos2
$host = "localhost";
$usuario = "root";
$pw = "";
$bd = "codoacodo";

$mysqli = new mysqli($host, $usuario, $pw, $bd);
$sel_expediente_actual = "SELECT * FROM `tabla_oradores`ORDER BY inscripcion DESC LIMIT 5";
$libroexpedientes = $mysqli->query($sel_expediente_actual) or die("error accesando tabla" . mysqli_error());


?>
