<?php  include '../template/header.php'?>
<?php  include '../../controller/actor_pelicula/update.php'?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Actualizar Actor-Pelicula</b>
                </div>
            </div>
            <form action="../../controller/actor_pelicula/update.php" method="post">
            <div class="mb-3">
                <label for="gen_id" class="form-label">Nombre Actor</label>
                <select class="form-select form-control" id="gen_id" name="gen_id" required>
                        <?php
                            while($row = $result_act->fetch_assoc()) {
                                if($row1["act_id"]!==$row["act_id"]){
                                    echo '<option name="act_id" value="'.$row["act_id"].'">'.$row["gen_nombre"].'</option>';
                                }else{
                                    echo '<option name="act_id" value="'.$row["act_id"].'">'.$row["act_nombre"].'</option>';
                                }
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
                </div>
                <?php
                $row = $result_apl->fetch_assoc();
            ?>
                <div class="mb-3">
                    <label for="apl_papel" class="form-label">Papel Actor</label>
                    <input type="text" class="form-control" required id="apl_papel"
                    value="<?php  echo $row['apl_papel']?>" name="apl_papel">
                </div>
                
                <input type="hidden" name="apl_id" value="<?php echo $row['apl_id']?>">
                <input type="submit" class="btn btn-success" value="Actualizar"></input>
            </form>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>