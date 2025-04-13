<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Te Apoyamos S.A.S.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" asset href="{{ asset('css/estilo.css') }}">
    

</head>
<body>

    <div class="barra-superior d-flex flex-wrap align-items-center p-3">
        
        <div class="titulo-logo me-auto">
            <h1 class="m-0">Te Apoyamos S.A.S.</h1>
        </div>
        
        
        <div class="d-flex flex-column align-items-end">           
            

                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-primary" onclick="location.href='areanegocio.html'">Inicio</button>
                  <button type="button" class="btn btn-primary"onclick="location.href='consulta.html'">Procesos</button>
                  <button type="button" class="btn btn-primary"onclick="location.href='carrera.html'">Carrera</button>
                </div>

                         

            
            <div class="d-flex">
                <input type="text" class="form-control" placeholder="Buscar...">
                <button class="btn btn-outline-secondary ms-2">X</button>
            </div>
        </div>

        
        <img src="IMG/logo.jpg" alt="Logo" class="ms-3" width="200">
    </div>

    
    
    <div class="contenedor-principal">
     
      <div class="card-info">
          <div class="card-header">
              <h5>Sobre Nosotros</h5>
          </div>
          <div class="card-body">
              <h6>Te Apoyamos S.A.S.</h6>
              <p>Somos un bufete de abogados comprometido con la justicia y el bien común.</p>
              <ul class="lista-info">
                  <li><strong>Fundación:</strong> 2010</li>
                  <li><strong>Especialidades:</strong> Derecho Civil, Laboral, Familiar</li>
                  <li><strong>Ubicación:</strong> Bogotá, Colombia</li>
              </ul>
          </div>
          <div class="card-footer">
              <small>"Buscando siempre el bien común"</small>
          </div>
      </div>
      
      
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img asset="{{images/abogados1.jpg}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Martin Santivañez en su nuevo articulo</h5>
              <p>La importancia del bien comun.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="IMG/abogados2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Somos una empresa comprometida con la igualdad de genero</h5>
              <p>Nuestro equipo de Leyes.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="IMG/abogados3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Mexico Conference</h5>
              <p>Acompañemos a nuestros profesionales en esta grandiosa exposición.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>

  <div class="container">
    <div class="row mb-4">
        <div class="col text-center">
            <h2> Nuestras Lineas de Negocio</h2>
        </div>
    </div>

  </div>


<div class="container">
  <div class="row">
    <!-- Cada card ocupa 6 columnas (md-6) en pantallas medianas/grandes, resultando en 2 columnas -->
    <div class="col-md-6 mb-4">
      <div class="card h-100" style="width: 18rem;">
        <img src="IMG/derecho laboral.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Derecho Laboral</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-6 mb-4">
      <div class="card h-100" style="width: 18rem;">
        <img src="IMG/derecho familiar.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Derecho Familiar y Sucesorio</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-6 mb-4">
      <div class="card h-100" style="width: 18rem;">
        <img src="IMG/derecho inmobiliario.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Derecho Inmobiliario y Notarial</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-6 mb-4">
      <div class="card h-100" style="width: 18rem;">
        <img src="IMG/asesoria fiscal.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Asesoria Fiscal y Tributaria</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-6 mb-4">
      <div class="card h-100" style="width: 18rem;">
        <img src="IMG/derecho corporativo.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Derecho Corporativo y Empresarial</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-6 mb-4">
      <div class="card h-100" style="width: 18rem;">
        <img src="IMG/resolucion conflictos.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Litigios y Resolución de Conflictos</p>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="info_empresa">
    <div class="mision-vision">
      <div class="mision">
        <h2> Nuestra Misión</h2>
          <p>Brindar asesoría y representación legal de alta
            calidad a nuestros clientes, basándonos en principios
            de responsabilidad, confidencialidad y honestidad. 
            Nos esforzamos por ofrecer soluciones eficientes, 
            personalizadas e innovadoras, garantizando el respeto 
            por los derechos y el bienestar de quienes confían en 
            nosotros.</p>
        </div>

      <div class="vision">
        <h2> Nuestra Visión</h2>
          <p>Ser la firma de abogados líder en soluciones legales
          integrales en Latinoamérica, reconocida por nuestra
          excelencia, ética profesional y compromiso con la 
          justicia, contribuyendo al desarrollo de una sociedad 
          más equitativa y transparente..</p>
      </div>
  </div>

  <div class="organigrama">

    <h2>Nuestra Organización</h2>
    <img src="IMG/organigrama.jpg" alt="organigrama">
  </div>
</section>

 <!-- Formulario de Cotización -->
 <section class="contenido-evento my-5">
  <div class="contenedor-evento">            
      <form action="/registro" method="post" class="p-4 rounded shadow bg-primary-subtle"> 

      <h2 class="text-center mb-4">Agenda tu cita con nosotros, tu primera consulta es gratis</h2>         
      
      
                  <!-- Nombre -->
                  <div class="mb-3">
                      <label for="nombre" class="form-label">Nombre completo:</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required>
                  </div>

                  <!-- Fecha Evento -->
                  <div class="mb-3">

                      <label for="fecha-evento" class="form-label">Fecha de la asesoria:</label>
                      <input type="date" class="form-control" id="fecha-evento" name="fecha-evento" required>
                      
                  </div>

                  
                  <!-- Telefono -->
                  <div class="mb-3">

                      <label for="telefono" class="form-label">Telefono de Contacto:</label>
                      <input type="text" class="telefono" id="telefono" name="telefono" placeholder="Telefono de contacto" required>
                      
                  </div>
                  
                  <!-- Email -->
                  <div class="mb-3">

                      <label for="email" class="form-label">Email:</label>
                      <input type="email" class="email" id="email" name="email" placeholder="Correo electronico" required>
                      
                  </div>
                  
                  <!-- Detalles del Evento -->
                  <div class="mb-3 p-4 bg-light rounded shadow" style="width: 100%; max-width: 700px; margin: auto;">

                      <label for="detalles" class="form-label">Detalles de la consulta:</label>
                      <textarea class="form-control" id="detalles" name="detalles" rows="5" placeholder="Cuéntanos tus ideas..." required></textarea>
                  </div>
          
                  <div class="d-flex gap-3 justify-content-center text-center">               
                      <input type="submit" value="Registrar">
                      <input type="submit" value="Editar">
                  </div>
              
      </form> 
      
  </div>

</section>   

</div>

  <div class="barra-inferior">
    <div class="iconos-redes">
        <div class="red-social">
            <a href="URL_FACEBOOK" target="_blank"><img src="IMG/facebook.png" alt="Facebook" class="icono-red"></a>
            <span class="nombre-usuario">Te Apoyamos FB</span>

        </div>

        <div class="red-social">
            <a href="URL_INSTAGRAM" target="_blank"><img src="IMG/instragram.jpg" alt="Instagram" class="icono-red"></a>
            <span class="nombre-usuario">@TeApoyamosSAS</span>
          </div>

          <div class="red-social">
            <a href="URL_TWITTER" target="_blank"><img src="IMG/x.png" alt="Twitter" class="icono-red"></a>
            <span class="nombre-usuario">@TeApoyamosSASX</span>
          </div>

    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>