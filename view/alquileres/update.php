<?php include '../template/header.php' ?>
<?php include '../../controller/alquileres/update.php'?>
<section class="content">
    <?php $row = $result_alq->fetch_assoc() ?>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Registrar Alquileres</b>
                </div>
            </div>
            <form action="../../controller/alquileres/update.php" method="post" novalidate>
                <div class="mb-3 mt-3">
                    <label for="soc_input" class="form-label">Nombre Socio</label>
                    <select class="form-select form-control" id="soc_id" name="soc_id" required>    
                        <?php
                        if ($result_soc->num_rows > 0){
                            while($row_soc = $result_soc->fetch_assoc()) {
                                if($row["soc_id"]==$row_soc["soc_id"]){
                                    echo '<option selected name="soc_id" value="'.$row_soc["soc_id"].'">'.$row_soc["soc_nombre"].'</option>';
                                }else{
                                    echo '<option name="soc_id" value="'.$row_soc["soc_id"].'">'.$row_soc["soc_nombre"].'</option>';
                                }
                            }
                        }
                        ?>
                    </select>
                </div>    
            <div class="mb-3 mt-3">
                <label for="pel_input" class="form-label">Nombre Película</label>
                    <select class="form-select form-control" id="pel_id" name="pel_id" required>
                        <?php
                            if ($result_pel->num_rows > 0){
                                while($row_pel = $result_pel->fetch_assoc()) {
                                    if($row["pel_id"]==$row_pel["pel_id"]){
                                        echo '<option selected name="pel_id" value="'.$row_pel["pel_id"].'">'.$row_pel["pel_nombre"].'</option>';
                                    }else{
                                        echo '<option name="pel_id" value="'.$row_pel["pel_id"].'">'.$row_pel["pel_nombre"].'</option>';
                                    }
                                    
                                }
                            }
                        ?>
                </select>
            </div>  
            <div class="mb-3 mt-3">
                <label for="fecha_desde" class="form-label">Fecha de Inicio del Alquiler</label>
                <input type="date" class="form-control " id="alq_fecha_desde" name="alq_fecha_desde" placeholder="Ingrese una fecha" value="<?php echo $row['alq_fecha_desde']?>" required>   
            </div>  
            <div class="mb-3 mt-3">
                <label for="fecha_hasta" class="form-label">Fecha Final del Alquiler</label>
                <input type="date" class="form-control " id="alq_fecha_hasta" name="alq_fecha_hasta" placeholder="Ingrese una fecha" value="<?php echo $row['alq_fecha_hasta']?>" required>
            </div>  
            <div class="mb-3 mt-3">
                <label for="input_valor" class="form-label">Valor a Pagar</label>
                <input type="number" class="form-control" id="alq_valor" name="alq_valor"
                    placeholder="Ingrese una cantidad numérica" value='<?php echo $row['alq_valor']?>' required>
            </div> 
            <div class="mb-3 mt-3">
                <label for="fecha_entrega" class="form-label">Fecha de Entrega del Alquiler</label>
                <input type="date" class="form-control " id="alq_fecha_entrega" name="alq_fecha_entrega"
                    placeholder="Ingrese una fecha" value="<?php echo $row['alq_fecha_entrega']?>" required>
            </div> 
                <input type="hidden" name="alq_id" value="<?php echo $row['alq_id'];?>">
                <br><button class="btn btn-primary" type="submit">Actualizar</button>
        </form>
        </div>
    </div>
</section>
<script>
(function() {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
})()
</script>
<?php include '../template/footer.php' ?>
    
