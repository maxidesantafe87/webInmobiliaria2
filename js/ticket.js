

nombre    = document.querySelector('#nombre');
apellido  = document.querySelector('#apellido');
email     = document.querySelector('#email');
valor     = document.querySelector('#valor_unitario');
cantidad  = document.querySelector('#cantidad');
descuento = document.querySelector('#categoria');
resultado = document.querySelector('#valor_compra');
mensaje   = document.querySelector('#mensaje');


document.querySelector('#calcular_compra').addEventListener( 'click', calcular_compra );

document.querySelector('#borrar_compra').addEventListener( 'click', reiniciar_formulario );


function reiniciar_formulario(){
  
  resultado.innerHTML = "";
  
  mensaje.innerHTML = "";
  
  if( !mensaje.parentElement.classList.contains('d-none') ) mensaje.parentElement.classList.add('d-none');

}


function calcular_compra(){

  reiniciar_formulario();

  if( !cantidad.value ){
    mensaje.innerHTML = "La cantidad debe ser al menos de 1...";
    cantidad.value = 1;
  }

  if( !email.value ){
    mensaje.innerHTML = "Debes ingresar un email";
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


