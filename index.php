<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class="row align-items-center justify-content-center vh-100">


    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <form action="ejercicios.php" method="post">
                <select class="form-select" aria-label="Default select example" name="ejercicios">
                    <option selected>Seleccione el ejercicio</option>
                    <option value="1">Ejercicio 1</option>
                    <option value="2">Ejercicio 2</option>
                    <option value="3">ejercicio 3</option>
                    <option value="4">ejercicio 4</option>
                    <option value="5">ejercicio 5</option>
                    <option value="6">ejercicio 6</option>
                </select>
                <br>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>