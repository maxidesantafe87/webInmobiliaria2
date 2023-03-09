<?php
//echo "seleccionando servidor aguarde..."."<br>"; B@sededatos2
$host = "localhost";
$usuario = "usuarioroot";
$pw = "q2Tp@=x>|zR*u33u";
$bd = "codoacodo";

$mysqli = new mysqli($host, $usuario, $pw, $bd);
$sel_bases_datos = "SELECT * FROM `tabla_oradores`ORDER BY inscripcion DESC LIMIT 5";
$sel_datos_base = $mysqli->query($sel_bases_datos) or die("error accesando tabla" . mysqli_error());


?>
