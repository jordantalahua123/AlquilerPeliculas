<?php  include '../template/header.php'?>
<?php  include '../../controller/actor_pelicula/delete.php'?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Eliminar Actor-Pelicula</b>
                </div>
            </div>
            <form action="../../controller/actor_pelicula/delete.php" method="post">
                <?php
                    $row = $result->fetch_assoc();
                ?>
                <div class="mb-3">
                        <label for="correoSocio" class="form-label">Actor ID</label>
                        <input type="text" class="form-control" readonly id="correoSocio"
                        value="<?php echo $row['apl_id']?>">
                </div>
                <div class="mb-3">
                        <label for="act_nombre" class="form-label">Actor</label>
                        <input type="text" class="form-control" readonly id="act_nombre"
                        value="<?php echo $row['act_nombre']?>" name="act_nombre">
                </div>
                <div class="mb-3">
                    <label for="pel_nombre" class="form-label">Pelicula</label>
                    <input type="text" class="form-control" readonly id="pel_nombre"
                    value="<?php echo $row['pel_nombre']?>"  name="pel_nombre">
                </div>
                <div class="mb-3">
                    <label for="apl_papel" class="form-label">Papel Actor</label>
                    <input type="text" class="form-control" readonly id="apl_papel"
                    value="<?php echo $row['apl_papel']?>" name="apl_papel">
                </div>
                <input type="hidden" name="apl_id" value="<?php echo $row['apl_id']?>">
                <input type="submit" class="btn btn-danger" value="Eliminar"></input>
            </form>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>