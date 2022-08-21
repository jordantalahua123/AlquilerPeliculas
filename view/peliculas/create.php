<?php  include '../template/header.php'?>
<?php  include '../../controller/peliculas/create.php'?>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Registrar Pelicula</b>
                </div>
            </div>
            <form action='../../controller/peliculas/create.php' method="post">
            <div class="mb-3 mt-3">
                <label for="cedulaSocio" class="form-label">ID Género</label>
                <select name="gen_id" id="gen_id">
                    <?php
                        while($row = $result->fecth_assoc())
                        {
                            echo '<option value="'.$row['gen_id'].'">'.$row['gen_nombre'].'</option>';
                        }
                    ?>
                </select>
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
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    
<?php  include '../template/footer.php'?>