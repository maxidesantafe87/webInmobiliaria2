<?php


include_once "../registro/base_de_datos.php";
$dni_a_eliminar = $_POST["DniEliminado"];


 
$prepare=$base_de_datos->prepare("select * from tabla_oradores where dni = '$dni_a_eliminar' ");
$array=array();
$prepare->execute($array);
$resultado=$prepare->fetchAll(PDO::FETCH_ASSOC);
 
foreach($resultado as $row)
{
   if($row["dni"]) 
$sentencia = $base_de_datos->prepare("DELETE FROM tabla_oradores WHERE dni = '$dni_a_eliminar';");
$resultadoSentencia = $sentencia->execute(); 

echo '<script language="javascript">alert("Orador Eliminado Correctamente");</script>
<script>window.location.reload()</script> ';

}
echo "Verifique el DNI ingresado.";
?>



