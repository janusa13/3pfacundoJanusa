<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Eliminar Alumno</h1>
    <form action="{{route('student.delete')}}" method="get">
        @method('delete')
        @csrf
        <label for="alumn_ID">DNI del alumno que desea eliminar</label>
        <input type="text" name="alumn_DNI" id="alumn_DNI">
        <button type="submit">borrar</button>
    </form>
</body>
</html>