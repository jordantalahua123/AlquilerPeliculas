<?php  include '../template/header.php'?>
<?php  include '../../controller/generos/update.php'?>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Actualizar Género</b>
                </div>
            </div>

            <form action = "../../controller/generos/update.php" method = "POST">
            <?php
                    $row = $result->fetch_assoc();
            ?>
            <div class="mb-3">
                <label for="gen_nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="gen_nombre" name = "gen_nombre"
                value = "<?php echo $row['gen_nombre']?>" required >
                <input type="hidden" class="form-control" name = "gen_id"
                value = "<?php echo $row['gen_id']?>">
                <br>
            <button type="submit" class="btn btn-success">Actualizar</button>
            </form>
        </div>
    </div>
</div>

    <?php  include '../template/footer.php'?>