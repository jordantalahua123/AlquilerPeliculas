<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Alquileres</title>
</head>

<body>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Alquileres Registrados</b>
                    <a href="createAlquileres.php"><button type="button" class="btn btn-success"
                            style="margin-left:720px;">Agregar</button></a>
                </div>
                <table class="table table-hover align-center">
                    <thead>
                        <tr>
                            <th scope="col">Ord</th>
                            <th scope="col">Socio ID</th>
                            <th scope="col">Película ID</th>
                            <th scope="col">Fecha Inicio</th>
                            <th scope="col">Fecha Fin</th>
                            <th scope="col">Valor a Pagar</th>
                            <th scope="col">Fecha Entrega</th>
                            <th scope="col" colspan="3" class="text-aling">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td>1</td>
                            <td>1221</td>
                            <td>30-01-2014</td>
                            <td>30-01-2013</td>
                            <td>rtetr</td>
                            <td>30-01-2010</td>
                            <td><button><a href="updateAlquileres.php">Editar</a></button></td>
                            <td><button><a href="viewAlquileres.php">Observar</a></button></td>
                            <td><button><a href="deleteAlquileres.php">Eliminar</a></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>