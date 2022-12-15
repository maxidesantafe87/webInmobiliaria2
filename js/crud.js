function Agregar(orador_nombre,orador_apellido,orador_dni,orador_tema) {
    var parametros = {"Nombre":orador_nombre,"Apellido":orador_apellido,"Dni":orador_dni,"Tema":orador_tema};
$.ajax({
   data:parametros,
   url:'crud/agregar.php',
   type: 'post',
   beforeSend: function () {
       $("#resultado").html("Procesando, espere por favor");
   },
   success: function (response) {   
       $("#resultado").html(response);
   }
});
}

function Eliminar(eliminar_dni) {
    var parametros = {"DniEliminado":eliminar_dni};
$.ajax({
   data:parametros,
   url:'crud/eliminar.php',
   type: 'post',
   beforeSend: function () {
       $("#resultadoEliminar").html("Procesando, espere por favor");
   },
   success: function (response) {   
       $("#resultadoEliminar").html(response);
   }
});
}

