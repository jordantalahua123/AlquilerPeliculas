<?php include '../template/header.php' ?>
<?php include '../../controller/dashboard/index.php' ?>
<section class="content">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-video"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Películas</span>
                    <span class="info-box-number">
                        <?php echo $total_pel?>
                    </span>
                </div>
            </div>
        </div>
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-cash-register"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Alquileres</span>
                    <span class="info-box-number">
                        <?php echo $total_alq ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-circle"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total socios</span>
                    <span class="info-box-number"><?php echo $total_soc ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 ">
            <div class="card ">
                <div class="card-header border-0 ">
                    <div class="d-flex justify-content-center">
                        <H3 class="card-title text-bold text-lg">Ventas de alquileres</H3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex ">
                        <p class="d-flex flex-column">
                            <span class="text-bold text-lg ">Dinero obtenido: $<?php echo $total_alquileres?></span>
                        </p>
                    </div>
                    <div class="position-relative mb-4">
                        <canvas id="grafico-alquileres" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
const labels = <?php echo $meses ?>

const data = {
    labels: labels,
    datasets: [{
        label: 'Alquileres',
        data: <?php echo $alq_meses ?>,
        backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)',
            'rgb(120, 165, 120)',
            'rgb(160, 220, 200)',
            'rgb(90, 110, 90)',
            'rgb(145, 50, 200)'

        ],
        hoverOffset: 4
    }]
};

const config = {
    type: 'doughnut',
    data: data,
};
</script>
<script>
const myChart = new Chart(
    document.getElementById('grafico-alquileres'),
    config
);
</script>
<?php include '../template/footer.php' ?>