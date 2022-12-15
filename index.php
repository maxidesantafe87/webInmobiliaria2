<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
       <script type="text/javascript" src ="js/crud.js"></script>

    <title>Trabajo Práctico Integrador Codo a Codo</title>    
  </head>

  
  
  <body>
      <!--Comienza la barra NAV-->
    <nav class="navbar navbar-expand-lg navbar-dark px-2 bk-grey">
      <div class="container-fluid">
        <div class="d-flex align-items-center">

          <img src="imagenes/codoacodo.png" alt="logotipo" class="img-fluid" width="100">

          <a class="navbar-brand" href="#">Conf Bs As</a>

        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">º
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#inicio">La Conferencia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Los_Oradores">Los oradores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Fechas">El lugar y la fecha</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Anotarse_Orador">Conviértete en orador</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="LaConferencia">Ver conferencia en vivo</a>
            </li>
            <li class="nav-item">
              <a class="btn color-pass" href="#comprar_tiket">Comprar tickets</a>
            </li>
          </ul>
        </div>

      </div>
      
<script> //// al tocar en el menu en la conferencia damos mensaje de error
  document.getElementById('LaConferencia').addEventListener('click',function(e){
  e.preventDefault();
  alert ("La Confencia no esta en vivo en este momento");
});
</script>

    </nav>
     <!-- Finaliza la barra NAV-->
    <main>

      <article id="inicio" class="container-fluid">

        <section class="row d-flex align-items-center fondo-transparente">

          <div class="col-sm-5"></div>

          <div class="col-sm-6">

            <h2>Conferencia en Bs As</h2>          

            <p>Bs As llega por primera vez a la Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los experos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de codo a codo y los oradores de primer nivel que tenemos para ti. ¡Te esperamos!</p>

            <div class="d-grid gap-2 d-md-block">
              <a href="#Anotarse_Orador" role="button" class="btn btn-outline-light">Quiero ser un Orador</a>
              <a href="#comprar_tiket" role="button" class="btn btn-success">Comprar Tickets</a>



              
            </div>

          </div>

          <div class="col-sm-1"></div>

        </section>

      </article>
      
   <!--Comienza la parte Orador-->

      <article id="Los_Oradores" class="container g-1 my-4">

        <header class="text-center">

          <small class="text-muted">CONOCE A LOS</small>
  
          <h2>ORADORES</h2>
  
        </header>
        
        <section class="card-group">
          <div class="card m-1">
            <img src="imagenes/steve.jpg" class="card-img-top" alt="Steve Jobs">
            <div class="card-body">
              <span class="badge bg-warning text-dark">JavaScript</span>
              <span class="badge bg-info">React</span>
              <h5 class="card-title">Steve Jobs</h5>
              <p class="card-text text-muted small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis quod ullam iste quia praesentium in, provident ducimus molestiae accusantium ratione? Eius, illum. Labore laudantium quidem minus minima et cumque quas?</p>
            </div>
          </div>
          
          
          <div class="card m-1">
            <img src="imagenes/bill.jpg" class="card-img-top" alt="Bill Gates">
            <div class="card-body">
              <span class="badge bg-warning text-dark">JavaScript</span>
              <span class="badge bg-info">React</span>
              <h5 class="card-title">Bill Gates</h5>
              <p class="card-text text-muted small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis quod ullam iste quia praesentium in, provident ducimus molestiae accusantium ratione? Eius, illum. Labore laudantium quidem minus minima et cumque quas?</p>
            </div>
          </div>
  
          <div class="card m-1">
            <img src="imagenes/ada.jpeg" class="card-img-top" alt="Ada Lovelace">
            <div class="card-body">
              <span class="badge bg-secondary">Negocios</span>
              <span class="badge bg-danger">Startups</span>
              <h5 class="card-title">Ada Lovelace</h5>
              <p class="card-text text-muted small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis quod ullam iste quia praesentium in, provident ducimus molestiae accusantium ratione? Eius, illum. Labore laudantium quidem minus minima et cumque quas?</p>
            </div>
          </div>
        </section>

      </article>


      <article id="Fechas" class="card g-1 my-4 border">

        <div class="row g-0">
  
          <div class="col-md-6 border">
            <img src="imagenes/honolulu.jpg" class="img-fluid rounded-start h-100" alt="Paisaje">
          </div>
  
          <div class="col-md-6 text-light bk-grey border">
            <div class="card-body">
              <h5 class="card-title">Bs As - Octubre</h5>
              <p class="card-text">Buenos Aires es la provincia y localidad más grande del estado de Argentina, en los Estados Unidos. Honolulu es la más sureña de entre las principales ciudades estadounidenses. Aunque el nombre de Honolulu se refiere al área urbana en la costa sureste de la isla Oahu, la ciudad y el condado de Honolulu han formado una ciudad-condado consolidada que cubre toda la ciudad (aproximadamente 600 km<sup>2</sup> de superficie).</p>
              <a href="https://es.wikipedia.org/wiki/Honolulu" target="_blank" role="button" class="btn btn-outline-light">Conocé más</a>
            </div>
          </div>
  
        </div>
        
      </article>
   <!--Comienza orador doble-->

  <article id="Fechas" class="card g-1 my-4 border">

    <div class="row g-0">

 <!--COMIENZA INCLUIR ORADOR A BASE DE DATOS-->
      <div class="col-md-6 border">

      <header class="text-center">
  
        <small class="text-muted">CONVIERTETE EN UN</small>

        <h2>ORADOR</h2>

        <p>Anótate como orador para dar una <abbr title="Tipo de charla">charla ignate</abbr>. Cuéntanos de qué quieres hablar...</p>

      </header>

      <form action="registro/agregar.php" method="post">

        <fieldset class="row mb-3 justify-content-center">

          <div class="col-3">
            <input type="text" name="orador_nombre" id="orador_nombre" class="form-control" placeholder="Nombre" required maxlength="50" >
          </div>

          <div class="col-3">
            <input type="text" name="orador_apellido" id="orador_apellido" class="form-control" placeholder="Apellido" required maxlength="50" >
          </div>

          <div class="col-2">
            <input type="text" name="orador_dni" id="orador_dni"" class="form-control" placeholder="DNI" required maxlength="8" >
          </div>
        </fieldset>

        <fieldset class="row mb-3 justify-content-center">

          <div class="col-8">
            <textarea name="orador_tema" class="form-control" id="orador_tema" rows="4" placeholder="¿Sobre qué quieres hablar?" required aria-describedby="usu-des-ver"></textarea>
            <div id="usu-des-ver" class="form-text">Recuerda incluir un título para tu charla.</div>
          </div>

        </fieldset>

        <fieldset class="row justify-content-center">

          <div class="col-8">

            <div class="d-grid gap-2">
             
              <button class="btn w-100 color-pass-ticket" type="button" name="enviar" value="Enviar" href="javascript:;" onclick="Agregar($('#orador_nombre').val(),$('#orador_apellido').val(),$('#orador_dni').val(),$('#orador_tema').val());">Enviar</button>
            </div>
            <div id="resultado"></div>
          </div>
         
        </fieldset>

      </form>
      
      </div>



 <!--Finaliza INCLUIR ORADOR A BASE DE DATOS-->
 


 <!--COMIENZA MOSTRAR DATOS-->
      <div class="col-md-6 ">
        <div id="Central" class="Central">
          <h2>
            <center>Ultimos Oradores Inscriptos: </center>
          </h2>
      
      
          <table style="margin: 0 auto;" border="1" cellpadding="0" cellspacing="0" class="tabla" ;>
      
            <tr class="ajaxTitle">
              <th width="2%"> </th>
              <th width="15%">
                <center>Apellido</center>
              </th>
              <th width="30%">
                <center>Nombre</center>
              </th>
              <th width="40%">
                <center>Curso</center>
              </th>
              <th width="15%">
                <center>Inscripcion</center>
              </th>
            </tr>
            </thead>
            <tbody>
				<?php
          include ("conexion/conectar.php"); 
				$numeracion = 1;
				while ($reg_bases_actual = mysqli_fetch_array($sel_datos_base)) { ?>
					<tr>
						<th style="vertical-align:middle;"><?php echo "$numeracion" ?></th>

					  <td style="vertical-align:middle;">
							<H6><?php echo $reg_bases_actual['apellido'] ?> </H6>
						</td>
					
            <td style="vertical-align:middle;">
							<H6><?php echo $reg_bases_actual['nombre'] ?> </H6>
						</td>
					
            <td style="vertical-align:middle;">
							<H6><?php echo substr($reg_bases_actual['tema'], 0, 80) ?><?php echo "..." ?> </H6>
						</td>

            <td style="vertical-align:middle;">
							<H6><?php echo $reg_bases_actual['inscripcion'] ?> </H6>
						</td>

						




					</tr>

			</tbody>

<?php $numeracion++;
} ?>
          </table>
          


       
          <fieldset class="row mb-3 justify-content-center">

