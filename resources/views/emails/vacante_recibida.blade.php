<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Solicitud Recibida</title>
</head>
<body>
    <h1>Hola {{ $datos['nombre'] }}</h1>
    <p>Hemos recibido tu solicitud para la vacante de <strong>{{ $datos->vacante }}</strong>.</p>
    <p>Pronto nos pondremos en contacto contigo al {{ $datos['telefono'] }} o al correo {{ $datos['correo'] }}.</p>
    <p>Gracias por aplicar.</p>
    <p>Saludos,</p>
    <p>El equipo de Te Apoyamos S.A.S.</p>
</body>
</html>
