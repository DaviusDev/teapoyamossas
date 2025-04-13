<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Te Apoyamos S.A.S.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="{{ asset('css/estilo.css') }}">
    

</head>
<body>

    <div class="barra-superior d-flex flex-wrap align-items-center p-3">
        
        <div class="titulo-logo me-auto">
            <h1 class="m-0">Te Apoyamos S.A.S.</h1>
        </div>
        
        
        <div class="d-flex flex-column align-items-end">           
            

                <div class="btn-group" role="group" aria-label="Basic example">
                   <a href="#" class="btn btn-primary">Inicio</a>
                  <a href="{{ route('proceso') }}" class="btn btn-primary">Procesos</a>

                  <a href="{{ route('carrera') }}" class="btn btn-primary">Carrera</a>
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
            <img src="IMG/abogados1.jpg" class="d-block w-100" alt="...">
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