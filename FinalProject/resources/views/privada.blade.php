<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba login</title>
</head>
<body>
    <p>Esto es una prueba para saber si entra bien el login</p>
    <a href="{{route('logout')}}">Logout</a>
    <p>Este contenido es publico</p>
    @role('employee')
    <p>SOlo lo va a ver el rol trabajador</p>
    @endrole
    @role('admin')
    <p>Solo lo va a ver el admin</p>
    @endrole
    @role('customer')
    <p>Solo lo va a ver el customer</p>
    @endrole
</body>
</html>