<div class="col-6">
  <input type="text" name="eliminar_dni" id="eliminar_dni" class="form-control" placeholder="Para eliminarse como orador ingrese su DNI:" required maxlength="8" >
</div>



<div class="col-6">
<button class="btn w-100 color-pass-ticket" type="button" name="eliminar" value="Eliminar" href="javascript:;" onclick="Eliminar($('#eliminar_dni').val());">Eliminar</button>  
<div id="resultadoEliminar"></div>
</div>
</fieldset>
          
          
                 
          
        
        </div>
      
        </div>
      
      </div>
      
    </div>
 <!--FINALIA MOSTRAR DATOS-->

  
</article>
 
 <!--Finaliza orador doble-->


  <!--Comienza la parte del ticket-->
        <article id="comprar_tiket" class="container my-4" style="max-width: 50rem;">

          <header class="text-center">
  
            <div class="card-group">
    
              <div class="card mx-1 border-primary" style="min-width:10rem; min-height:10rem;">
                <div class="card-body">
                  <h5 class="card-title display-6"><b>Estudiante</b></h5>
                  <p class="card-text">Tienen un descuento</p>          
                  <p class="card-text"><b>80%</b></p>
                  <small class="text-muted">* Presentar documentación</small>
                </div>
              </div>
      
              <div class="card mx-1 border-primary" style="min-width:10rem; min-height:10rem;">
                <div class="card-body">
                  <h5 class="card-title display-6"><b>Trainee</b></h5>
                  <p class="card-text">Tienen un descuento</p>          
                  <p class="card-text"><b>50%</b></p>
                  <small class="text-muted">* Presentar documentación</small>
                </div>
              </div>
      
              <div class="card mx-1 border-warning" style="min-width:10rem; min-height:10rem;">
                <div class="card-body">
                  <h5 class="card-title display-6"><b>Junior</b></h5>
                  <p class="card-text">Tienen un descuento</p>          
                  <p class="card-text"><b>15%</b></p>
                  <small class="text-muted">* Presentar documentación</small>
                </div>
              </div>            
      
            </div>
         
           
          <br>

          <center> <h3>VALOR DEL TIKET $<span id="precio">200</span></h3></center>
  
  
          <fieldset class="bordeVentas">
          
    
          <form action="#" method="post">
      
            <fieldset class="row">  
              <div class="col-md m-1">
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" required maxlength="30" class="form-control">
              </div>          
              <div class="col-md m-1">
                <input type="text" name="apellido" id="apellido" placeholder="Apellido" required maxlength="30" class="form-control">
              </div>  
            </fieldset>  
            
            <fieldset class="row">  
              <div class="col-md m-1">
                <input type="email" name="email" id="email" placeholder="Correo" pattern="^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$" class="form-control">
              </div>  
            </fieldset>  
            
            <fieldset class="row text-start">  
              <div class="col-md m-1">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" name="cantidad" id="cantidad" min="1" step="1" required class="form-control m-1 ">
              </div>  
              <div class="col-md m-1">
                <label for="cantidad" class="form-label">Categoría</label>
                <select class="form-select" name="categoria" id="categoria" >
                  <option selected value="1">Sin descuento</option>
                  <option value=".8">Estudiante</option>
                  <option value=".5">Trainee</option>
                  <option value=".15">Junior</option>
                </select>
              </div>
            </fieldset>
    
            <fieldset class="row text-start">  
              <div class="col-md m-1">
                <p class="alert alert-info" role="alert"><b> Total a pagar en $: </b> <span id="total"></span></p>
              </div>
            </fieldset>
  
            <fieldset class="row text-start d-none">
  
              <p id="mensaje" class="text-danger text-center"></p>
  
            </fieldset>
    
            <fieldset class="row">
              <div class="col-md m-1">
                <button class="btn w-100 color-pass-ticket" id="vaciar" type="reset">Borrar</button>
              </div>
              <div class="col-md m-1">
                <button class="btn w-100 color-pass-ticket" id="resumen" type="button">Resumen</button>        
              </div>
            </fieldset>        
            
          </form>      
    
        </article>    <!--Comienza la parte del ticket-->   
     

    </main>
    
    <footer class="bk-blue">

      <nav class="container text-center">

        <div class="row align-items-center">

          <div class="col-md-2">
            <a class="nav-link" href="#">Preguntas Frecuentes</a>
          </div>
    
          <div class="col-md-2">
            <a class="nav-link" href="#">Contáctanos</a>
          </div>
    
          <div class="col-md-2">
            <a class="nav-link" href="#">Prensa</a>
          </div>
    
          <div class="col-md-2">
            <a class="nav-link" href="#">Términos y Condiciones</a>
          </div>
    
          <div class="col-md-2">
            <a class="nav-link" href="#">Privacidad</a>
          </div>
    
          <div class="col-md-2">
            <a class="nav-link" href="#">Estudiantes</a>
          </div>        

        </div>
      </nav>    
      <footer>  <h6 align="center">MGZ @ 2022</h6></footer>
    </footer>  


  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/75a87d5511.js" crossorigin="anonymous"></script>
    <script src="js/ticket.js"></script>
  </body>
</html>