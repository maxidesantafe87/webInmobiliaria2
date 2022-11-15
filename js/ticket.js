
 
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


function vaciar(){
  
  resultado.innerHTML = "";
  
  mensaje.innerHTML = "";
  
  if( !mensaje.parentElement.classList.contains('d-none') ) mensaje.parentElement.classList.add('d-none');

}

function resumen(){

  vaciar();

  if( !cantidad.value ){
    mensaje.innerHTML = "La cantidad debe ser al menos de 1";
    cantidad.value = 1;
  }

  if( !email.value ){
    mensaje.innerHTML = "Debes ingresar un email valido";
  }
  else if( !/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/.test(email.value) ){
    mensaje.innerHTML = "El formato de email es incorrecto...";
  }

  if( !apellido.value ){
    mensaje.innerHTML = "Debes ingresar un apellido";
  }
  else if( /[\d\W][^\s]/.test(apellido.value) ){
    mensaje.innerHTML = "El apellido no puede contener numeros ni caracteres especiales";
  }

  if( !nombre.value ){
    mensaje.innerHTML = "Debes ingresar un nombre";
  }
  else if( /[\d\W][^\s]/.test(nombre.value) ){  
    mensaje.innerHTML = "El nombre no puede contener numeros ni caracteres especiales";
  }

  if( mensaje.innerHTML ){
    mensaje.parentElement.classList.remove('d-none');
  }
  else{
    let 
      num_valor     = parseFloat(valor.innerHTML),
      num_cantidad  = parseInt(cantidad.value)
    ;
    resultado.innerHTML = ( num_valor * num_cantidad * parseFloat(categoria.value) );
  }


  
}


