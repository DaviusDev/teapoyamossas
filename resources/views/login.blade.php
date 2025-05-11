<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="{{ asset('css/estilo1-vacante.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> {{-- Asegura estilos de Bootstrap --}}
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Iniciar Sesión</h3>
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger text-center">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Recuérdame</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Entrar</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#">¿Olvidaste tu contraseña?</a><br>
                        <a href="#">¿No tienes una cuenta? Regístrate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
