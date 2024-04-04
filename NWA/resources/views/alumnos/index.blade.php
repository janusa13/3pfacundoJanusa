<!-- resources/views/alumnos/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
</head>
<body>
    <h1>Lista de Alumnos</h1>
    <ul>
        @foreach ($alumnos as $alumno)
            <li>{{ $alumno->nombre }} {{ $alumno->apellido }}</li>
        @endforeach
    </ul>
</body>
</html>