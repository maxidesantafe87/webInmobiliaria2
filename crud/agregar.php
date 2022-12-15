
<?php

include_once "../conexion/base_de_datos.php";
$orador_nombre = $_POST["Nombre"];
$orador_apellido = $_POST["Apellido"];
$orador_dni = $_POST["Dni"];
$orador_tema = $_POST["Tema"];


 
$prepare=$base_de_datos->prepare("select * from tabla_oradores where dni = '$orador_dni' ");
$array=array();
$prepare->execute($array);
$resultado=$prepare->fetchAll(PDO::FETCH_ASSOC);
 
foreach($resultado as $row)
{
   if($row["dni"]) 
echo '<script language="javascript">alert("Ya se encuentra registrado");</script>
<script>window.location.reload()</script> ';

}


if($orador_dni == !NULL && $orador_nombre== !NULL && $orador_apellido == !NULL && $orador_tema == !NULL ) {

$sentencia = $base_de_datos->prepare("INSERT INTO tabla_oradores(nombre, apellido, tema, inscripcion, dni) VALUES (?, ?, ?, current_timestamp(), ?);");
$resultado = $sentencia->execute([$orador_nombre, $orador_apellido, $orador_tema, $orador_dni]); # Pasar en el mismo orden de los ?

echo '<script language="javascript">alert("Orador Agregado Correctamente");</script>
<script>window.location.reload()</script> ';
    
    } else {
    
    echo 'Hay Datos Vacios.';
    
    }
?>







