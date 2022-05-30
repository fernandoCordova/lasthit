<?php
include_once('../layout-admin/header.php');
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Panel de control</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Panel de control</li>
            </ol>
            <div class="row">
                <div class="col-xl-4 col-md-12">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Cantidad de usuarios registrados: </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Cantidad de usuarios administradores: </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Cantidad de usuarios que han visitado la pagina: </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                           Cantidad de usuarios nuevos registrados en los ultimos 7 dias
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="60"></canvas></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Cantidad de usuarios nuevos registrados por mes del año 2022
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="60"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="http://localhost/lasthit/assets/demo/chart-area-demo.js"></script>
    <script src="http://localhost/lasthit/assets/demo/chart-bar-demo.js"></script>
    <script src="http://localhost/lasthit/js/plantilla/datatables-simple-demo.js"></script>
    <?php
    include_once('../layout-admin/footer.php');
    ?>