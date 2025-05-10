
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Te Apoyamos S.A.S.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href= "{{ asset('css/estilo1-vacante.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- <script src="scripts.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                <button type="button" class="btn btn-primary"onclick="location.href='consulta.html'">Procesos</button>
                <button type="button" class="btn btn-primary"onclick="location.href='#'">Carrera</button>
                <a href="{{ route('vacantes') }}" class="btn btn-primary">Reclutamiento</a>
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
        
        <div class="container-fluid">
            <div class="row">
                <!-- Descripción de vacante -->
                <div class="col-md-5 px-4">
                    <div class="nav-bar p-3">
                        <div class="d-flex justify-content-center gap-3 mb-4"> 
                            <a href="#" class="text-primary fw-medium text-decoration-underline">
                                Registro
                            </a>
                            <a href="#" class="text-primary fw-medium text-decoration-underline">
                                Iniciar Sesión
                            </a>
                            <a href="#" class="text-primary fw-medium text-decoration-underline" onclick="location.href='reclutamiento.html'">
                                Consultar Proceso
                            </a>
                        </div>
                       
                        <div class="card mb-3">
                            <div class="card-header">
                                Descripción de la Vacante
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <form id="formularioVacante" action="{{ route('vacantes.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        
                                        
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" id="vacanteButton">
                                              Seleccione la vacante de interes
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                              <li><button class="dropdown-item" type="button" data-id="1" onclick="actualizarVacante(this)">Abogado Experto en Derecho de familia</button></li>
                                              <li><button class="dropdown-item" type="button" data-id="2" onclick="actualizarVacante(this)">Abogado experto en derecho penal</button></li>
                                              <li><button class="dropdown-item" type="button" data-id="3" onclick="actualizarVacante(this)">Abogado Fiscal y tributario</button></li>
                                            </ul>
                                          </div>
                                          <input type="hidden" name="vacanteSeleccionada" id="vacanteSeleccionada">
                                          <input type="hidden" name="vacanteNombre" id="vacanteNombre">

                                        <div class="mb-3">
                                            <label for="nombreCompleto" class="form-label">Nombre completo:</label>
                                            <input type="text" class="form-control" id="nombreCompleto" name="nombreCompleto" placeholder="Tu nombre" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="telefonoContacto" class="form-label">Teléfono de Contacto:</label>
                                            <input type="tel" class="form-control" id="telefonoContacto" name="telefonoContacto" placeholder="Tu teléfono" required>
                                        </div>

                                        
                                        <div class="mb-3">
                                            <label for="correoElectronico" class="form-label">Correo Electrónico:</label>
                                            <input type="email" class="form-control" id="correoElectronico" name="correoElectronico" placeholder="Tu correo electrónico" required>
                                        </div>
                                        <p>Adjuntar CV (Solo archivos PDF)</p>
                                        
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" id="inputGroupFile01" name="cv" accept=".pdf" required>
                                            <label class="input-group-text" for="inputGroupFile01">Subir PDF</label>
                                        </div>
                                        <div id="error-archivo" class="text-danger small mt-1 d-none">Solo se permiten archivos PDF</div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary" id="enviarButton">Aplicar</button>
                                        </div>
                                       

                                    </form>
                                </blockquote>
                            </div>
                        </div>
                        
                    </div>                
                </div>
                
                <!-- Vacantes disponibles -->
                <div class="col-md-7 px-4">
                    <div class="row mb-4">
                        <div class="col-12 text-center">
                            <h3 class="fw-bold text-primary mb-4">VACANTES DISPONIBLES</h3>
                        </div>
                    </div>
        
                    
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <!-- Tarjeta 1 -->
                        <div class="col">
                            <label class="card-checkbox h-100">
                                
                                <div class="card h-100 shadow-lg card-selectable">
                                    <img src="IMG/abogado2.jpg" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;" alt="...">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title fs-4">Abogado Experto en Derecho de familia</h5>
                                        <div class="card-text flex-grow-1">
                                            <p class="fs-5">Requerimientos:</p>
                                            <ul class="fs-6">
                                                <li>5+ años de experiencia</li>
                                                <li>Postgrado en derecho de familia</li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                            </label>
                        </div>
            
                        <!-- Tarjeta 2 -->
                        <div class="col">
                            <label class="card-checkbox h-100">
                                
                                <div class="card h-100 shadow-lg card-selectable">
                                    <img src="IMG/abogado 1.jpeg" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;" alt="...">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title fs-4">Abogado experto en derecho penal</h5>
                                        <div class="card-text flex-grow-1">
                                            <p class="fs-5">Requerimientos:</p>
                                            <ul class="fs-6">
                                                <li>5+ años de experiencia</li>
                                                <li>Postgrado derecho penal</li>
                                            </ul>
                                        </div>                                        
                                    </div>
                                </div>
                            </label>
                        </div>
            
                        <!-- Tarjeta 3 -->
                        <div class="col">
                            <label class="card-checkbox h-100">
                                
                                <div class="card h-100 shadow-lg card-selectable">
                                    <img src="IMG/abogado 3.jpeg" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;" alt="...">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title fs-4">Abogado Fiscal y tributario</h5>
                                        <div class="card-text flex-grow-1">
                                            <p class="fs-5">Requerimientos:</p>
                                            <ul class="fs-6">
                                                <li>5+ años de experiencia demostrable</li>
                                                <li>Postgrado en derecho fiscal y monetario</li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                            </label>                        
                        </div>
            
                        <!-- Tarjeta 4 -->
                        <div class="col">
                            <label class="card-checkbox h-100">
                                
                                <div class="card h-100 shadow-lg card-selectable">
                                    <img src="IMG/abogado 4.jpeg" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;" alt="...">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title fs-4">Abogado Experto en derecho laboral</h5>
                                        <div class="card-text flex-grow-1">
                                            <p class="fs-5">Requerimientos:</p>
                                            <ul class="fs-6">
                                                <li>5+ años de experiencia demostrable</li>
                                                <li>Especializacion en derecho laboral</li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                            </label>                        
                        </div>
                    </div>
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


        
     <!-- <script>
        // Script para seleccionar el checkbox y que se cargue en la card descripción vacante
        document.addEventListener('DOMContentLoaded', function() {
            
            const checkboxes = document.querySelectorAll('.card-checkbox-input');
            
            
            const campoVacante = document.getElementById('vacanteSeleccionada');
            
            
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    if (this.checked) {
                        
                        const cardTitle = this.closest('.card-checkbox').querySelector('.card-title').textContent;
                        
                        campoVacante.value = cardTitle;
                        
                        
                        checkboxes.forEach(otherCheckbox => {
                            if (otherCheckbox !== this) {
                                otherCheckbox.checked = false;
                            }
                        });
                    } else {
                        
                        campoVacante.value = '';
                    }
                });
            });
            
            
            document.getElementById('inputGroupFile01').addEventListener('change', function(e) {
                const fileName = e.target.files[0]?.name || 'Choose file';
                this.nextElementSibling.textContent = fileName;
            });
        });

        // Script para verificar que el archivo sea un pdf
        const fileInput = document.getElementById('inputGroupFile01');
        const errorDiv = document.getElementById('error-archivo');
        const submitBtn = document.querySelector('button[type="submit"]');
        
        fileInput.addEventListener('change', function(e) {
            if (this.files.length > 0) {
                const file = this.files[0];
                const validTypes = ['application/pdf'];
                const fileType = file.type;
                const fileExtension = file.name.split('.').pop().toLowerCase();
                
                
                this.nextElementSibling.textContent = file.name;
                
                
                if (!validTypes.includes(fileType) && fileExtension !== 'pdf') {
                    errorDiv.classList.remove('d-none');
                    this.classList.add('is-invalid');
                    this.value = '';
                    if (submitBtn) submitBtn.disabled = true;
                } else {
                    errorDiv.classList.add('d-none');
                    this.classList.remove('is-invalid');
                    if (submitBtn) submitBtn.disabled = false;
                }
            }
        });
        
        
        function actualizarVacante(elemento) {
            
            const textoSeleccionado = elemento.textContent;
            
            
            document.getElementById('vacanteButton').textContent = textoSeleccionado;
            
            
            const dropdown = elemento.closest('.dropdown-menu');
            const dropdownInstance = bootstrap.Dropdown.getInstance(dropdown);
            dropdownInstance.hide();
          }
        </script> -->

        
        

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function actualizarVacante(elemento) {
        var id = elemento.getAttribute('data-id');
        var nombre = elemento.textContent;

        document.getElementById('vacanteSeleccionada').value = id;
        document.getElementById('vacanteNombre').value = nombre;
        document.getElementById('vacanteButton').textContent = nombre;
    }
</script>
<script>
    document.getElementById('formularioVacante').addEventListener('submit', function (e) {
        const vacanteId = document.getElementById('vacanteSeleccionada').value;
        if (!vacanteId) {
            e.preventDefault();
            alert('Por favor selecciona una vacante antes de enviar el formulario.');
        }
    });
</script>

@if(session('correo_enviado'))
<script>
    alert("{{ session('correo_enviado') }}");
</script>
@endif



</body>
</html>