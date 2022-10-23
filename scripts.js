/* función que va al top de la página cuando se presiona el botón flecha*/

const botonTop = document.getElementById("vuelve-arriba");
// Cuando se da scroo en  20px desde el top empieza a mostrar el botón
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    botonTop.style.display = "block";
  } else {
    botonTop.style.display = "none";
  }
}
// Click sobre botón amarillo, te lleva al comienzo del documento
function topFunction() {
  document.body.scrollTop = 0; // Safari
  document.documentElement.scrollTop = 0; // demás navegadores
}
/*------------------------------------------------------------------------------*/
const ventaPrecio = 200; //precio sin descuento del ticket
const ventaDescuentos = [1.0, 0.2, 0.5, 0.85]; //multiplicador según categoría descuentos.

const ventaNombre = document.getElementById("ventaNombre");
const ventaApellido = document.getElementById("ventaApellido");
const ventaEmail = document.getElementById("ventaEmail");
const ventaCantidad = document.getElementById("ventaCantidad");
const ventaCategoria = document.getElementById("ventaCategoria");
const ventaMensajes = document.getElementById("ventaMensajes");

const ventaEnviar = document.getElementById("ventaEnviar"); //button
const ventaBorrar = document.getElementById("ventaBorrar");

const expRegular = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

ventaEnviar.addEventListener("click", validarVenta);
ventaBorrar.addEventListener("click", borraMensaje);
ventaNombre.addEventListener("blur", borraMensaje);
ventaApellido.addEventListener("blur", borraMensaje);
ventaEmail.addEventListener("blur", borraMensaje);

function validarVenta() {
  let valida = true;
  if (ventaNombre.value.length < 2) {
    ventaMensajes.className = "alert alert-danger";
    ventaMensajes.innerHTML = "Ingrese un nombre válido (2 letras mínimo)";
    ventaNombre.focus();
    valida = false;
  } else if (ventaApellido.value.length < 2) {
    ventaMensajes.className = "alert alert-danger";
    ventaMensajes.innerHTML = "Ingrese un apellido válido (2 letras mínimo)";
    ventaApellido.focus();
    valida = false;
  } else if (!ventaEmail.value.match(expRegular)) {
    ventaMensajes.className = "alert alert-danger";
    ventaMensajes.innerHTML = "El email no es válido";
    ventaEmail.focus();
    valida = false;
  }
  if (valida) {
    borraMensaje();
    calculaTotalVenta();
  }
}

function calculaTotalVenta() {
  let index = Number(ventaCategoria.value);
  let calculo = parseFloat(ventaCantidad.value) * ventaPrecio * ventaDescuentos[index];

  ventaMensajes.className = "alert alert-primary";
  ventaMensajes.innerHTML = "Total a Pagar: " + " " + new Intl.NumberFormat("es-AR", {
      style: "currency",
      currency: "ARS",
    }).format(calculo);
}

function borraMensaje() {
  ventaMensajes.className = "alert alert-primary";
  ventaMensajes.innerHTML = "Total a Pagar: ";
}
