<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Alquileres</title>
</head>
<body>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Registrar Alquileres</b>
                </div>
            </div>
            <form>
                <div>
                    <label for="SocioId" class="form-label mb-3 mt-3">Socio ID</label>
                    <select class="form-select" aria-label="Default select example" id="SocioId">
                        <option selected>Seleccione</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div id="emailHelp" class="form-text">No compartiremos sus datos personales con nadie.</div>
                </div>
                <div>
                    <label for="PeliculaId" class="form-label mb-3 mt-3">Pelicula ID</label>
                    <select class="form-select mb-3" aria-label="Default select example" id="PeliculaId">
                        <option selected>Seleccione</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="FechaInicio" class="form-label mb-3 mt-3">Fecha de Inicio del Alquiler</label>
                    <br>
                    <input type="date" id="FechaInicio" value="2022-01-12">
                </div>
                <div class="mb-3">
                    <label for="FechaFin" class="form-label mb-3 mt-3">Fecha Final del Alquiler</label>
                    <br>
                    <input type="date" id="FechaFin" value="2022-01-12">
                </div>
                <div class="mb-3">
                    <label for="valorPagar" class="form-label">Valor a Pagar</label>
                    <input type="number" class="form-control" id="valorPagar">
                </div>
                <div class="mb-3">
                    <label for="FechaEntrega" class="form-label mb-3 mt-3">Fecha de Entrega del Alquiler</label>
                    <br>
                    <input type="date" id="FechaEntrega" value="2022-01-12">
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>