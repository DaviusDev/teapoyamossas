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
                  <a href="{{ route('index') }}" class="btn btn-primary">Inicio</a>
                  <a href="{{route('proceso')}}" class="btn btn-primary">Procesos</a>
                  <a href="#" class="btn btn-primary">Carrera</a>
                </div>

                         

            
            <div class="d-flex">
                <input type="text" class="form-control" placeholder="Buscar...">
                <button class="btn btn-outline-secondary ms-2">X</button>
            </div>
        </div>

        
        <img src="IMG/logo.jpg" alt="Logo" class="ms-3" width="200">
    </div>


    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2> Carrera</h2>
            </div>
        </div>
    
      </div>

    
    <div class="container">
        <div class="row">
          
          <div class="col-md-6 mb-4">
            <div class="card h-100" style="width: 18rem;">
              <img src="IMG/abogado financiero.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h2>
                    <p class="card-text">Abogado Financiero</p>
                </h2>

                <h6>
                    <p>
                        Importante firma de abogados de Colombia se encuentra en la búsqueda de profesional
                         en Derecho, con Especialización (no indispensable), con mínimo dos años de 
                         experiencia en derecho societario, comercial o financiero, con experiencia 
                         en Constitución de sociedades, realizar asambleas, juntas directivas, elaboración
                         de actas, revisión y elaboración de contratos, entre otros. persona con nivel
                         de ingles Avanzado (Bilingüe), mínimo B2.
                         Persona enfocada a las siguientes competencias: Orientación al logro,
                         Análisis Critico, Solución de Problemas, Comunicación Efectiva, trabajo en 
                         equipo y con excelente presentación personal.                      
                        
                        
                    </p>

                    <p>
                        Contrato término indefinido  
                    </p>

                    <p>
                        Horario : Lunes a Viernes 8:00am - 5:30pm Presencial  
                    </p>

                    <p>
                        Salario: Entre 5.000.000 a 6.000.000 según experiencia  
                    </p>
                </h6>

                <input class="form-check-input" type="radio" name="carrera1" id="carrera1" value="carrera1" required>
                <label class="form-check-label" for="carrera1">Seleccionar</label>
                
              </div>
            </div>
          </div>
          
          <div class="col-md-6 mb-4">
            <div class="card h-100" style="width: 18rem;">
              <img src="IMG/abogado pqrs.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h2>
                    <p class="card-text">Abogado PQRS</p>
                </h2>

                <h6>

                    <p>
                        Abogado PQRS profesional en Derecho, con especialización en 
                        Derecho Administrativo, Civil o Comercial, entre otras. 
                        Experiencia de 3 años en la gestión de PQRs, acciones de tutela
                         y requerimientos legales, en cumplimiento del Sistema de Atención
                          del Consumidor (SAC). Atención y defensa en acciones judiciales
                           y de protección al consumidor ante la Superintendencia de 
                           Industria y Comercio (SIC). Atención y respuesta a 
                           requerimientos de clientes y entes de control y vigilancia,
                            asegurando el cumplimiento del marco legal.                    
                        
                    </p>

                    <p>
                        Contrato término indefinido  
                    </p>

                    <p>
                        Horario : Lunes a Viernes 8:00am - 5:30pm Presencial  
                    </p>

                    <p>
                        Salario: Entre 5.000.000 a 6.000.000 según experiencia  
                    </p>

                    <input class="form-check-input" type="radio" name="carrera2" id="carrera2" value="carrera2" required>
                <label class="form-check-label" for="carrera1">Seleccionar</label>

                </h6>
                
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
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>