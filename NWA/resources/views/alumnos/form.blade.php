<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="{{route('student.store')}}" method="POST">
            @csrf
            <label for="alumn_DNI">DNI</label>
                <input type="text" name="alumn_DNI" id="alumn_DNI">
                <br>
            <label for="nombre">nombre</label>
                <input id="nombre" type="text" name="nombre">
                <br>
            <label for="apellido">apellido</label>
                <input type="text" id="apellido" name="apellido">
                <br>
            <label for="fecha_nac">Fecha Nacimiento</label>
            <input type="date" id="fecha_nac" name="fecha_nac">
            <button type="submit" >Registrar</button>
        </form>
    </div>
</body>
</html>