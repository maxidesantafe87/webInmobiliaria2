
 /// le asigno a variables los datos que tomamos del formulario
nombre    = document.querySelector('#nombre');
apellido  = document.querySelector('#apellido');
email     = document.querySelector('#email');
valor     = document.querySelector('#precio');
cantidad  = document.querySelector('#cantidad');
descuento = document.querySelector('#categoria');
resultado = document.querySelector('#total');
mensaje   = document.querySelector('#mensaje');


document.querySelector('#resumen').addEventListener( 'click', resumen );

document.querySelector('#vaciar').addEventListener( 'click', vaciar );

// se crea la funcion vaciar, cuando se llama a esta, vacia los formularios con asigando valor null con el "".
function vaciar(){
  
  resultado.innerHTML = "";
  
  mensaje.innerHTML = "";
  
  if( !mensaje.parentElement.classList.contains('d-none') ) mensaje.parentElement.classList.add('d-none');

}

 //// creo la funcion que verifica y da el resultado


 function resumen(){

  vaciar();

//// verifico que nombre y apellido sean corecto y no tengan caracteres especiales, sino devuelve el error.

  if( !nombre.value ){
    mensaje.innerHTML = "Debes ingresar un nombre";
  }else if( /[\d\W][^\s]/.test(nombre.value) ){
    mensaje.innerHTML = nombre.value +": No es un nombre valido. "+"No puede contener numeros ni caracteres especiales";
  }

  if( !apellido.value ){
    mensaje.innerHTML = "Debes ingresar un apellido";
  }
  else if( /[\d\W][^\s]/.test(apellido.value) ){
    mensaje.innerHTML = apellido.value +": No es un apellido valido. "+"No puede contener numeros ni caracteres especiales";
  }

/// verifico que el correo sea correcto y no este vacio
  if( !email.value ){
    mensaje.innerHTML = email.value +": no es un correo valido. "+"Debes ingresar un email valido";
  }
  else if( !/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/.test(email.value) ){
    mensaje.innerHTML = "El formato de email es incorrecto...";
  }

  // verifico que la cantidad minima de entrada sea 1, en caso que este vacio o sea 0, devuelve el error y pone 1 automatiamente
  if( !cantidad.value ||  cantidad.value == "0"){
    mensaje.innerHTML = "La cantidad debe ser al menos de 1";
    cantidad.value = 1;
  }

  if( mensaje.innerHTML ){
    mensaje.parentElement.classList.remove('d-none');
  }
  else{
    let 
      num_valor     = parseFloat(valor.innerHTML),
      num_cantidad  = parseInt(cantidad.value)
    ;
    resultado.innerHTML = ( num_valor * num_cantidad * parseFloat(categoria.value) + " Gracias por su compra: "+ apellido.value+", "+ nombre.value+".");
    
  }


  
}


