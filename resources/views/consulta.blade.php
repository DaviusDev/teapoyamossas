<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Te Apoyamos S.A.S.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href= "{{ asset('css/estilo2.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="">
    </script>

</head>
<body>
  <div class="barra-superior d-flex flex-wrap align-items-center p-3">
        <div class="titulo-logo me-auto">
            <h1 class="m-0">Te Apoyamos S.A.S.</h1>
        </div>

        <!-- Contenedor principal derecho -->
        <div class="d-flex flex-column gap-2"> 
            <!-- Grupo de botones -->
            <!-- David, la versión original de los botones son los que aparecen comentandos en las lineas 24 a 27; sin embargo, estos no se enrutaban con las respectivas secciones, los botones que en encuentran en el div de lineas 28 a 32 fueron incluidos por mi -->
            <!--<div class="btn-group" role="group">
                <button type="button" class="btn btn-primary">Inicio</button>
                <button type="button" class="btn btn-primary">Procesos</button>
                <button type="button" class="btn btn-primary">Carrera</button>-->
                <div class="btn-group" role="group">
                  <a href="{{ route('index') }}" class="btn btn-primary">Inicio</a>
                  <a href="#" class="btn btn-primary">Procesos</a>
                  <a href="{{ route('carrera') }}" class="btn btn-primary">Carrera</a>
                </div>
                

            </div>

            <!-- Barra de búsqueda -->
            <div class="d-flex">
                <input type="text" class="form-control" placeholder="Buscar...">
                <button class="btn btn-outline-secondary ms-2">X</button>
            </div>
        </div>
         <img src="IMG/logo.jpg" alt="Logo" class="ms-3" width="200">
  </div>
  
  <div class="contenedor-principal">
    <div class="w-100 border-bottom py-3">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-center fw-bold text-primary mb-0">CONSULTA DE PROCESOS</h1>
            </div>
        </div>
        
        <!-- Barra de navegación -->
        <div class="nav-bar p-3 border-bottom">
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#" class="text-primary fw-medium text-decoration-underline">
                    Registro
                </a>
                <a href="#" class="text-primary fw-medium text-decoration-underline">
                    Iniciar Sesión
                </a>
                <a href="#" class="text-primary fw-medium text-decoration-underline">
                    Consultar Proceso
                </a>
            </div>
        </div>

        <!-- Barra de búsqueda separada -->
        <div class="busqueda-container p-3 bg-light">
            <div class="row align-items-center justify-content-center">
                <div class="col-auto">
                    <label class="fw-medium me-2">Número de Proceso:</label>
                </div>
                <div class="col-md-6">
                    <div class="d-flex">
                        <form action="{{ route('proceso.buscar') }}" method="GET" class="d-flex">
    <input type="text" name="idProceso" class="form-control form-control-sm" placeholder="Ej: 2023-001-12345">
    <button type="submit" class="btn btn-outline-secondary btn-sm ms-2">
        <i class="bi bi-search"></i>
    </button>
</form>
                        <button class="btn btn-outline-secondary btn-sm ms-2">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Tabla para la visualización de información de los procesos-->
        <div>
          <div class="container mt-4">
            <h1>Consulta de Procesos</h1>
            
            <table class="table table-striped table-bordered" class="tabla inserción datos proceso">
                <thead class="thead-dark">
                    <tr>
                        <th>Numero proceso</th>
                        <th>Nombre Proceso</th>
                        <th>Juzgado</th>
                        <th>Cliente</th>
                        <th>Abogado</th>
                        <th>Juez</th>
                        <th>Ciudad</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
               
                    @foreach($procesos as $proceso)
                    <tr>
                      <td>{{ $proceso->idProceso }}</td>
                      <td>{{ $proceso->nombreproceso }}</td>
                      <td>{{ $proceso->juzgado }}</td>
                      <td>{{ $proceso->cliente->nombrecliente }}</td>
                      <td>{{ $proceso->empleado->nombre }} {{ $proceso->empleado->apellido }}</td>
                      <td>{{ $proceso->nombredeljuez }}</td>
                      <td>{{ $proceso->ciudad }}</td>
                      <td>{{ $proceso->estado }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>

        <div class="container mt-4">
            <!-- Pestañas -->
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#info">Información</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#documentos">Documentos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#historial">Sedes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#historial">Informacion Adicional</a>
              </li>
            </ul>
          
            <!-- Contenido -->
            <div class="tab-content mt-3">
              <div class="tab-pane fade show active" id="info">
                <h4>Informacion General</h4>
               <!-- --> <p>Profesional asignado:
                    Rama judicial:
                    Partes Interesadas:
                    Resumen General:
                </p>
              </div>
              <div class="tab-pane fade" id="documentos">
                <h4>Archivos adjuntos</h4>
                <p>Lista de documentos...</p>
              </div>
              <div class="tab-pane fade" id="historial">
                <h4>nuestras Sedes</h4>
                <p>Calle falsa 123</p>
              </div>
              <div class="tab-pane fade" id="historial">
                <h4>Registro de actividades</h4>
                <p>Linea de tiempo...</p>
              </div>
            </div>
          </div>
    </div>
</div>

    
    <div class="barra-inferior">
        <div class="iconos-redes">
            <div class="red-social">
                <a href="URL_FACEBOOK" target="_blank"><img src="facebook.png" alt="Facebook" class="icono-red"></a>
                <span class="nombre-usuario">Te Apoyamos FB</span>

            </div>

             <div class="red-social">
                <a href="URL_INSTAGRAM" target="_blank"><img src="instragram.jpg" alt="Instagram" class="icono-red"></a>
                <span class="nombre-usuario">@TeApoyamosSAS</span>
              </div>

             <div class="red-social">
                <a href="URL_TWITTER" target="_blank"><img src="x.png" alt="Twitter" class="icono-red"></a>
                <span class="nombre-usuario">@TeApoyamosSASX</span>
              </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>