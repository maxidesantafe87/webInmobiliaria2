<?php
//echo "seleccionando servidor aguarde..."."<br>"; B@sededatos2
$host = "localhost";
$usuario = "id20019168_usuarioroot";
$pw = "CodoACodo@2023";
$bd = "id20019168_codoacodo";

$mysqli = new mysqli($host, $usuario, $pw, $bd);
$sel_bases_datos = "SELECT * FROM `tabla_oradores`ORDER BY inscripcion DESC LIMIT 5";
$sel_datos_base = $mysqli->query($sel_bases_datos) or die("error accesando tabla" . mysqli_error());


?>
