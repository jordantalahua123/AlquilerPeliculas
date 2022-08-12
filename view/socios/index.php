<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Socios</title>
</head>
<body>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Socios registrados</b>
                    <a href="create.php"><button type="button" class="btn btn-success" style="margin-left:450px;">Agregar</button></a>
                </div>
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Ord</th>
                            <th scope="col">Cédula</th>
                            <th scope="col">Nombre</th>
                            <th scope="col" colspan ="3" >Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>0520213221</td>
                            <td>Alba Rosa</td>
                            <td><a href="update.php">Editar</a></td>
                            <td><a href="view.php">Observar</a></td>
                            <td><a href="delete.php">Eliminar</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>171523256</td>
                            <td>Roberto Alberto</td>
                            <td><a href="update.php">Editar</a></td>
                            <td><a href="view.php">Observar</a></td>
                            <td><a href="delete.php">Eliminar</a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>1721305423</td>
                            <td>Jose Rodriguez</td>
                            <td><a href="update.php">Editar</a></td>
                            <td><a href="view.php">Observar</a></td>
                            <td><a href="delete.php">Eliminar</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>