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


    <div class="contenido">
        <div class="titulo-principal">
            <h1> Registro de Usuario Nuevo</h1>
        </div>

        <main>
            <section class="contenido-registro">
                <div class="contenedor-registro">
                    <form action="/registro" method="post"> 
                        
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required><br><br>

                        <label for="cedula">Cedula:</label>
                        <input type="text" id="nombre" name="nombre" required><br><br>
            
                        <label>Sexo:</label><br>
                        <input type="radio" id="femenino" name="sexo" value="femenino">
                        <label for="femenino">Femenino</label>
                        <input type="radio" id="masculino" name="sexo" value="masculino">
                        <label for="masculino">Masculino</label>
                        <input type="radio" id="otro" name="sexo" value="otro">
                        <label for="otro">Prefiero no decir</label><br><br>

                        <label for="fecha-nacimiento">Fecha de Nacimiento:</label>
                        <input type="date" id="fecha-nacimiento" name="fecha-nacimiento" required><br><br>
                        
                        <label for="Direccion-envio">Dirección de envio:</label>
                        <input type="email" id="email" name="email" required><br><br>

                        <label for="telefono">Número de Telefono:</label>
                        <input type="email" id="email" name="email" required><br><br>
                        
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required><br><br>
            
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" required><br><br>
            
                        <label for="confirm-password">Confirmar Contraseña:</label>
                        <input type="password" id="confirm-password" name="confirm-password" required><br><br>
            
                        <input type="submit" value="Registrarse">

                        <input type="submit" value="Editar Usuario">
                    </form>            
      
              
    
            
          </section>
    
          
        </main>

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