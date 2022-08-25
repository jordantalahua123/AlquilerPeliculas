<?php  include '../template/header.php'?>
<?php include '../../controller/alquileres/create.php'?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Registrar Alquileres</b>
                </div>
            </div>
            <form action='../../controller/alquileres/create.php' method="POST" >
                <div class="mb-3 mt-3">
                        <label for="soc_id" class="form-label">Nombre Socio</label>
                        <select name="soc_id" id="soc_id" required class="form-control">
                            <?php
                                while($row = $result_soc->fetch_assoc())
                                {
                                    echo '<option name="soc_id" value="'.$row['soc_id'].'">'.$row['soc_nombre'].'</option>';
                                }
                            ?>
                        </select>
                        <div id="emailHelp" class="form-text">No compartiremos sus datos personales con nadie.</div>
                </div>
                <div class="mb-3 mt-3">
                        <label for="pel_id" class="form-label">Nombre Pelicula</label>
                        <select name="pel_id" id="pel_id" required class="form-control">
                            <?php
                                while($row = $result_pel->fetch_assoc())
                                {
                                    echo '<option name="pel_id" value="'.$row['pel_id'].'">'.$row['pel_nombre'].'</option>';
                                }
                            ?>
                        </select>
                        <div id="emailHelp" class="form-text">No compartiremos sus datos personales con nadie.</div>
                </div>
                <div class="mb-3">
                    <label for="alq_fecha_desde" class="form-label">Fecha de Inicio del Alquiler</label>
                    <input type="date" class="form-control" id="alq_fecha_desde" name="alq_fecha_desde" required>
                </div>
                    <div class="mb-3">
                    <label for="alq_fecha_hasta" class="form-label">Fecha Final del Alquiler</label>
                    <input type="date" class="form-control" id="alq_fecha_hasta" name="alq_fecha_hasta" required>
                </div>
                    <div class="mb-3">
                        <label for="alq_valor" class="form-label">Valor a Pagar</label>
                        <input type="number" class="form-control" id="alq_valor" name="alq_valor">
                    </div>
                    <div class="mb-3">
                    <label for="alq_fecha_entrega" class="form-label">Fecha de Entrega del Alquiler</label>
                    <input type="date" class="form-control" id="alq_fecha_entrega" name="alq_fecha_entrega" required>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </div>
    </section>
    <!-- /.content -->
<?php  include '../template/footer.php'?>
