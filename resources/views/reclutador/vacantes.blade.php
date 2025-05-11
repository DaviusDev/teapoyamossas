<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Te Apoyamos S.A.S.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href= "{{ asset('css/estilo1-vacante.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- <script src="scripts.js"></script>-->
</head>
<body>
  <div class="barra-superior d-flex flex-wrap align-items-center p-3">
        <div class="titulo-logo me-auto">
            <h1 class="m-0">Te Apoyamos S.A.S.</h1>
        </div>

        <!-- Contenedor principal derecho -->
        <div class="d-flex flex-column gap-2"> 
            <!-- Grupo de botones -->
            <div class="btn-group" role="group">
                <a href="{{ route('index') }}" class="btn btn-primary">Inicio</a>
                <a href="{{ route('proceso') }}" class="btn btn-primary">Procesos</a>
                <a href="{{ route('carrera') }}" class="btn btn-primary">Carrera</a>
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
                    <h1 class="text-center fw-bold text-primary mb-0">CARRERA</h1>
                </div>
            </div>
        </div>


        
            
            <!-- Tabla de postulaciones -->
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                <thead class="table-dark">
                  <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Vacante</th>
                    <th>CV</th>
                    <th>Estado actual</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                 <tbody>
                @foreach($vacantes as $vacante)
                    <tr>
                        <td>{{ $vacante->nombre }}</td>
                        <td>{{ $vacante->correo }}</td>
                        <td>{{ $vacante->telefono }}</td>
                        <td>{{ $vacante->vacante }}</td>
                        
                        <td>
                            <a href="{{ asset('storage/' . $vacante->cv_path) }}" target="_blank" class="btn btn-primary btn-sm" open>abrir CV</a>
                        </td>
        <td>
    <span id="estadoVacante" class="badge {{ $vacante->estado ? 'bg-success text-white' : 'bg-warning text-dark' }}">
        {{ $vacante->estado ?: 'En revisión' }}
    </span>
</td>

                        
    <td>
        @if($vacante->estado != 'Avanza')
    <button class="btn btn-primary" onclick="rechazarCandidato({{ $vacante->id }})">Rechazar</button>
    <button class="btn btn-primary" onclick="avanzarCandidato({{ $vacante->id }})">Avanzar</button>
    @endif
    @if($vacante->estado == 'Avanza')
        <span id="estadoVacante" class="badge {{ $vacante->estado ? 'bg-success text-white' : 'bg-warning text-dark' }}">
        {{ $vacante->estado ?: 'Avanza' }}
    @endif
            
           
</td>

                    </tr>
                @endforeach

            </tbody>

              </table>
            </div>
          </div>
        <!-- Modal de acciones -->
<div class="modal fade" id="accionesModal" tabindex="-1" aria-labelledby="accionesModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="accionesModalLabel">Seleccionar Acción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="modalMessage">¿Qué deseas hacer con el candidato?</p>
                <button class="btn btn-outline-success" id="avanzarBtn">Avanzar a siguiente fase</button>
                <button class="btn btn-outline-danger" id="rechazarBtn">Rechazar candidatura</button>
            </div>
        </div>
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
    </div>


        
    <script>
        
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    function rechazarCandidato(id) {
        if (!confirm('¿Estás seguro de rechazar al candidato?')) return;

        fetch('/rechazar', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ id: id })
        })
        .then(response => {
            if (!response.ok) throw new Error('Error en la respuesta del servidor');
            return response.json();
        })
        .then(data => {
            alert('Candidato rechazado y correo enviado.');
            window.location.reload(); 
            // Opcional: eliminar la fila de la tabla
            document.getElementById(`fila-${id}`).remove();
        })
        .catch(error => {
            console.error('Error al rechazar:', error);
        });
    }

    function avanzarCandidato(id) {
        fetch('/avanzar', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ id: id })
        })
        .then(response => {
            if (!response.ok) throw new Error('Error en la respuesta del servidor');
            return response.json();
        })
        .then(data => {
            alert('El candidato ha avanzado a la siguiente fase.');
            window.location.reload(); 
            // Opcional: actualizar visualmente el estado
            document.getElementById(`estado-${id}`).innerText = 'Avanza';
        })
        .catch(error => {
            console.error('Error al avanzar:', error);
        });
    }
</script>


    

        
        

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>