<?php

$opciones = $_POST['ejercicios'];
$operaciones = $_POST['operaciones'];

error_reporting(0);
switch ($opciones) {
    case 1:
        $sumar = ($_POST['num1'] + $_POST['num2'] + $_POST['num3']);
        echo '
        <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class="row align-items-center justify-content-center vh-50">


    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <form action="ejercicios.php" method="POST">
        <input type="hidden" class="form-control" name="ejercicios" value="' . $opciones . '" type="number">
        <input name="num1" class="form-control" type="number">
        <br>
        <input name="num2" class="form-control" type="number">
        <br>
        <input name="num3" class="form-control" type="number">
        <br>
        <button type="submit" class="btn btn-primary">Calcular</button>
        
    </form>
    <br>
    <p> la suma es: ' . $sumar . ' </p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
        ';
        break;


    case 2:
        echo '
        <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class="row align-items-center justify-content-center vh-50">


    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <form action="ejercicios.php" method="POST">
        <input type="hidden" class="form-control" name="ejercicios" value="' . $opciones . '" type="text">
        <input name="num1" class="form-control" type="number">
        <br>
        <input name="num2" class="form-control" type="number">
        <br>
        <select class="form-select" aria-label="Default select example" name="operaciones">
            <option selected>Seleccione el ejercicio</option>
            <option value="1">Suma </option>
            <option value="2">Resta </option>
            <option value="3">Multiplicacion</option>
            <option value="4">Division </option>
        </select>
        <br>
        <button type="submit" class="btn btn-primary">Calcular</button>
        
    </form>
    <br>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
        ';
        switch ($operaciones) {
            case 1:
                $Suma = ($_POST['num1'] + $_POST['num2']);
                echo('La suma es: '.$Suma);
                break;
            case 2:
                $Resta = ($_POST['num1'] - $_POST['num2']);
                echo('');
                break;
            
        }

        break;

    default:
        # code...
        break;
}
