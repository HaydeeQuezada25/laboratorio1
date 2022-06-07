<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Promedio de las notas</title>
</head>
<body>
    <form name="formularios" method="post" action="sumatoria.php">
    <div class="mb-3">
            <label for="nombre" class="form-label">CALCULO DE NOTAS</label>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre Alumno:</label>
            <input type="text-justify" class=p-3 mb-2 bg-secondary text-white" name="nombre" id="nombre">
        </div>
        <div class="mb-3">
            <label for="nota1" class="form label">Laboratorio 1:</label>
            <input type="number" class=p-3 mb-2 bg-secondary text-white" name="nota1" id="nota1">
        </div>
        <div class="mb-3">
            <label for="nota2" class="form-label">Laboratorio 2:</label>
            <input type="number" class=p-3 mb-2 bg-secondary text-white" name="nota2" id="nota2">
        </div>
        <div class="mb-3">
            <label for="parcial" class="form-label">Parcial:</label>
            <input type="number" class=p-3 mb-2 bg-secondary text-white" name="parcial" id="parcial">
        </div>
        <div class="col-auto">
        <button type="submit" class="btn btn-success" class="btn btn-primary btn-lg">Resultado</button>
        </div>
    </form>

</body>
</html>