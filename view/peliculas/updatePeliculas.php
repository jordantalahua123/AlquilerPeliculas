<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Actualizar Pelicula</title>
</head>
<body>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Actualizar Pelicula</b>
                </div>
            </div>
            <form>
            <div class="mb-3 mt-3">
                <label for="cedulaSocio" class="form-label">ID Género</label>
                <input type="number" class="form-control" id="gen_id" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="nombreSocio" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="pel_nombre">
            </div>
            <div class="mb-3">
                <label for="direccionSocio" class="form-label">Costo</label>
                <input type="number" class="form-control" id="pel_costo">
            </div>
            <div class="mb-3">
                <label for="telefonoSocio" class="form-label">Fechas Estreno</label>
                <input type="date" class="form-control" id="pel_fecha_estreno">
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>